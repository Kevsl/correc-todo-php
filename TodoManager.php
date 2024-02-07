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

     

        function insertTodo(Todo $objet){
 
        $titre = $this->db->real_escape_string($objet->getTitle());
        $description = $this->db->real_escape_string($objet->getDescription());
        $date = $this->db->real_escape_string($objet->getDate());
        $importance = $this->db->real_escape_string($objet->getImportance());

        $req = "INSERT INTO todo VALUES(NULL,'$titre','$description','$date','$importance')";
                var_dump($req);

        $query = $this->db->query($req);
                var_dump($query);

       return($this->db->affected_rows == 1)?true:false;

        
        
    }

}