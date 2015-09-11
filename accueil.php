<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <link rel="stylesheet" type="text/css" href="css/connect.css">
      <link rel="stylesheet" type="text/css" href="css/accueil.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
      <!--[if IE]>
      <script type="text/javascript" src="js/modernizr.custom.78869.js"></script>
      <![endif]-->

   </head>
   <body>
      <header>
         <div class="hello"><?php
            session_start();
            
            if ( empty($_SESSION['users']) ) {
              header('Location: connection.html');
              die();
            }
            
            echo "Bonjour " . $_SESSION['users']['pseudo']."  ";
            ?><a href="logout.php"><button><i class="fa fa-sign-out"></i> Log out</button></a></div>
         <a href="accueil.php">
            <h1>Forum</h1>
         </a>
      </header>
      <div class="nav">
         <a href="liste.php">Liste des membres</a></br>
         <a href="inscription.html">Inscription</a></br>
         <a href="connection.html">Connexion</a></br>
      </div>
      <?php 
         $dsn = 'mysql:host=localhost;dbname=forumlepoles';
         $user = 'root';
         $pass = '';
         
         $pdo = new PDO(
           $dsn,
           $user,
           $pass
         );
         
         $request = $pdo->query( 'SELECT * FROM topics ORDER BY creation DESC;' );
         $result = $request->fetchAll();
         $ligne=count($result);
         
         
         
          ?>
      <a href="formulaire_topic.php">
         <h2>Nouveau topic <i class="fa fa-plus"></i></h2>
      </a>
      <table>
         <thead>
            <tr>
               <td>Topics</td>
               <td>Auteurs</td>
               <td >Dates</td>
            </tr>
         </thead>
         <tbody>
            <?php for ($i=0; $i<$ligne;$i++){ ?>
            <tr>
               <td class="topic"><a href="topic.php?id=<?=$result[$i]['id']?>"><?=$result[$i]['title']?></a></td>
               <td> <a href="#"><?php 
                  $request2 = $pdo->query( 'SELECT * FROM users WHERE id="' .$result[$i]['creatorId']. '"' );
                  $result2 = $request2->fetchAll();
                  echo $result2[0]['pseudo'];
                  ?></a></td>
               <td class="date"> <a href="#"><?=$result[$i]['creation']?></a></td>
            </tr>
            <?php }
               ?>
         </tbody>
      </table>
   </body>
</html>