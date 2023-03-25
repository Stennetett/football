<!--  Profil sidan med all info  -->
<?php



// här hämtas data från my_table2 från den senaste skapade profilen.
$sql = "SELECT * FROM my_table2 ORDER BY ID DESC LIMIT 1;";
// Här körs queryn mot databasen
$result = $mysqli->query($sql);




?>
<!-- Här är flexbox-containern -->
<div class="flexin">

  <!-- Bild behållaren för flexbox placering-->
  <div class="img_contain">

    <img src="img/strong_img.jpeg" alt="man at gim" class="profil_img">
  </div>

  <!-- linje för visuell avgränsing-->
  <div class="line"></div>


  <!-- Bild behållaren för flexbox placering-->
  <div class="stats_profile">

    <h1 style="color:#4CAF50">Profile</h1>



    <?php
    // här hämtas data från my_table2 och placerar ut datan.
    $myRow = $result->fetch_array();
    ob_start();
    require "profile/../getData.php";
    $startWeight = ob_get_clean(); // store output in a variable and clear buffer
    echo "<p>" . "Name: " . $myRow['name'] . "</p>";
    echo "<p>" . "Start weight: " . $startWeight ." kg"."</p>";
    
    echo "<p>" . "Length: " . $myRow['length'] . " m" . "</p>";
    echo "<p>" . "My goal is: " . $myRow['ambition'] . "!" . "</p>";
    ?>

  </div>

</div>

<!-- laddar kartan myChart2 sync med js filen chart_page1-->



<?php require "weight/weight.php" ?>;

<!-- här skickas första variabeln från profilen-->
<script>
document.querySelector("#page-content > div.stats > h1").style = "display:none;"
document.querySelector("#minTabell3").style = "display:none;"

  var name =<?php echo $startWeight; ?>;
 

</script>
<script src="profile/profile.js"></script>

<!-- Här slutar pagecontent_1.php -->