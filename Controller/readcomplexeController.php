<?php
require_once("Model/readcomplexeModel.php");

class read1Controller {
        // Déclaration de la classe
    
private $model;
  
public function __construct() {
        $this->model = new modif();
        // Instanciation de la classe "modif" et assignation à la propriété privée "model"
}
    
public function index() {
        // Déclaration de la méthode "index" de la classe
        $ligne2 = $this->model->getliste();
        // Appel de la méthode "getliste()" du modèle pour obtenir les données et assignation à la variable "$ligne2"
        
        $ligne = $this->model->getModify();
        // Appel de la méthode "getModify()" du modèle pour obtenir les données et assignation à la variable "$ligne"
        
        require 'View/readcomplexe.php';
        // Inclusion du fichier de vue "readcomplexe.php"
}
}