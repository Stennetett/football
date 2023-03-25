<head>
  <script>
    function validateForm() {
      var a = document.forms["Form"]["name"].value;
      var b = document.forms["Form"]["weight"].value;
      var c = document.forms["Form"]["length"].value;
      var d = document.forms["Form"]["ambition"].value;
      if ((a == null || a == "") || (b == null || b == "") || (c == null || c == "") || (d == null || d == "")) {
        if (document.getElementById('ambition').value == "") {
          document.querySelector("#ambition").style.backgroundColor = "red";


        }
        if (document.getElementById('name').value == "") {
          document.querySelector("#name").style.backgroundColor = "red";


        }
        if (b==='') {
          document.querySelector("#weight").style.backgroundColor = "red";


        }
        if (document.getElementById('length').value == "") {
          document.querySelector("#length").style.backgroundColor = "red";


        }
        console.log(document.querySelector("#weight").value)
        alert("Please Fill In All Required Fields to get stronger!");
        return false;
      }
    }
  </script>
</head>

<!-- Rubrik för sidan -->
<h1>WELCOME ATHLETE</h1>


<!-- Default-text för förstasidan -->
<p style="text-align: center;">
  there is an athlete in all of us!
</p>

<form name="Form" action="start_reg/send.php" method="post" onsubmit="return validateForm()" style="  background-color: #acacac;">

  <p>
    Register here and start your
    journey
  </p>
  <label for="name">first name:</label><br>
  <input type="text" id="name" name="name" placeholder="name"><br>

  <label for="weight">weight:</label><br>
  <input type="number" id="weight" name="weight" min="1" max="500" step="any" placeholder="kg"><br>

  <label for="length">length:</label><br>
  <input type="number" id="length" name="length" step="any" placeholder="0,00m"><br>

  <label for="ambition">ambition:</label><br>
  <input type="text" id="ambition" name="ambition" placeholder="ambition"><br>

  <input type="submit" value="Submit">
</form>

<?php

?>