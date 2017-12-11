<?php

session_start();

?>

<!DOCTYPE html>
<html lang="se">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>The Weather App</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="./css/template.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>

  <body>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mx-auto"><strong><a class="logo" href="index.php"><i class="fa fa-cloud" aria-hidden="true"></i>The Weather App</a></strong></h1>
                </div>
            </div>
        </div>
    </header>
    
    <nav class="navbar navbar-expand-md navbar-dark border border-warning mx-auto">
        
        <form class="form-inline my-2 my-lg-0 mx-auto" method="post" action="Backend/login.db.php">
            <input class="form-control mr-sm-2" type="text" name="u_in" placeholder="Username">
            <input class="form-control mr-sm-2" type="password" name="u_pass" placeholder="Password">
           <button id="signUp" class="btn-primary logButton btn btn-outline-warning my-2 my-sm-0 mx-auto" name="submit">Log In</button>
        </form>
    </nav>
      
    <br>