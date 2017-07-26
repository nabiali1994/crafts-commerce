<?php
include('../config.php');
  session_start();
  if (!isset($_SESSION['signed-in'])){
    header('location: sign-in.php');
}
  $client=$_SESSION['email'];
 ?>


 <?php
 if(isset($_POST['submit'])){
   if(isset($_GET['id'])){
   $id = $_GET['id'];
   $query = "DELETE FROM product WHERE id =$id ";
   $result = mysqli_query($db, $query);
}}
  ?>
<html>
	<head>
		<title>Carthage Bay | Ma Boutique</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
	</head>
	<body class="subpage">
		<header id="header">
			<div class="inner">
				<a href="./compte.php" class="logo"><strong>Bienvenue, <?= $_SESSION['name']?></strong> </a>
				<nav id="nav">
					<a href="./../index.php">Home</a>
          <a href="./sign-out.php">Se déconnecter</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>
    <br><br><br><br><br><center><h2>Votre Boutique</h2></center><br><br><br><br>
    <?php
      $query = "SELECT * FROM product WHERE email = '$client'";
      $result = mysqli_query($db, $query);
      while ($row = $result->fetch_array())
      {
    ?>
    <div class="row" >
      <div class="col-md-3"></div>
      <div class="col-md-6" style="background:#f5f5f5;">
        <div class="row">
          <div class="col-md-4">
            <br>
            <img src="./../items/<?php echo $row['image'];?>" width="180px" height="130px">
            <br>
          </div>
          <div class="col-md-3">
            <h4>  <?php echo $row['titre']; ?> </h4><br>
            <h5>  <?php echo $row['prix']; ?> DT<br></h5>
            <?php echo $row['region']; ?>
          </div>
          <div class="col-md-5">
            <br><br>
            <form action="compte.php?id=<?=$row['id']?>" method="post">
              <button name="submit" type="submit">effacer</button>
            </form>
            nombre des unités restantes: <?=$row['quantite']?>
            <a href="edit.php?id=<?= $row['id']?>">editer Nombre</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php
      }
    ?>
  </body>
</html>
