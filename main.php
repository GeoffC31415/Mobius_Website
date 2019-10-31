<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="Mobius_Website/newstyle.css">
</head>

<html>
	<title> Mobius The Python - Condition Monitoring </title>
	<body>

		<h1> Mobius: A Python, Condition Monitored by Python </h1>
		<div class="centertext">
			<h3> About Mobius </h3>
			Mobius is a Royal or Ball Python, born on 22nd July 2018 (roughly). He is a Mojave morph and he loves it in his hollow log. Moby is probably the most chill snake ever and just loves to relax around Sophie's neck. He's also surprisingly intelligent and is keen to find and remember new hiding spots!
			<br><br>
			He likes humidity around 65%, and temperature in the log around 30 degrees, with the rest of the vivarium about 25 degrees. The lamp is on during the day on a timer.
			<h3> About this site </h3>
			This is our way of checking Mobius' vivarium for temperature and humidity, and visual checks, while we are out of the house.
			<br><br>
			<img src="Mobius_Website/images/DrinkingSnake.jpg" alt="Moby drinks after eating a mouse.">
			<h3> Monitoring </h3>
			We monitor temperature and humidity with a RaspberryPi and a bunch of DHT11's, and one more accurate temperature sensor on a one-wire setup.
			<br>
		</div>
		
		<h2> Graphs of Readings </h2>
		
		<!-- Grafana Dashboard iFrame -->
		<?php 
			$ip_server = file_get_contents("http://ifconfig.me/ip");
			$intro = '<iframe src="http://';
			$outro = ':3000/dashboard/db/vivarium?theme=light" width="955" height="900" frameborder="0"></iframe>';
			echo $intro . $ip_server . $outro;
		?> 
		
		<!-- Display latest image -->
		<h2> Current Picture - Hybrid IR / Visible Light </h2>
		<img src="Mobius_Website/images/lastsnap.jpg" alt="Current Snapshot">
		<?php
			$filename = "Mobius_Website/images/lastsnap.jpg";
			if (file_exists($filename)) {
				echo "<div class=\"centretext\">";
				echo "Image was last recorded: " . date ("F d Y H:i:s.", filemtime($filename));
				echo "</div>";
			}
		?>
	</body>
</html>
