<?php
include('./TodoManager.php');
include('./Todo.php');
$cx = new Connexion();
$manager = new TodoManager($cx);



if(isset($_POST["submit"])){
    $obj = new Todo($_POST);
    if($manager->insertTodo($obj)){
        header("Location: index.php");
        echo"sucess";
    }else{
        echo"pb";
    }


}
