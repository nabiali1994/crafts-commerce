<html>
	<head>
		<title>Carthage Bay | Achat	</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./../assets/css/main.css" />
    <link rel="stylesheet" href="aa.css">
	</head>

	<body class="subpage">

<?php
$db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
$result = $db->query("SELECT titre FROM product");
$array=[];
while( $row=$result->fetch_array()){
array_push($array,"{$row['titre']}");
}
 ?>

<script >
$( function() {
  var availableTags= [''
	<?php
	foreach($array as $value){
		echo " ,'$value'";
	}
	?>
];
//document.write(availableTags[0]);
  $( "#tags" ).autocomplete({
    source: availableTags
  });
} );
</script>





<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


		<!-- Header -->
			<header id="header">
				<div class="inner">
				 <strong class="logo">Site web pour la commerce des artisanats</strong>
					<nav id="nav">
						<a href="./../index.php">Home</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>



<div class="container">
<h3> <center> Site web numero 1 pour la commerce des artisanats </center></h3>
<br><br>
<form method="post" action="recherche.php">
  <div class="row">
    <div class="col-md-4">
			<div class="ui-widget">
      <input id="tags"type="text" name="cherche"  placeholder="Que cherchez-vous" />
			</div>
		</div>
    <div class="col-md-3">
      <select name="category">
      <option value="">- Category -</option>
      <option value="vetements">vetements</option>
      <option value="food">food	</option>
      <option value="decor">decor</option>
      </select>
    </div>
    <div class="col-md-3">
      <select name="region">
      <option value="">- region -</option>
      <option value="Ariana">Ariana</option>
      <option value="Beja">Beja</option>
      <option value="Ben Arous">Ben Arous</option>
      <option value="Bizerte">Bizerte</option>
			<option value="Gabés">Gabés</option>
			<option value="Gafsa">Gafsa</option>
			<option value="Jendouba">Jendouba</option>
			<option value="Kairouan">Kairouan</option>
			<option value="Kasserine">Kasserine</option>
			<option value="Kebili">Kebili</option>
			<option value="La Manouba">La Manouba</option>
			<option value="Le Kef">Le Kef</option>
			<option value="Mahdia">Mahdia</option>
			<option value="Medenine">Medenine</option>
			<option value="Monastir">Monastir</option>
			<option value="Nabeul">Nabeul</option>
			<option value="Sfax">Sfax</option>
			<option value="Sidi Bouzid">Sidi Bouzid</option>
			<option value="Siliana">Siliana</option>
			<option value="Sousse">Sousse</option>
			<option value="Tataouine">Tataouine</option>
			<option value="Touzeur">Touzeur</option>
			<option value="Tunis">Tunis</option>
			<option value="Zaghouen">Zaghouen</option>
      </select>
    </div>
    <div class="col-md-2">
      <button type="submit" class="button">Chercher</button>
    </div>
  </div>
</form>
</div>

	</body>
</html>
