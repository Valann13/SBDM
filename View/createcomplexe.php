<?php require_once("navigation.php ");?>


<main>
<div class="container-lg  containerExc1">
<h2>Ajout d'une nouvelle biere:</h2>

<div class="exercice2">

<form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

<div class=" col mb-3">
                <div>Nom Biere :
                <br>
                <label for="exampleInputName1" class="form-label"></label>
                <input type="text" class="form-control" name="nomBiere"></div>
                <br>    
                <div>Prix :
                <br>
                <label for="exampleInputNumber" class="form-label"></label>
                <input type="number" class="form-control" name="prix"></div>
                <br>             
                <div>Volume :
                <br>
                <br>
                <select class="form-select" aria-label="Default select example" name="volume">
                <option selected>Choisir</option>
                <option value="33">33cl</option>
                <option value="75">75cl</option>
                </select> 
                </div>
                <br> 
                <div>Marque :
                <br>
                <br>
                <select class="form-select" aria-label="Default select example" name="marque">
                <option selected>Choisir</option>
                <?php  foreach($ligne as $reponse):?>
                <option  value="<?php echo $reponse['ID_MARQUE'] ?>"><?php  echo $reponse['NOM_MARQUE']?></option> 
                <?php endforeach;?>
                </select>
                <br>  
                <button type="submit" name="soumettre" class="btn btn-primary ">Soumettre</button>
                </div>
                </div>
</form>
</div>
</div>
</main>

