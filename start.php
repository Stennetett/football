<?php
// frågor: hur får jag nedre menyn i mobilläge att anpassa sig efter annat innehåll?
//visa bottom nav i mobil läge problem
include 'includes/databaskoppling.php';


$minMeny = array(1 => 'profile', 2 => 'weight', 3 => 'ambition', 4 => 'gim', 5 => 'progress');

?>
<!DOCTYPE html>

<html lang="sv">

<head>
	<meta charset="UTF-8" />
	<title>dumbbel co.</title>
	<link rel="stylesheet" href="css/min_stil.css">
	<link rel="icon" type="img/x-icon" href="img/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<?php
	// Inkludera fil som skapar databaskoppling.
	require 'includes/databaskoppling.php'

	?>
</head>


<body>

	<!-- Här börjar det centrerade elementet som innehåller alla sidans delar -->
	<div id="page-container">

		<!-- Här börjar elementet som innehåller header -->
		<header>
			<h1><a href="index.php">dumbbell co.


				</a></h1>
		</header>
		<!-- Slut på header -->

		<!-- Här börjar elementet som innehåller menyn -->
		<nav>
			<ul>

				<?php
				ini_set('display_errors', 0);


				foreach ($minMeny as $index => $value) {
					if ($index == $_GET['sida']) {

						$linkClass = ' class="active-menu"';
					} else {
						$linkClass = '';
					}
					echo '<li ' . $linkClass . '><a href="index.php?sida=' . $index . '">' . $value . '</a></li>' . "\n";
				
				}

				?>
		
			</ul>

		</nav>
		<!-- Slut på menyn -->



		<!-- Här börjar elementet som innehåller sidans innehåll -->
		<div id="page-content">


			<!-- Här slutar start.php -->