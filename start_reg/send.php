<?php
// Här ska du lägga in anslutningsinformation för att kunna ansluta dig mot din databas:
// ditt_användarnamn, ditt_databaslösenord och namnet på den databas du har skapat tabellerna i.
// Databasservernamn är "medialab" (det behöver du inte ändra).
// Ditt användarnamn och lösenord är samma som när du loggar in på medialab.sh.se.
// Ditt databasnamn följer mönstret "MTB_CON_VT23_DITTANVÄNDARNAMN" (du kan också se detta namn när du är inloggad på phpmyadmin)


// här hämtar den senaste row 
$mysqli = new mysqli('localhost', 'root', '', 'profil');
$name = $_POST['name'];
$weight = $_POST['weight'];
$length = $_POST['length'];
$ambition = $_POST['ambition'];

// Insert data into the table
//kör isset() för nummer eftersom att den reaferar som true på tomma strängar. 
if (empty($name) || empty($ambition) || !is_numeric($weight) || !is_numeric($length)) {
    header('Location: ' . "index.php");
    die();
} else {
   
    $sql = "INSERT INTO `my_table2`(`name`, `weight`, `length`, `ambition`) VALUES ('$name',$weight,$length,'$ambition')";
 // Execute first query
if ($mysqli->query($sql) === TRUE) {
    
  
  // SQL query for second table
    $sql2 = "INSERT INTO `weights2`(`name`,`weights`) VALUES ('$name',$weight)";
    
    // Execute second query
    if ($mysqli->query($sql2) === TRUE) {
      echo "Both insertions were successful.";
      
    } else {
      echo "Error inserting into weights2 table: " . $mysqli->error;
    }
  } else {
    echo "Error inserting into my_table2 table: " . $mysqli->error;
  }
}

?>
<h1>thanks</h1>
<a href="../index.php?sida=1">go to your new profil</a>