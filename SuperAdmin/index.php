<?php
include"../config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Super Admin</title>
    <style>
        body {
            margin: 10px;
        }
        nav {
            background-color: #d2d2d2;
        }
        nav a {
            
            font-size:x-large; 
            font-weight:bolder;
        }
        div {
            text-align:center;
            margin-top: 150px;
           
            
        }
        

                input[type=text], input[type=password] {
                width: 50%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                }

                button {
                background-color: #00BFFF;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 50%;
                }

  

    </style>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="Admindash.php" >Regal Certification</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
    

        <div class="container" id="label" >

        <form action="salogin.php" method="post">
               
                <div class="container" >
                <div class="container" style="margin-top:-50px; background-color: #d2d2d2; padding:3px; width:50%">
                    <label for=""><b>Admin Login</b></label>
                </div>
                
                    <input type="text" placeholder="Enter Email Id" name="Email_ID" required><br>

                    
                    <input type="password" placeholder="Enter Password" name="Password" required>
                        
                    <button type="submit">Login</button>
                    
                 </div>
		</form>
        
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>