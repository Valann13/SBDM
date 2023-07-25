<?php
require_once("Model/nosbieresModel.php");

class nosbieresController {
        // Déclaration de la classe
    
private $model;
  
public function __construct() {
        $this->model = new listeBiere();
        // Instanciation de la classe "listeBiere" et assignation à la propriété privée "model"
}
    
public function index() {
        // Déclaration de la méthode "index" de la classe 
        $ligne = $this->model->getListebiere();
        // Appel de la méthode "getListebiere()" du modèle pour obtenir les données et assignation à la variable "$ligne"
     
        require 'View/nosbieres.php';
        // Inclusion du fichier de vue "nosbieres.php"
}
}