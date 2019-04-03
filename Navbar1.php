<?php
    namespace LibraryProject\Website;
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="librarystyling.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navStyle">
            <a class="brand-navbar" href="#"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
                <span><i class="fas fa-align-right iconStyle"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto navList">
                    <li class="nav-item active"><a href="#" class="nav-link" style="color:white">Home</a></li>
                    <li class="nav-item">
                        <a href="" class="nav-link " style="color:white">About us</a>
                    </li>                    
                    <li class="nav-item">
                        <a href="Register.php" class="nav-link" style="color:white">Register</a>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if(isset($_SESSION['login']) && $_SESSION['login']) 
                        {
                     ?>
                        <a href="" class="nav-link" style="color:white">Logout</a>
                     <?php 
                         } 
                          else 
                          { 
                     ?>
                        <a href="Login.php" class="nav-link" style="color:white">Login</a>
                      <?php 
                      
                          } 
                     ?>
                     </li>
                    
                    
                </ul>
            </div>
        </nav>

    </body>
</html>
