<?php
require_once("Model/lesblondesModel.php");

class lesblondesController {
    // Déclaration de la classe
    
private $model;
  
public function __construct() {
        $this->model = new couleur();
        // Instanciation de la classe "couleur" et assignation à la propriété privée "model"
    }
    
public function index() {
        $ligne = $this->model->getCouleur();
        // Appel de la méthode "getCouleur()" du modèle pour obtenir les données et assignation à la variable "$ligne"
        
        require 'View/lesblondes.php';
        // Inclusion du fichier de vue "lesblondes.php"
}
}