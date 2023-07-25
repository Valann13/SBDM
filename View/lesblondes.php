<?php require_once("navigation.php ");?>


<main>
<div class="container-lg  containerExc1">
<h2>Voila toutes nos bieres blondes:</h2>

<div class="exercice1">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Couleur</th>
    </tr>
 </thead>


<?php foreach($ligne as $ligne): ?>

  <tbody>
  <tr>
      <td><?php echo"$ligne[ID_ARTICLE]";?></th>
      <td><?php echo"$ligne[NOM_ARTICLE]";?></td>
      <td><?php echo"$ligne[NOM_COULEUR]";?></td>
  </tr>
  </tbody>
  
<?php endforeach;?>

</table>
</div>
</div>
</main>
  


