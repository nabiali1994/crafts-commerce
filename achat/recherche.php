<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="aa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>
  <body class="subpage">
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

    <?php
    $search = $_POST['cherche'];
    $category = $_POST['category'];
    $region = $_POST['region'];
    $db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
    if($search!=""and$category!=""and $region!=""){
      $result = $db->query("SELECT * FROM product where  titre='$search' and categorie='$category'and region='$region'ORDER BY vu DESC");
    }
    else if($search!=""and$category==""and $region!=""){
      $result = $db->query("SELECT * FROM product where titre='$search'and region='$region'ORDER BY vu DESC");
    }
    else if($search!=""and$category!=""and $region==""){
      $result = $db->query("SELECT * FROM product where categorie='$category'and titre='$search'ORDER BY vu DESC");
    }
    else if($search==""and$category!=""and $region!=""){
      $result = $db->query("SELECT * FROM product where categorie='$category'and region='$region'ORDER BY vu DESC");
    }
    else if ($search==""and$category!=""and $region==""){
      $result = $db->query("SELECT * FROM product where categorie='$category'ORDER BY vu DESC");
    }
    else if ($search!=""and$category==""and $region==""){
      $result = $db->query("SELECT * FROM product where titre LIKE'%$search%'ORDER BY vu DESC");
    }
    else if ($search==""and$category==""and $region!=""){
      $result = $db->query("SELECT * FROM product where region='$region'ORDER BY vu DESC");
    }
    else{
        $result = $db->query("SELECT * FROM product ORDER BY vu DESC");
    }
    ?><br><br><br><?php
    while ($row = $result->fetch_array())
    {
    ?>
    <?php

    $res=$db->query("SELECT * from users where email='{$row['email']}'");
    $rowe = $res->fetch_array();

    ?>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6" style="background:#f5f5f5;">
        <div class="row">
          <div class="col-md-4"><br>
            <img class="jj" src="../items/<?php echo $row['image'];?>" width="180px" height="130px">
          </div>
          <div class="col-md-4 ">
            <br>
            <h4>  <?php echo'<a href="detail.php?id='.$row['id'].'">'. $row['titre'] .'</a>'; ?>
            </h4><br><?=$rowe['name'];?> &nbsp;&nbsp;&nbsp; <?=$rowe['tel'];?>
            <h5>  <?php echo $row['prix']; ?> DT<br></h5>
            <?php echo $row['region']; ?>
          </div>
          <div class="col-md-4">
            <br><br>Nombre d'unités restantes: <?=$row['quantite'];?>
            <br><br>
            <center>
              <i class="fa fa-eye fa-2x" aria-hidden="true"></i><br>
              <?=$row['vu'];?>
            </center>
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
