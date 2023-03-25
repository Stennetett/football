
<?php
// Pop up window för redigering av vikt!




// hämta senaste värdet i mySql listan.
$sql2 = "SELECT * FROM my_table2 ORDER BY ID DESC LIMIT 1;";

// Här körs queryn mot databasen
$result2 = $mysqli->query($sql2);
$myRow2 = $result2->fetch_array();


?>
<!--Form för vikt updatering.    Gömmer namn för att kunna ge Weights table den informationen. 
-->


<!--skickar informationen till test_send.php
-->
<form name="Form" action="/weight/edit_weight_send.php" method="post" >

    <p>
        Settings
    </p>
    <label style="display: none;" for="name">first name:</label><br>

    <?php echo "<input  minlength=1 maxlength=20 type = hidden name = name value =\"" . $myRow2['name'] . "\" >" ; ?>

    <label for="weight">weight kg:</label><br>
    <?php echo "<input  min=0 max=200 type = number name = weight value =\"" . $myRow2['weight'] . "\" >" ; ?>



    <input type="submit" value="Update">
