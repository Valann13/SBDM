<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/ExerciceECF/style.css">

  
    <title>ECF</title>
</head>
<body>

<header>
  
<?php require_once 'config.php';?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid ">

  <img src="/ExerciceECF/image/Logo.png" class="logosdbm" alt="logo SDBM">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active"  href="<?php echo''. root .'/nosbieres'?>">Nos biéres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/lesblondes'?>">Les blondes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/lesbrunes'?>">Les brunes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/lesblanches'?>">Les blanches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/lesambree'?>">Les ambrées</a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/createsimple'?>">CREATE simple(couleur)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/readsimple'?>">READ & MODIFY simple(couleur)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/createcomplexe'?>">CREATE complexe(biere)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo''. root .'/readcomplexe'?>">READ & MODIFY complexe(biere)</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</header>