<?php 
require_once("./TodoManager.php");
include("./Todo.php");
$cx = new Connexion();
$manager = new TodoManager($cx);
$objets = $manager->allTodos();
$nb     =!is_null($objets)?count($objets):0 ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
</head>
<body>
    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Les classes en Poo</title>
    </head>
    <body>
        <main class="main w-full bg-black min-h-screen pl-12 my-0">
            <h1 class="text-red-500 text-3xl text-center pt-4 ml-12">
                Votre liste de tâches
            </h1>
            <form action="creation.php" method="post" name="submi">
            <div class="mb-2 mt-12 text-purlple-red">
                <label class="text-white block ml-4">Titre</label>
                <input
                name="title"
                    type="text"
                    class="title w-72 my-2 ml-4 rounded-md indent-2"
                    required
                />
            </div>
            <div class="my-2">
                <label class="text-white block ml-4">Description</label>
                <input
                    type="text"
                    class="description w-72 my-2 ml-4 rounded-md indent-2"
                    required
                    name="description"

                />
            </div>
            <div class="my-2">
                <label class="text-white block ml-4">Date</label>
                <input
                    type="date"
                    class="date w-72 my-2 ml-4 rounded-md indent-2"
                    aria-placeholder="espece"
                    required
                   name="date"
                />
            </div>
                        <div class="mb-2 mt-12 text-purlple-red">
                <label class="text-white block ml-4">Importance</label>
                <input
                name="importance"
                    type="text"
                    class="title w-72 my-2 ml-4 rounded-md indent-2"
                    required
                />
            </div>
            <div class="my-2">
                <input type="submit" name="submit"
                    class="border border-2 border-white text-white rounded-md ml-4 px-2 py-2 my-4"
                />
                   
            </div>

            <div class="todos-list flex flex-wrap w-10/12">
                     <?php 



        echo "<div class='w-1/2 mx-auto border border-solid border-2 border-white pl-12'> <p> Il y a ".$nb."Todos </p>";
        foreach($objets as $objet){
        echo "<h3 class='text-white'>".$objet->getTitle()."</h3>";
        echo "<p class='text-white' > 
        Titre :".$objet->getDescription()."</p>";
        echo "<p class='text-white' > 
        Titre :".$objet->getDate()."</p>
        </div>";

        }
?>



            </div>
        </main>

   
        </form>

    </body>
    <script src="https://cdn.tailwindcss.com"></script>
</html>
</body>

  <script src="https://cdn.tailwindcss.com"></script>

</html>