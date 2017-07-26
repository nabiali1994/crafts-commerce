<?php
session_start();
 if (!isset($_SESSION['signed-in'])){
   header('location: ../sign/sign-in.php');
 }

 $email=$_SESSION['email'];
 $name=$_SESSION['name'];

if(isset($_POST['submit']))
  {

$tmp_name1=$_FILES['img1']['tmp_name'];
$tmp_name2=$_FILES['img2']['tmp_name'];
$filename1=time().".jpg";
    $prix=$_POST["prix"];
    $reg=$_POST["Régions"];
    $titre=$_POST["titre"];
    $desc=$_POST["desc"];
    $quantite=$_POST["qte"];
$filename2=time()."1.jpg";
$categorie=$_POST['categorie'];
   move_uploaded_file($tmp_name1,$filename1);
    move_uploaded_file($tmp_name2,$filename2);
    $db = mysqli_connect('35.160.127.179','butterflies','butter2017','butterflies');
    //mysqli_connect server username password database
    if($db)
    {
    //$result = mysqli_query($db,$sql);
    //foreach ($result as $personne) {
    //  $personne->name;  //}
    mysqli_query($db,"INSERT INTO product VALUES (NULL,'$email','$titre','$reg','$categorie','$quantite','$prix','$filename1','$desc','$filename2',0)");

echo $db->error;
    }




  }
  else{
    die("mwaher frere");
  }

  require 'Mailer/PHPMailerAutoload.php';
   $message = file_get_contents('beefree.html');
   $message = str_replace("{{name}}", $name, $message);
   $message = str_replace("{{titre}}", $titre, $message);


  $mail = new PHPMailer(); // create a new object
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 465; // or 587
  $mail->IsHTML(true);
  $mail->Username = "carthagebay@gmail.com";
  $mail->Password = "carthagebayaliilyessfakher";
  $mail->SetFrom("carthagebay@gmail.com");
  $mail->Subject = "annonce carthagebay";
  $mail->CharSet="utf-8";
  $mail->MsgHTML($message);
  $mail->AddAddress($email);
  $mail->Send();
//mail("ilyess94@hotmail.com","My subject",$message);
//echo '<script>setTimeout("location.href = retour_principale.php;",0);</script>';
header('location: retour_principale.php');
 ?>
