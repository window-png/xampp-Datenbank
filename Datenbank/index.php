<HTML>
<BODY style="background-color:abe1e3">
<DIV align=center>
<h1> Ergebnis der Datenbankabfrage</h1>
<br>

  <table align = "center" border = "1" cellpadding = "3" cellspacing = "0" BGCOLOR="ffffff">  

    <tr>  
    <td> Vorname </td>  
    <td> Nachname </td>  
    <td> Ankunft </td>  
    <td> Uhrzeit </td>  
    </tr>  

	  <?php
	    $conn = new mysqli("localhost", "Horst", "1234", "namensliste");
	        if ($conn->connect_errno) {
		        die("Verbindung fehlgeschlagen:" . $conn->connect_error);
          }
	
    $query = "SELECT * FROM `tabelle1`;"; 

    $result = mysqli_query($conn, $query); 
  
    if (mysqli_num_rows($result) > 0) { 
       
        while($row = mysqli_fetch_assoc($result)) {
          echo  "<tr>";
          echo  "<td>", ($row["Vorname"]) . "</td>"; 
          echo  "<td>", ($row["Nachname"]). "</td>";
	        echo  "<td>", ($row["Ankunft"]) . "</td>";
	        echo  "<td>", ($row["Uhrzeit"]) . "</td>";
          echo  "<tr>";
        } 
    } else { 
        echo "0 results"; 
    } 
    "<br>"; 
    $conn->close(); ?>

  </table>  
  
	<br> Zurück:
	<a href=http://localhost/Datenbank/main.php><button>➤</button></a>
  </DIV>	
</BODY>
</HTML>
