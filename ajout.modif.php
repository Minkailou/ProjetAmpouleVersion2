<?php
  include('connexion.php'); 
  include('header.inc.php');


 
  

  
     if(isset($_POST['envoi'])){
     if(!empty($_POST['ampoules']) && !empty($_POST['etages']) && !empty($_POST['position']) && !empty($_POST['prix']) && !empty($_POST['date_chgmt'])){
        $ampoules = $idcom->quote($_POST['ampoules']);
        $etages = $idcom->quote($_POST['etages']);
        $position = $idcom->quote($_POST['position']);
        $prix = $idcom->quote($_POST['prix']);
        $date_chgmt = $idcom->quote($_POST['date_chgmt']); 

        $requete = "INSERT INTO projet
        VALUES(DEFAULT, $ampoules, $etages, $position, $prix, $date_chgmt)";

        $idcom->exec($requete);

        header("location: index.php");

     }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ajout d'ampoule</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

    </head>
    <body>
    <form action="#" method="POST" enctype="application/x-www-form-urlencoded">
<div class="py-6">
  <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('./img/lampe100.jpg')"></div>
        <div class="w-full p-8 lg:w-1/2">
            <h2 class="text-2xl font-semibold text-gray-700 text-center">Ampoules</h2>
            <p class="text-xl text-gray-600 text-center">Bienvenue à bord </p>
          
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase">Ajouter des nouvelles lampes</a>
                <span class="border-b w-1/5 lg:w-1/4"></span>
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Ampoules</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="ampoules">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Etages</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="etages">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Position</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="position">
            </div>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Prix</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="text" name="prix">
            </div>
            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                </div>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="date" name="date_chgmt">
            </div>
            <div class="mt-8">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600"input type="submit" name="envoi">Envoyer</button>
            </div>
           
        </div>
    </div>
</div>
</form>
        
    </body>
</html>
<?php
 include('footer.inc.php');
?>