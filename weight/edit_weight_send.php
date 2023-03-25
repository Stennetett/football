<?php
$mysqli = new mysqli('localhost', 'root', '', 'profil');

// här hämtar den senaste row från my_table2-------------------------
$sql2 = "SELECT * FROM my_table2 ORDER BY ID DESC LIMIT 1";
// Här körs queryn mot databasen my_table2
$result2 = $mysqli->query($sql2);
$myRow2 = $result2->fetch_array();
//-------------------------------------------------------------------------

// här hämtar den senaste row från weights2--------------------------------------
$sql3 = "SELECT * FROM weights2 ORDER BY weights DESC LIMIT 1;";
// Här körs queryn mot databasen my_table2
$result3 = $mysqli->query($sql3);


//-------------------------------------------------------------------------

// Här tas namn och vikt från dom två inputsen, namn är hidden
$name = $_POST['name'];
$weight = $_POST['weight'];
//$length = $_POST['length'];
//$ambition = $_POST['ambition'];

//om post är ifyllda så gå till else annars ladda om sidan.
if (empty($name) || !is_numeric($weight)) {
    $message = "wrong answer";

    echo "<script type='text/javascript'>alert('$message');</script>";

    header('Location: ' . "index.php?sida=1");
    die();
} else {




    // Här körs UPDATE-queryn mot databasen

    // header('Location: ' . "index.php?sida=1");
    //die();

    // echo "New record created successfully";
    //lägger till ny info på weights2
    //lägger till ny info på senaste skapade raden.
    $sql2 = "UPDATE my_table2 SET weight=$weight WHERE id={$myRow2['id']}";
    $mysqli->query($sql2);
    if ($mysqli->query($sql2) === TRUE) {
        // header('Location: ' . "index.php?sida=1");
        //die();
    } else {
        echo "Error inserting into weights2 table: " . $mysqli->error;
    }



    //lägger till ny info på weights2
    $sql3 = "INSERT INTO `weights2`(`name`,`weights`) VALUES ('$name',$weight)";
    if ($mysqli->query($sql3) === TRUE) {
        header('Location: ' . "/index.php?sida=2");
        die();
    } else {
        echo "Error inserting into weights2 table: " . $mysqli->error;
    }
}
