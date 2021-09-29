 <?php
// Declaration d'une session qui nous permettre d'echanger les infos sur toutes les pages
 session_start();//création de session
// Verification de l'existence des variables et si elles ne sont pas vides 
 if(isset($_POST['valider'])){
     if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
// Création d'un mot de pass et un pseudo par défaut
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "login1234"; 

 // Création de variable pour vérifier si pseudo_saisi correspond au pseudo_par_défaut
 // Et le mdp_saisi correspond au mdp_par_défaut

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);
        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;//Déclaration de la session 
             header('location: index.php'); // Rédirection ves la page indiquée
        }
        else{
            echo"Votre mot de pass ou pseudo est incorrect";
        }
     } else{
         echo"Veuillez compléter tous les champs...";
     }    
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Espace de connexion</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
    </head>
    <body>
   

<!-- component -->
 <div class="flex flex-col items-center justify-center   text-gray-700"> 
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="">
    <label class="font-semibold text-lg" for="usernameField">Pseudo admin</label>
    <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" name="pseudo">
    <label class="font-semibold text-lg mt-3" for="passwordField">Password</label>
    <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2"type="password" name="mdp">
    <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700"input type="submit" name="valider">Valider</button>
    
  </form>
  <!-- Component End  -->

</div>
    </body>
</html>