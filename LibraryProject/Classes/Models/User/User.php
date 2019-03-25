<?php
        namespace LibraryProject\Classes\Models\User;
        
        abstract class User
        {
          protected $user_id;
          protected $username;
          protected $password;
          protected $first_name;
          protected $last_name;
          protected $contact_id;
          static    $id = 0;  //as no database, using this parameter we are setting the user id. We dont need it once get connected to the database.

          public function __construct($username,$password) 
          {
              $this->username = $username;
              $this->password = $password;
              $this->user_id = User::$id; 
              User::$id++;
     
          }
         public function getUsername() 
         {
             return $this->username;
         }
         public function getPassword() 
         {
             return $this->password;
         }
         
         public function search($searchTerm) 
         {
        
             
         }
         public function viewItem($item_id) 
         {
        
             
         }

          
        } 

    
