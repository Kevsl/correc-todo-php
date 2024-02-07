<?php

class Todo  {

   private $title;
   private $description;
   private $date;
   private $importance;
     
   function __construct(Array $datas){
   // Une boucle sur le tableau de valeurs pour hydrater les attributs automatiquement
   foreach ($datas as $key => $value) {
    $this->$key = $value;

    };
  }
    

  public function getTitle()
  {
    return $this->title;
  }

  
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

   /**
    * Get the value of description
    */ 
   public function getDescription()
   {
      return $this->description;
   }

   /**
    * Set the value of description
    *
    * @return  self
    */ 
   public function setDescription($description)
   {
      $this->description = $description;

      return $this;
   }

   /**
    * Get the value of date
    */ 
   public function getDate()
   {
      return $this->date;
   }

   /**
    * Set the value of date
    *
    * @return  self
    */ 
   public function setDate($date)
   {
      $this->date = $date;

      return $this;
   }

   /**
    * Get the value of importance
    */ 
   public function getImportance()
   {
      return $this->importance;
   }

   /**
    * Set the value of importance
    *
    * @return  self
    */ 
   public function setImportance($importance)
   {
      $this->importance = $importance;

      return $this;
   }
   }
