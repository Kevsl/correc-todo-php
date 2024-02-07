<?php
include("./TodoManger.php")
include("./Todo.php")


if(isset($_POST["submit"])){
	$title = htmlspecialchars(strip_tags(trim($_POST["title"])));
    $date = htmlspecialchars(strip_tags(trim($_POST["date"])));
    $description = htmlspecialchars(strip_tags(trim($_POST["description"])));
    $importance = htmlspecialchars(strip_tags(trim($_POST["importance"])));

    

   
}
