<?php

function ChoixPage() {

    $url = $_SERVER['REQUEST_URI'];

    $path = parse_url($url, PHP_URL_PATH);
    // Récupération du chemin de l'URL
    // parse_url() permet de découper une URL en différentes parties
    
    $parts = explode('/', $path);
    // Découpage du chemin en segments en utilisant le caractère "/"
    // explode() retourne un tableau de chaînes de caractères
    
    $page = '/'.end($parts);
    // Récupération de la dernière partie du chemin (nom de la page)
    
    // Condition pour trouver la page désirée
    if($page ==='/nosbieres'){
    
        require_once 'Controller/nosbieresController.php';
        // Inclusion du contrôleur pour la page "nosbieres"
    
        $controller = new nosbieresController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index(); 
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/lesblondes'){
    
        require_once 'Controller/lesblondesController.php';
        // Inclusion du contrôleur pour la page "lesblondes"
    
        $controller = new lesblondesController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index(); 
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/lesbrunes'){
    
        require_once 'Controller/lesbrunesController.php';
        // Inclusion du contrôleur pour la page "lesbrunes"
    
        $controller = new lesbrunesController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/lesblanches'){
    
        require_once 'Controller/lesblanchesController.php';
        // Inclusion du contrôleur pour la page "lesblanches"
    
        $controller = new lesblanchesController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/lesambree'){
    
        require_once 'Controller/lesambreeController.php';
        // Inclusion du contrôleur pour la page "lesambree"
    
        $controller = new lesambreeController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/createsimple'){
    
        require_once 'Controller/createsimpleController.php';
        // Inclusion du contrôleur pour la page "createsimple"
    
        $controller = new createController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/readsimple'){
    
        require_once 'Controller/readsimpleController.php';
        // Inclusion du contrôleur pour la page "readsimple"
    
        $controller = new modifController();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/createcomplexe'){
    
        require_once 'Controller/createcomplexeController.php';
        // Inclusion du contrôleur pour la page "createcomplexe"
    
        $controller = new create1Controller();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    elseif($page ==='/readcomplexe'){
    
        require_once 'Controller/readcomplexeController.php';
        // Inclusion du contrôleur pour la page "readcomplexe"
    
        $controller = new read1Controller();
        // Création d'une nouvelle instance du contrôleur
    
        $controller->index();
        // Appel de la méthode "index()" du contrôleur
    }
    else{
        echo 'Page non trouvée';
    }
}

echo ChoixPage();
// Appel de la fonction "ChoixPage()"

?>