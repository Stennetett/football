
    <?php
    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "profil");


    $sql = "SELECT * FROM weights2;";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
       
     
        echo $row["weights"];
    
    } else {
        echo "no data";
    }
    ?>



