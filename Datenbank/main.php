<HTML>
<BODY style="background-color:abe1e3">
	<DIV align=center>
		<h1> MySQL-Datenbank bearbeiten</h1>
	</DIV>

		<FORM method="post" action="http://localhost/Datenbank/senden.php">	
		
			<table align = "center"  cellpadding = "3" cellspacing = "0" BGCOLOR="#6b898e">
				<tr> <td> Vorname: <td> <INPUT type="text" name="Vorname" size="10" maxlength="44"> <td> <tr>
				<tr> <td> Nachname:<td> <INPUT type="text" name="Nachname" size="10" maxlength="44"> <td> <tr>
				<tr> <td> Ankunft: <td> <INPUT type="text" name="Ankunft" size="10" maxlength="44"> <td> (Format 0000-00-00)<tr>
				<tr> <td> Uhrzeit: <td> <INPUT type="text" name="Uhrzeit" size="10" maxlength="44"> <td>  <tr>
				<tr> <td> <td> <INPUT type="Submit" value="Senden"> <td>
			<table>
	
    	</FORM>
	<br>
	PHP Datenbank öffnen:
	<FORM method="post" action="http://localhost/Datenbank/Call.php">
		<input type="submit" value="➤">
	
	</FORM>	
</BODY>
</HTML>