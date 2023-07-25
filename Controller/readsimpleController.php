<?php
require_once("Model/readsimpleModel.php");

class modifController {
    // Déclaration de la classe
    
private $model;
  
public function __construct() {
        $this->model = new modif();
        // Instanciation de la classe "modif" et assignation à la propriété privée "model"
}
    
public function index() {
        // Déclaration de la méthode "index" de la classe

        // Appel de la méthode "getModify()" du modèle pour obtenir les données et assignation à la variable "$ligne"
  

        $ligne = $this->model->getModify();
        require 'View/readsimple.php';
        // Inclusion du fichier de vue "readsimple.php"
}
}