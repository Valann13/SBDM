<?php

class listeBiere {
    private $connexion;

    public function __construct() {
        require_once 'config.php';
        // Inclusion du fichier de configuration contenant les informations de connexion à la base de données
        $this->connexion = new PDO("mysql:host=$dbHost;dbname=$bdd", $username, $pass);
        // Connexion à la base de données en utilisant les informations de configuration
    }

    public function getListebiere() {
        // Méthode pour récupérer la liste des bières
        
        // Préparation de la requête
        $requete = $this->connexion->query("SELECT A.ID_ARTICLE,A.NOM_ARTICLE,A.PRIX_ACHAT,A.VOLUME,A.TITRAGE,M.NOM_MARQUE,C.NOM_COULEUR,T.NOM_TYPE 
                                           FROM article AS A 
                                           LEFT JOIN couleur AS C ON A.ID_COULEUR = C.ID_COULEUR 
                                           LEFT JOIN marque AS M ON A.ID_MARQUE = M.ID_MARQUE 
                                           LEFT JOIN typebiere AS T ON A.ID_TYPE = T.ID_TYPE 
                                           ORDER BY A.ID_ARTICLE");
        // Sélection des colonnes ID_ARTICLE, NOM_ARTICLE, PRIX_ACHAT, VOLUME, TITRAGE, NOM_MARQUE, NOM_COULEUR, NOM_TYPE
        // de la table article, avec les jointures avec les tables couleur, marque et typebiere
        // Les jointures sont faites sur les colonnes ID_COULEUR, ID_MARQUE et ID_TYPE respectivement
        // Les résultats sont triés par ordre croissant de ID_ARTICLE
        
        $requete->execute();
        // Exécution de la requête
        
        return $requete->fetchAll(PDO::FETCH_ASSOC);
        // Récupération de tous les résultats de la requête sous forme d'un tableau associatif
    }
}

