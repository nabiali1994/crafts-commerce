<?php
$db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');

if(isset($_POST['submit'])){
  $id=$_POST['id_produit'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $commentaire=$_POST['commentaire'];
  $query = "INSERT INTO commentaire VALUES ($id,'$name','$email','$commentaire')";
  $insertion=mysqli_query($db, $query);
  echo $db->error;
  header('location:detail.php?id='.$id);
}
?>
