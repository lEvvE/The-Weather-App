<?php

//Om vi klickar på sign up
if (isset($_POST['submit'])) {
	
    //Inkluderar nödvändig uppkoppling mot databas från separat fil
	include_once 'connect.db.php';
    
    //Det som har fyllts in i formulär lagras i variabler
	$u_given = $_POST['u_given'];
	$u_sur = $_POST['u_sur'];
	$u_email = $_POST['u_email'];
    $u_nick = $_POST['u_nick'];
    $u_pass = $_POST['u_pass'];


	//Felhantering. Säkerställer att alla fält ej är tomma. Om så är fallet så sker inget utan "empty" visas i adressfältet
	if (empty($u_given) || empty($u_sur) || empty($u_email) || empty($u_nick) || empty($u_pass)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} 
    else {
			
            //Kollar om mail är korrekt ifylld och av korrekt format. Vid fel syns "email" i adressfält.
			if (!filter_var($u_email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} 
            
            //Om email ej får felmeddelande så fortsätter...
            else {
                
                //Kollar om användarnamnet redan är taget
                $checkNick = $db->query("SELECT * FROM users WHERE u_nick='$u_nick'"); 
                $rowCount = $checkNick->rowCount();
                
                //Om användarnamnet är upptaget så sker notis i adressfält
				if ($rowCount > 0){
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} 
                
                //Annars fortsätter...
                else {
                    
					//Använder hashning av lösenord för att öka säkerheten
					$hashedPass = password_hash($u_pass, PASSWORD_DEFAULT);

					//Förbereder SQL-sats efter databasens struktur                    
                    $regUser = $db->prepare("INSERT INTO users(u_given, u_sur, u_email, u_nick, u_pass)
                    VALUES(?, ?, ?, ?, ?)");
                    
                    //Exekverar SQL-sats med de inhämtade värdena i tidigare satta variabler
                    $regUser->execute(array($u_given, $u_sur, $u_email, $u_nick, $hashedPass));
                    
                    //Skicka vidare
					header("Location: ../signup.php?signup=success");
					exit();
				}
			}
	}
} 

//Om något går fel inledninsvis
else {
	header("Location: ../signup.php");
	exit();
}            