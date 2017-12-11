<?php

//Startar session
session_start();

//Om knappen har aktiverats
if (isset($_POST['submit'])) {
	
    //Inkluderar databasuppkopplingen som jag har placerat på en separat fil
	include 'connect.db.php';
    
    //Det som använder fyller in från inloggningsfält
	$u_in = $_POST['u_in'];
	$u_pass = $_POST['u_pass'];

	//Felhantering som inleds med att kolla om något av fälten är tomma
	if (empty($u_in) || empty($u_pass)) {
		header("Location: ../index.php?login=empty");
		exit();
	} 
    //Om fält ej är tomma så fortsätter...
    else {
        
        //Kollar om användarnamnet eller mailadressen existerar
        $checkInput = $db->query("SELECT * FROM users WHERE u_nick='$u_in' OR u_email='$u_in'"); 
        $rowCount = $checkInput->rowCount();
        
        //Om det ej finns i databasen när vi räknar rader så kommer felmeddelande uppstå och i adressfältet så syns "error"
		if ($rowCount < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} 
        
        //Annars så fortsätter...
        else {
            
            //Hämtar rader från databasen och lagrar i variabel
			if ($row = $checkInput->fetch(PDO::FETCH_ASSOC)) {
                
				//Använder en "de-hash"-funktion för att kunna verifiera lösenord så att vi kan logga in
				$hashedPassCheck = password_verify($u_pass, $row['u_pass']);
				//Vid fel lösenord får vi error
                if ($hashedPassCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} 
                
                //Om lösenord stämmer överens skapas en session och vi blir inloggade
                elseif ($hashedPassCheck == true) {
                    
					//Sessionsvariabler lagrar databasens uppgifter om användare
					$_SESSION['user_id'] = $row['u_id'];
					$_SESSION['user_given'] = $row['u_given'];
					$_SESSION['user_sur'] = $row['u_sur'];
					$_SESSION['user_email'] = $row['u_email'];
					$_SESSION['user_nick'] = $row['u_nick'];
					header("Location: ../location.php");
					exit();
				}
			}
		}
	}
} 

//Om något går fel vid inloggningen på något sätt
else {
	header("Location: ../index.php?login=error");
	exit();
}