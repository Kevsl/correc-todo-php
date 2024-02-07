<?php 
include("./Manager.php");



class TodoManager extends Manager {
    
    function allTodos(){
        $req ="SELECT * FROM todo ORDER BY date";
        $query = $this->db->query($req);
        if($query->num_rows > 0){
      
            while($row=$query->fetch_array()){
                $todos[] = new Todo ($row);
            }
            return $todos;
        }
    }

        function createTodo($todo){

            $title = $todo->getTitle();
            $description = $todo->getDescription();
            $date = $todo->getDate();
            $importance = $todo->getImportance();



        $req ="SELECT * FROM todo ORDER BY date";
        $query = $this->db->query($req);
        if($query->num_rows > 0){
      
            while($row=$query->fetch_array()){
                $todos[] = new Todo ($row);
            }
            return $todos;
        }
    }

        function insertTodo(Todo $objet){
 
        $titre = $this->db->real_escape_string($objet->getTitre());
        $description = $this->db->real_escape_string($objet->getDescription());
        $date = $this->db->real_escape_string($objet->getDate());
        $importance = $this->db->real_escape_string($objet->getImportance());

        $req = "INSERT INTO todo('$titre','$description','$date','$importance')";
        
        $query = $this->db->query($req);
        
        return($this->db->insertId() == 1)?true:false;

        
        
    }

}