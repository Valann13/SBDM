<?php require_once("navigation.php ");?>

<main>
<div class="container-lg  containerExc1">
<h2>La table "couleur"</h2>

<div class="exercice1">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Couleur</th>
      <th scope="col">Modifier le Nom</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th> 
    </tr>
 </thead>

 <?php 
 
foreach( $ligne as $reponse): ?>


   <tbody>
   <tr> 
     <form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
       <td><?php echo"$reponse[ID_COULEUR]";?></td>
       <td><?php echo"$reponse[NOM_COULEUR]";?></td>
       <td><label for="exampleInputName1" class="form-label"></label>
          <input type="text" class="form-control" name="nom"  id="exampleInputName1"></div></td>
          <td>     
          <input type="hidden" name='id' value="<?php echo $reponse['ID_COULEUR'] ?>">
       <button type="submit" name="modifier"  class="btn btn-primary ">Modifier</button></td>  
       <td>    
       <button type="submit" value="<?php  echo $reponse['ID_COULEUR']?>" name="supprimer" class="btn btn-primary ">Supprimer</button></td>
     </form>
   </tr>
   </tbody>

<?php endforeach;?>

</div>
</div>
</main>
  
