<HTML>
<BODY>
	Ihre Informationen wurden erfolgreich weitergegeben!
<?php
	$Vorname			= $_POST["Vorname"];
	$Nachname			= $_POST["Nachname"];
	$Ankunft			= $_POST["Ankunft"];
	$Uhrzeit			= $_POST["Uhrzeit"];
		
	$conn = new mysqli("localhost", "Horst", "1234", "namensliste");
	
	if ($conn->connect_errno) {
		die("Verbindung fehlgeschlagen:" . $conn->connect_error);
	}

	$query = "INSERT INTO `tabelle1`(`Vorname`, `Nachname`, `Ankunft`, `Uhrzeit`) VALUES ('$Vorname','$Nachname','$Ankunft','$Uhrzeit');";
	
	mysqli_query($conn, $query); 
	
	$conn->close(); ?>

	<br> Zurück:
	<a href=http://localhost/Datenbank/main.php><button>➤</button></a>
</BODY>
</HTML>