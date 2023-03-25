<!-- weight sidan med graph och lista över vikt förändring -->
<script>
  function myFunction() {
    //start med att inte visa "ändra vikten sidan".
    var x = document.getElementById("myDIV");

    if (x.style.display === "block") {
      x.style.display = "none";
      x.style.display = "block";
    } else {
      x.style.display = "block";
      //y.style.display = "none";
    }
  }
</script>

<input type="button" class="button" value="edit weight" onclick="myFunction()">
<div id="myDIV">
  <?php

  require 'edit_profile.php';


  ?>

</div>

<!-- Här börjar pagecontent_1.php -->
<?php



$sql = "SELECT my_table2.name, weights2.weights 
FROM my_table2
INNER JOIN weights2 ON my_table2.name=weights2.name;
";
$result = $mysqli->query($sql);
$myRow = $result->fetch_array();
include "getData.php"
?>
<div class="stats">
  <div id="box1">
    <h1>weight graph</h1>
    <canvas id="myChart" style="width:100%;"></canvas>

    <script>
      var jsVariable = "<?php echo $myRow['weights']; ?>";
      console.log(jsVariable);
    </script>

    <script src="weight/script.js"></script>

  </div>


  <h1> started a <?php

        /*Hämta filmtiteln till första raden och genrenamnet till den ansra*/

        echo $myRow['weights'], ",";

        ?> weight changes</h1>
  <table id="minTabell3">
    <thead>
      <tr>
        <th>name</th>
        <th>weight</th>

      </tr>
    </thead>
    <tbody>
      
        <?php

            /*Hämta filmtiteln till första raden och genrenamnet till den ansra*/

            echo "<tr><td>" . $myRow['name'] . "</td><td>" . $myRow['weights'] . "</td></tr>";

            ?> 
      
      <?php

      /*Hämta filmtiteln till första raden och genrenamnet till den ansra*/
      while ($myRow = $result->fetch_array()) {
// skulle kunna lägga till date på mysql servern och sedan hämta den för att inte alltid visa nutid.
        echo "<tr><td>" . date("Y/m/d") . "</td><td>" . $myRow['weights'] . "</td></tr>\n";
      }
      ?>

      <!-- Avslutningstaggar för tabellen -->
    </tbody>
  </table>


  <script src="weight/script.js">

  </script>

  <!-- Avslutningstaggar för tabellen -->

</div>
<!-- Här slutar pagecontent_1.php -->