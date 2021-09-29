<?php
include('connexion.php');
include_once('header.inc.php');



  // Sécuriser la page en creant une session qui ridirige vers la de connexion
  session_start();
  if(!$_SESSION['mdp']){
     header('location: connexion.admin.php');
  }
?>

<!DOCTYPE html>
  <html>
  <head>
       <title>Afficher tous les articles</title>
       <meta charset="utf-8">
       <link href="style.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

  </head >
  <body>
  <div class="flex items-center justify-center w-screen min-h-screen p-10">
  <!-- Resice the preview panel to check the responsiveness -->
  <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-2 max-w-6xl">
 
 

       <?php
           $recupArticles = $idcom->query('SELECT * FROM projet ORDER BY  id DESC');
           while($article = $recupArticles->fetch()){
               ?>
               
    <!-- Tile 1 -->
    <div class="flex flex-col bg-gray-200 rounded-lg p-4 m-2">
      
      <div class="flex flex-col items-start mt-4">
        <h4 class="text-xl font-semibold">Ampoules:&nbsp;&nbsp;<?= $article['ampoules'];?></h4>
        <h4 class="text-xl font-semibold">Etages :&nbsp;&nbsp;<?= $article['etages'];?></h4>
        <h4 class="text-xl font-semibold">Position :&nbsp;&nbsp;<?= $article['position'];?></h4>
        <h4 class="text-xl font-semibold">Prix :&nbsp;&nbsp;<?= $article['prix'];?></h4>
        <h4 class="text-xl font-semibold">Date :&nbsp;&nbsp;<?= $article['date_chgmt'];?></h4>
        <div class="inline-block mr-2 mt-2">
        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg"><a href="suppr.php?id=<?= $article['id']; ?>">Supprim</a></button>
        </div>
        <div class="inline-block mr-2 mt-2">
        <button type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg"><a href="modifier.php?id=<?= $article['id']; ?>">Modifier</a></button>
        </div>
    
        
      </div>
    </div>
    <!-- Tile 2 -->
    
    
        <?php
           }
          
       ?>
   </div>
    
  </body>
 
  </html>

