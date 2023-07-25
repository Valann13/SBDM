<?php

class Couleur {
    private $connexion;

    public function __construct() {
        require_once 'config.php';
        // Inclusion du fichier de configuration contenant les informations de connexion à la base de données
        $this->connexion = new PDO("mysql:host=$dbHost;dbname=$bdd", $username, $pass);
        // Connexion à la base de données en utilisant les informations de configuration
    }

    public function getCouleur() {
        // Méthode pour récupérer les données de couleur
        
        // Préparation de la requête
        $requete = $this->connexion->query("SELECT A.ID_ARTICLE,A.NOM_ARTICLE,C.NOM_COULEUR 
                                           FROM article AS A INNER JOIN couleur AS C ON C.ID_COULEUR = A.ID_COULEUR 
                                           WHERE NOM_COULEUR LIKE '%Brune%'");
        // Sélection des colonnes ID_ARTICLE, NOM_ARTICLE, NOM_COULEUR de la table article et couleur
        // Jointure entre les tables article et couleur sur la colonne ID_COULEUR
        // Filtre pour récupérer les enregistrements ayant le nom de couleur contenant "Brune"
        
        $requete->execute();
        // Exécution de la requête
        
        return $requete->fetchAll(PDO::FETCH_ASSOC);
        // Récupération de tous les résultats de la requête sous forme d'un tableau associatif
    }
}