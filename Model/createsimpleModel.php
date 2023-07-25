<?php
class create {

    private $connexion;
    
    public function __construct() {
        require_once 'config.php';
        // Inclusion du fichier de configuration contenant les informations de connexion à la base de données
        $this->connexion = new PDO("mysql:host=$dbHost;dbname=$bdd", $username, $pass);
        // Connexion à la base de données en utilisant les informations de configuration
    }

    public function getCreate() {
        // Méthode pour récupérer les données et effectuer l'insertion
        
        if (isset($_POST['nomCouleur'])) {
            $nomCouleur = $_POST['nomCouleur'];
        }
        
        if (isset($_POST['soumettre'])) {
            $soumettre = $_POST['soumettre'];
        }
        
        $sql = "SELECT MAX(ID_COULEUR) as lastID FROM couleur";
        // Requête pour récupérer l'ID maximum de la table "couleur"
        $reponse = $this->connexion->prepare($sql);
        $reponse->execute();
        $result = $reponse->fetch(PDO::FETCH_ASSOC);
        $lastId = $result['lastID'];
        // Récupération de l'ID maximum
        
        $newId = $lastId + 1;
        // Génération d'un nouvel ID en incrémentant l'ID maximum
        
        $sql = "INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:ID_COULEUR, :NOM_COULEUR)";
        // Requête d'insertion dans la table "couleur"
        
        if (isset($soumettre)) {
            // Vérification si le formulaire a été soumis
            $reponse = $this->connexion->prepare($sql);
            $reponse->bindValue(':ID_COULEUR', $newId, PDO::PARAM_INT);
            $reponse->bindValue(':NOM_COULEUR', $nomCouleur, PDO::PARAM_STR);
            // Attribution des valeurs aux paramètres de la requête préparée
            $reponse->execute();
            // Exécution de la requête d'insertion
        }
    }
} 
  





