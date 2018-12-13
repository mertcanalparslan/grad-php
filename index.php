<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select Name,LastName from Users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_Ad = $row['Name'];
   $login_Soyad = $row['LastName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
<html>
   
   <head>
      <title>Test</title>
	  <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }         
      </style>
   </head>
   
   <body>
      <h1>Sayın <?php echo $login_Ad; ?> <?php echo $login_Soyad; ?> Hoşgeldiniz!</h1> 
      <h2><a href = "logout.php">Güvenli Çıkış</a></h2>
   </body>
   
</html>