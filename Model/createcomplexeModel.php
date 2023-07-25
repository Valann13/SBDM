<?php
class create {
  private $connexion;

  public function __construct() {
      require_once 'config.php';
      $this->connexion = new PDO("mysql:host=$dbHost;dbname=$bdd", $username, $pass);
      // Connexion à la base de données en utilisant les informations de configuration
  }

  public function getCreate() {
    // Méthode pour récupérer les données et effectuer l'insertion

    if (isset($_POST['nomBiere'])) {
      $nomBiere = $_POST['nomBiere'];
    }

    if (isset($_POST['prix'])) {
      $prix = $_POST['prix'];
    }

    if (isset($_POST['volume'])) {
      $volume = $_POST['volume'];
    }

    if (isset($_POST['marque'])) {
      $marque = $_POST['marque'];
    }

    if (isset($_POST['id'])) {
      $id = $_POST['id'];
    }

    if (isset($_POST['soumettre'])) {
      $soumettre = $_POST['soumettre'];
    }
    //Requete pour l'AI

    $sql = "SELECT MAX(ID_ARTICLE) as lastID FROM article";
    $reponse = $this->connexion->prepare($sql);
    $reponse->execute();
    $result = $reponse->fetch(PDO::FETCH_ASSOC);
    $lastId = $result['lastID'];

    $newId = $lastId + 1;

    //Requete pour la création de l'article
    $sql = "INSERT INTO article (ID_ARTICLE, NOM_ARTICLE, ID_MARQUE, VOLUME, PRIX_ACHAT) VALUES (:ID_ARTICLE, :NOM_ARTICLE, :ID_MARQUE, :VOLUME, :PRIX_ACHAT) ";
    // Vérification si le formulaire a été soumis
    $reponse = $this->connexion->prepare($sql);

    if (isset($soumettre)) {
        $reponse->bindValue(":ID_ARTICLE", $newId, PDO::PARAM_INT);
        $reponse->bindValue(":NOM_ARTICLE", $nomBiere, PDO::PARAM_STR);
        $reponse->bindValue(":ID_MARQUE", $marque, PDO::PARAM_INT); 
        $reponse->bindValue(":VOLUME", $volume, PDO::PARAM_INT);
        $reponse->bindValue(":PRIX_ACHAT", $prix, PDO::PARAM_INT);
    // Attribution des valeurs aux paramètres de la requête préparée
        $reponse->execute();
    }

    $resultat = $this->connexion->query("SELECT ID_MARQUE, NOM_MARQUE FROM marque");
    return $resultat->fetchAll(PDO::FETCH_ASSOC);
    // Récupération des données de la table "marque" pour affichage ultérieur
  }
  }


