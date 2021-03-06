<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <title>Contact - Episodes</title>
      <!-- Slider header -->
      <link rel="stylesheet" href="cssslider_files/csss_engine1/style.css">
      <!-- Favicon -->
      <link rel="icon" href="images/logo_icon.png" type="image/png">
      <!-- Hover.css -->
      <link rel="stylesheet" href="Hover-master/css/hover.css">
      <!--  CSS -->
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <link rel="stylesheet" type="text/css" href="css/accueil.css">
      <link rel="stylesheet" type="text/css" href="css/connect.css">
      <!-- Font -->
       <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
      <!-- Jquery -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!--[if IE]>
      <script type="text/javascript" src="js/modernizr.custom.78869.js"></script>
      <![endif]-->
</head>
<body>
      <?php 
         include('includes/db.php');
         include("header.php"); ?>


<div class="container">
    <form>
    	<select name="" required value="test">
    		<option>Problème</option>
    		<option>Publicité</option>
    		<option>Contenu inaproprié</option>
    		<option>Autre...</option>
    	</select>
    	<input type="mail" name="mail" placeholder="mail" required />
      <input type="web" name="web" placeholder="Votre site web"/>
    	<textarea name="contact" cols="30" rows="10" required ></textarea>
    	<input type="submit" />
    </form>
    </div>
<?php include("footer.php"); ?>	

</body>

</html>