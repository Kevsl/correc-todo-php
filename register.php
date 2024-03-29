<?php
session_start();
use Models\DbConnexion\DbConnexion;
use Models\User\User;
use Repositories\UserManager\UserManager;
include("./autoloader.php");

if(isset($_POST)){
    $data = file_get_contents("php://input");
    // Php a besoin de JSON decode pour interpréter du JSON, on applique donc cette fonction
    $decodedUser = (json_decode($data, true));


    // on applique le format de la classe User pour avoir accès aux méthodes de cette classse ( ex: $user->getId())
    $user = new User($decodedUser);
  
    // On instancie une connexion à notre base de données
    $dbConnexion = new DbConnexion();
    // Que l'on peut passer à UserManager
    $userManager = new UserManager($dbConnexion);

    
    // ici je pourrais utilsier une fonction de UserManager pour vérifier que l'email n'existe pas et renvoyé une erreur si il existe

    // Je peux égalemment  vérifier a travers une fonction checkEmail exist
    // if($userManager->checkEmailExist){
    //      echo "Email already taken "
    // }
    
    if($userManager->checkUserExist($user) ){
        echo "Email already taken";
        return;
    }


    // On peut donc utiliser la méthode register, et lui passer notre instance d'user récupérée dans le json de 
    // la requête http

    // On renvoi à javascript le résultat de la méthode register, 
    // Qui sera soit une erreur , soit le chiffre 1 
    // Javascript console.loggera ce résultat, 
    // Ce qui nous permettra d'afficher l'erreur dans la console si y en a une 
    // Ou le chiffre 1 si la requête SQL a fonctionné.

    if($userManager->register(($user))){
        $_SESSION["id"] = $user->getId_user();
        echo "inserted";
    }else{
        echo "Error";
    }





}

?>