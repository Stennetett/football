<?php
// Här ska du lägga in anslutningsinformation för att kunna ansluta dig mot din databas:
// ditt_användarnamn, ditt_databaslösenord och namnet på den databas du har skapat tabellerna i.
// Databasservernamn är "medialab" (det behöver du inte ändra).
// Ditt användarnamn och lösenord är samma som när du loggar in på medialab.sh.se.
// Ditt databasnamn följer mönstret "MTB_CON_VT23_DITTANVÄNDARNAMN" (du kan också se detta namn när du är inloggad på phpmyadmin)

$mysqli = new mysqli('localhost', 'root', '', 'profil');


//Kontrollerar teckentabell
if (!$mysqli->set_charset("utf8")) {
  echo "Fel vid inställning av teckentabell utf8: %s\n". $mysqli->error;
}
else {
//   // Här kan du skriva ut något om du vill ha en bekräftelse på att det funkar
//echo "Nuvarande teckenkodningstabell: %s\n". $mysqli->character_set_name();
}

if ($mysqli->connect_errno) {
  // Om något gått fel skrivs felmeddelande ut
  echo "Misslyckades att ansluta till MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
