<?php
       namespace LibraryProject\Website;
       include_once 'Navbar1.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Library Home Page</title>
     
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="librarystyling.css" rel="stylesheet" type="text/css"> 

    </head>
    <body>
       
        <h1 class="text-primary text-center"> <b>Welcome to Library</b></h1>
        <br><br>
        <div class="row">
          <div class="col-sm-4">  
          </div>
	<div class="col-sm-4">
        
            <div class="card">
            <article class="card-body">
               
            <h4 class="card-title mb-4 mt-1">Sign in</h4>            
            <form action="validateLogin.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" placeholder="Username" type="text" tabindex="1" onkeyup=" showHint(this.value)" required>
                     
                </div> <!-- form-group// -->
                <div class="form-group">
                    <a class="float-right" href="#">Forgot password?</a>
                    <label>Password</label>
                    <input name="password" class="form-control" placeholder="******" type="password" tabindex="2" required>
                </div> <!-- form-group// --> 
                <div class="form-group">                 
                </div> <!-- form-group// -->  
                <div class="form-group">
                    <button type="submit" name="Login" class="btn btn-primary btn-block"> Login </button>
                    <a href="Register.php" class="btn btn-link">Don't have an account? Click here to register</a>
                </div> <!-- form-group// -->                                                           
                </form>
            </article>
            </div> <!-- card.// -->
        </div> <!-- col.// -->
             <div class="col-sm-4">  
             </div>    
        </div> <!--row-->                   
       <?php
       include_once 'Footer.php';
       ?>
    </body>
</html>
