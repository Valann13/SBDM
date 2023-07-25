<?php

class modif{

private $connexion;

public function __construct() {
require_once 'config.php';
$this->connexion = new PDO("mysql:host=$dbHost;dbname=$bdd", $username, $pass );

}
public function getModify( ){
 
    if( isset($_POST['supprimer'] )){
        $suppid=$_POST ['supprimer'];
    }  
    
    
$requete = $this->connexion->query("SELECT ID_COULEUR, NOM_COULEUR FROM couleur" );
$requete->execute();

    
$sql = "DELETE FROM couleur WHERE ID_COULEUR =:ID_COULEUR";
$reponse =$this->connexion->prepare($sql);
     
          
if(isset($suppid)){
    $reponse->execute(array(":ID_COULEUR"=>$suppid ));
    } 


if( isset($_POST['modifier'] )){
    $modifier=$_POST ['modifier'];
        }         
        
if( isset($_POST['id'] )){
    $id=$_POST ['id'];
            }   
       
if( isset($_POST['nom'] )){
    $nom=$_POST ['nom'];
              }   
        
$sql = "UPDATE couleur SET NOM_COULEUR=:NOM_COULEUR  WHERE ID_COULEUR=:ID_COULEUR";
$reponse =$this->connexion->prepare($sql); 
        
if(isset($modifier)){
        
    $reponse->bindvalue(":ID_COULEUR",$id,PDO::PARAM_INT );
    $reponse->bindvalue(":NOM_COULEUR",$nom,PDO::PARAM_STR );
    $reponse->execute();}
        
return $requete->fetchAll(PDO::FETCH_ASSOC);     
    }
}