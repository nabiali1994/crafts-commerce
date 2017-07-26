<?php
$db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
$id = $_GET['id'];
if(isset($_POST['submit'])){
  $edit = $_POST['edit'];
  $result = $db->query("UPDATE product SET quantite='$edit' where id=$id");
  header('location: compte.php');
}
 ?>

 <?php
 include('../config.php');
   session_start();
   if (!isset($_SESSION['signed-in'])){
     header('location: sign-in.php');
 }
   $client=$_SESSION['email'];
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
     <?php
       $query = "SELECT * FROM product WHERE id = '$id'";
       $result = mysqli_query($db, $query);
       $row = $result->fetch_array()
     ?>
      <br><br><br><br><br><center><h2><?php echo $row['titre']; ?> </h2></center><br><br><br><br>
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
             <form action="edit.php?id=<?php echo $id;?>" method="post">
               <input type="text" placeholder="Donner le nouveau nombre d'unités" name="edit"></input>
               <br>
               <center><button name="submit" type="submit">Editer</button></center>
             </form>

           </div>
         </div>
       </div>
     </div>
     <br>

   </body>
 </html>
