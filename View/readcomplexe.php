<?php require_once("navigation.php ");?>

<main>
<div class="container-lg  containerExc1">
<h2>La table "biere"</h2>

<div class="exercice1">


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Biere</th>
      <th scope="col">Prix</th>
      <th scope="col">Volume</th>
      <th scope="col">Marque</th>
      <th scope="col">Modifier Nom</th>
      <th scope="col">Modifier Marque</th> 
       <th scope="col">Modifier </th> 
      <th scope="col">Supprimer</th>
  
    </tr>
 </thead>

 <?php 
 
foreach( $ligne as $reponse): ?>


   <tbody>
   <tr> 
     <form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
       <td><?php echo"$reponse[ID_ARTICLE]";?></td>
       <td><?php echo"$reponse[NOM_ARTICLE]";?></td>
       <td><?php echo"$reponse[PRIX_ACHAT]";?></td>
       <td><?php echo"$reponse[VOLUME]";?></td>
       <td><?php echo"$reponse[NOM_MARQUE]";?></td>
     <td>
       <label for="exampleInputName1" class="form-label"></label>
       <input type="text" class="form-control" name="nom"  id="exampleInputName1"></div></td>
       <td>
          <select class="form-select" aria-label="Default select example "name="marque" id='marque2'>
                <option selected>Choisir</option>
                <?php  foreach($ligne2 as $reponse2):?>
                <option  value="<?php echo $reponse2['ID_MARQUE'] ;?>"><?php  echo $reponse2['NOM_MARQUE'];?></option> 
                <?php endforeach;?>
          </select>
        </td>  
        <td>
       <input type="hidden" name='idArticle' value="<?php echo $reponse['ID_ARTICLE'] ;?>">
       <button type="submit" name="modifier"  class="btn btn-primary ">Modifier</button></td>  
       <td>    
       <button type="submit" value="<?php  echo $reponse['ID_ARTICLE'];?>" name="supprimer" class="btn btn-primary ">Supprimer</button></td>
       <td>  
      
     </form>
   </tr>
   </tbody>

<?php endforeach;?> 

</div>
</div>
</main>
  