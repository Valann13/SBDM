<?php
require_once("Model/createsimpleModel.php");

class createController {
    // Déclaration de la classe
    
private $model;
  
public function __construct() {
        $this->model = new create();
        // Instanciation de la classe "create" et assignation à la propriété privée "model"
}
    
public function index() {
        require 'View\createsimple.php';
        // Inclusion du fichier de vue "createsimple.php"
        
        $nouvelleC = $this->model->getCreate();
        // Appel de la méthode "getCreate()" du modèle pour obtenir les données et assignation à la variable "$nouvelleC"
}
}



   

    





   
