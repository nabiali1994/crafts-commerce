<?php
$db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
$id = $_GET['id'];
$result = $db->query('SELECT * FROM product where id='.$id);
$db->query('UPDATE product SET vu=vu+1 where id='.$id);
$row=$result->fetch_array();
$x=$row['email'];
/*.$row['email']*/
$res = $db->query("SELECT * FROM users where email='".$row['email'] . "'");
$rowe=$res->fetch_array();
 ?>





<html>
	<head>
		<title>Carthage Bay | detail</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="aa.css">
    <style type="text/css">
        .imge{
            height: 200px;
            width: 280px;
            border-radius:50px;
            overflow:hidden;
            }
        h2{
          margin-left: 120px;
        }
    </style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
				 <strong class="logo">Site web pour la commerce des artisanats</strong>
					<nav id="nav">
            <a href="achat.php">Retour à la page de recherche</a>
						<a href="./../index.php">Home</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <br><br><br><center><h2><b><?php echo $row['titre'];?>(<?php echo $row['region'];?>)</b></h2></center><br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="background:#f5f5f5;">
          <div class="row">
            <br>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <br>
                <img class="imge"src="../items/<?php echo $row['image'];?>">
                <br><br>,
                <img class="imge"src="../items/<?php echo $row['image2'];?>">
                <br>
            </div>
            <div class="col-md-5">
              <br>
              <h3><b>Prix: </b><?php echo $row['prix'];?> DT</h3>
              <h3><b>Quantite Restante: </b><?php echo $row['quantite'];?> </h3>
              <h3><b>Description: </b></h3><p style="font-size:150%;"><?php echo $row['description'];?></p>
              <h3><b>Informations sur le vendeur:</b></h3>
              Nom Complet:&nbsp;<?php echo $rowe['name'];?>&nbsp;<?php echo $rowe['surname'];?>
              <br>
              mail:&nbsp;<?php echo $rowe['email'];?>
              <br>
              Numero de telephone:&nbsp;<?php echo $rowe['tel'];?>
            </div>
            <div class="col-md-1">
              <br>
              <center>
              <i class="fa fa-eye fa-3x" aria-hidden="true"></i><br>
              <h3><?php echo $row['vu'];?></center></h3>
            </div>
          </div>
          <br><br>
        </div>
      </div>
      <br><br><br><br>
      <h2>Les commentaires:</h2>
          <?php
          $resultcommentaire= $db->query('SELECT * FROM commentaire where id='.$id);
          while ($row = $resultcommentaire->fetch_array())
          {
          ?>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6" style="background:#BEF574;">
              <b>Nom:</b> <?php echo $row['name'];?>
            <br>
            <b>Commentaire:</b> <?php echo $row['commentaire'];?>
            </div>
          </div>
          <br>
          <?php
          }
          ?>
      <br>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <form action="detail1.php" method="post">
            <input name="id_produit" type="hidden" value="<?php echo $id;?>" />
          <h3>Ajouter un commentaire:</h3>
          <div class="row">
            <div class="col-md-7">
            <div class="row">
              <div class="col-md-4">
                <input type="text" name="name" placeholder="Votre nom complet">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
                <input type="text" name="email" placeholder="Votre e-mail">
              </div>
            </div>
            <br>
            <textarea name="commentaire" rows="6" cols="60" placeholder="Mettre votre commentaire ici .."></textarea>
            </div>
            <div class="col-md-1">
              <button type="submit" name="submit">Ajouter votre commentaire</button>
            </div>
          </div>
          </form>
        </div>

      </div>
    </body>
  </html>
