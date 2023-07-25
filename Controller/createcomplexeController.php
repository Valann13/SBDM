<?php

require_once("Model/createcomplexeModel.php");

class create1Controller {
    // Déclaration de la classe

private $model;
  
public function __construct() {
        $this->model = new create();
        // Instanciation de la classe "create" et assignation à la propriété privée "model"
}
    
public function index() {
        // Méthode index : point d'entrée de votre controller
        
        $ligne = $this->model->getCreate();
        // Appel de la méthode "getCreate()" du modèle pour obtenir les données et assignation à la variable "$ligne"
        
        require 'View/createcomplexe.php';
        // Inclusion du fichier de vue "createcomplexe.php" pour afficher les données
    }
}
