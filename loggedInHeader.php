<?php

session_start();

?>

<!DOCTYPE html>
<html lang="se">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>The Weather App</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="CSS/template.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>

  <body>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mx-auto"><strong class="logo"><i class="fa fa-cloud" aria-hidden="true"></i>The Weather App</strong></h1>
                </div>
            </div>
        </div>
    </header>
    
    <nav class="mx-auto navbar navbar-expand-md navbar-dark mx-auto border border-warning text-center center-block">
      <button class="btn btn-primary  mx-auto center-block navbar-toggler custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <p class="menuText">Menu</p>
    <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse menuCenter mx-auto" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto mx-auto">
          <li class="nav-item mx-auto rounded border border-warning navButton
            <?php if($current == 'location') {echo 'current';} ?>">
            <a class="nav-link" href="location.php"><i class="fa fa-map-marker" aria-hidden="true"></i> Location</a>
          </li>
          <li class="nav-item mx-auto rounded border border-warning navButton 
            <?php if($current == 'search') {echo 'current';} ?>">
            <a class="nav-link mx-auto" href="search.php"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
          </li> 
        </ul>
          
        <form action="Backend/logout.db.php" method="post">
            <button id="logOut" class="btn-primary logButton btn btn-outline-warning my-2 my-sm-0" name="submit">Log Out</button>
        </form>    
        
      </div>
    </nav>