<?php include 'header.php';?>
  
<link rel="stylesheet" href="../CSS/design-contact.css">
<link rel="stylesheet" href="../CSS/design-form.css">
<h1>Gestion Contact</h1>


 <!-- Font Awesome CDN-->
 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>



  <link rel="stylesheet" href="../admin/CSS/design-admin.css">

<body>


<form action="modifcontact.php" method="POST">

<label>Id</label>

<input name="id" type="text" value="<?php echo $_GET['id'];?>" readonly>
<br>
<div class="prenom">
    <label>Prénom</label>
    <br>
    <input class="area1" type="text" name="prenom" value="<?php echo $_GET['prenom'];?>"/>
</div>
<div>
    <label>Nom</label>
    <br>
    <input class="area1" type="text" name="nom" value="<?php echo $_GET['nom'];?>"/>
</div>
<div class="info">
    <label>Email</label>
    <br>
    <input class="area2" type="text" name="email" value="<?php echo $_GET['email'];?>"/>
</div>
<div class="info">
    <label>N° de téléphone</label>
    <br>
    <input class="area2" type="text" name="telephone" value="<?php echo $_GET['telephone'];?>"/>
</div>
<div class="info">
    <label>Message</label>
    <br>
    <textarea class="msg" name="message" value="<?php echo $_GET['message'];?>"></textarea>
</div>
 
<div>
    <input class="send" type="submit" value="Modifier"/>
</div>
</form>
<hr style="border-top: 1px solid red; border: 10px solid green;
  border-radius: 5px;">
<table id="table-admin">


  <tr>
    <th>Id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Message</th>
  </tr>

  <?php


//appel authentification.php:::::include
include('../db/connexion.php');

//requete SQL Select
//requete permet d'affcher tous les contact de la base de donné

$sql="SELECT * FROM `contact`";

//execution de requete SQL

$result=$conn->query($sql);


  //parcourir result de requete SQL $result

  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {

    ?>
    
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['nom'];?></td>
    <td><?php echo $row['prenom'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['telephone'];?></td>
    <td><?php echo $row['message'];?></td>

    
  </tr>

<?php

}

?>


</table>

</body>

<?php include 'footer.php';?>