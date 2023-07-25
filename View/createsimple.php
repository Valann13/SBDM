<?php require_once("navigation.php ");?>


<main>
<div class="container-lg  containerExc1">
<h2>Ajout d'une nouvelle couleur de biere:</h2>

<div class="exercice2">

<form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

<div class=" col mb-3">
                <div>Nouvelle couleur :
                <br>
                <label for="exampleInputName1" class="form-label"></label>
                <input type="text" class="form-control" name="nomCouleur" id="exampleInputName1"></div>
                <br>                
                <button type="submit" name="soumettre" class="btn btn-primary ">Soumettre</button>
                </div>
</form>
</div>
</div>
</main>




    