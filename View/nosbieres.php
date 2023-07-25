<?php require_once("navigation.php ");?>

<main>
<div class="container-lg  containerExc1">
<h2>Voila les biéres que nous possédons:</h2>

<div class="exercice1">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Volume</th>
      <th scope="col">Titrage</th>
      <th scope="col">Marque</th>
      <th scope="col">Couleur</th>
      <th scope="col">Type</th>
    </tr>
 </thead>
 
 <?php foreach($ligne as $ligne): ?>


<tbody>
<tr>
    <td><?php echo"$ligne[ID_ARTICLE]";?></th>
    <td><?php echo"$ligne[NOM_ARTICLE]";?></td>
    <td><?php echo"$ligne[PRIX_ACHAT]";?></td>
    <td><?php echo"$ligne[VOLUME]";?></td>
    <td><?php echo"$ligne[TITRAGE]";?></td>
    <td><?php echo"$ligne[NOM_MARQUE]";?></td>
    <td><?php echo"$ligne[NOM_COULEUR]";?></td>
    <td><?php echo"$ligne[NOM_TYPE]";?></td>
</tr>
</tbody>

<?php endforeach;?>

</table>
</div>
</div>
</main>


 
