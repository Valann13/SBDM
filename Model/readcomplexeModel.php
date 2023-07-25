<?php

class modif {
    private $connexion;

    public function __construct() {
        require_once 'config.php';
        $this->connexion = new PDO("mysql:host=$dbHost;dbname=$bdd", $username, $pass);
    }

    public function getliste() {
        // Récupération des marques depuis la table "marque"
        $resultat = $this->connexion->query("SELECT ID_MARQUE, NOM_MARQUE FROM marque");
        return $resultat->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getModify() {
        // Récupération des données envoyées par le formulaire
        if (isset($_POST['prix'])) {
            $prix = $_POST['prix'];
        }
        if (isset($_POST['volume'])) {
            $volume = $_POST['volume'];
        }
        if (isset($_POST['marque'])) {
            $marque = $_POST['marque'];
        }
        if (isset($_POST['soumettre'])) {
            $soumettre = $_POST['soumettre'];
        }
        if (isset($_POST['modifier'])) {
            $modifier = $_POST['modifier'];
        }
        if (isset($_POST['nom'])) {
            $nom = $_POST['nom'];
        }
        if (isset($_POST['supprimer'])) {
            $suppid = $_POST['supprimer'];
        }
        if (isset($_POST['idArticle'])) {
            $idArticle = $_POST['idArticle'];
        }

        // Récupération des articles avec les données associées depuis la table "article" et la table "marque"
        $requete = $this->connexion->query("SELECT A.ID_ARTICLE, A.NOM_ARTICLE, A.PRIX_ACHAT, A.VOLUME, M.NOM_MARQUE, M.ID_MARQUE
            FROM article AS A 
            INNER JOIN marque as M ON A.ID_MARQUE = M.ID_MARQUE 
            ORDER BY A.ID_ARTICLE DESC LIMIT 10");
        $requete->execute();

        /////////////////////////

        // Requête pour supprimer un article basé sur son ID_ARTICLE
        $sql = "DELETE FROM article WHERE ID_ARTICLE = :ID_ARTICLE";
        $reponse = $this->connexion->prepare($sql);

        if (isset($suppid)) {
            $reponse->execute(array(":ID_ARTICLE" => $suppid));
        }

        ///////////////////////

        // Requête pour mettre à jour l'ID_MARQUE d'un article basé sur son ID_ARTICLE
        $sql2 = "UPDATE article SET ID_MARQUE = :ID_MARQUE WHERE ID_ARTICLE = :ID_ARTICLE";

        // Requête pour mettre à jour le NOM_ARTICLE d'un article basé sur son ID_ARTICLE
        $sql3 = "UPDATE article SET NOM_ARTICLE = :NOM_ARTICLE WHERE ID_ARTICLE = :ID_ARTICLE";

        $reponse2 = $this->connexion->prepare($sql2);
        $reponse3 = $this->connexion->prepare($sql3);

        if (isset($modifier)) {
            // Exécution de la requête pour mettre à jour l'ID_MARQUE
            $reponse2->bindValue(":ID_ARTICLE", $idArticle, PDO::PARAM_INT);
            $reponse2->bindValue(":ID_MARQUE", $marque, PDO::PARAM_INT);
            $reponse2->execute();

            // Exécution de la requête pour mettre à jour le NOM_ARTICLE
            $reponse3->bindValue(":ID_ARTICLE", $idArticle, PDO::PARAM_INT);
            $reponse3->bindValue(":NOM_ARTICLE", $nom, PDO::PARAM_STR);
            $reponse3->execute();
        }

        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
}



