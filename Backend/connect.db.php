<?php
    
    //Information om databasuppgifter som lagras i variabler
    $dbServer = "localhost";
    $dbAdmin = "root";
    $dbPass = "";
    $dbName = "weather-app";

    //Uppkoppling sker med PDO
    $db = new PDO('mysql:host=' . $dbServer . ';dbname=' . $dbName . ';charset=utf8mb4', '' . $dbAdmin, '' . $dbPass);