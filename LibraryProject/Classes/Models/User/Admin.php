<?php
namespace LibraryProject\Classes\Models\User;

require_once 'User.php';
class Admin extends User 
{
    public function __construct($username,$password)
    {
        parent::__construct($username, $password); 
    }
    
    
}
