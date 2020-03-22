<?php include_once ('../../../conf/conf.php'); ?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notícias ─ GNSS-NavAer</title>	

	<base href=<?php echo BASE_URL_DIR; ?>>

		

	<link rel='shortcut icon' href='img/logo.ico'>
	<link rel="alternate" hreflang="en" href="en/news/deep-space-clock-could-blaze-trail-to-improved-gnss-accuracy.php">

	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/language.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/news.css'>
	<link rel="stylesheet" type='text/css' href="javascript/lib/leaflet/leaflet.css">

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>

	<script src='javascript/lib/jquery-3.4.1.min.js'></script>
	<script src="javascript/lib/leaflet/leaflet.js"></script>
	<script src="javascript/stations-network-map.js"></script>
</head>



<body>

	<?php include (HTDOCS_DIR . '/html/pt/language.php'); ?>
	<?php include (HTDOCS_DIR . '/html/pt/header.php'); ?>

	<script>
		$("#mn-news").addClass("current-menu-item");
	</script>


 
	<div class='content'>
		<span class='date'>6 de setembro de 2019</span>
		<h1>Deep-Space Clock Could Blaze Trail to Improved GNSS Accuracy</h1>
		<span class='author'><a href="https://insidegnss.com/author/inside-gnss/">Inside GNSS</a></span>

		<p>
			The U.S. National Aeronautic and Space Administration (NASA) has activated an orbiting ultra-precise atomic clock orbiting aboard a spacecraft provided by General Atomics Electromagnetic Systems. If the clock performs as well in space as it has in the lab, losing only one second every 10 million years, the technology could enable far-reaching deep space missions—and improve the accuracy of GNSS timing and positioning.
		</p>

		<p>
			The clock’s second great feature is that it amounts to the size of a toaster, so it could easily fit into the payload of current GNSS satellites. Finally, it is rugged enough to operate in deep space.
		</p>

		<p>
			Developed at NASA’s Jet Propulsion Laboratory in Pasadena, California, and launched in June, the Deep Space Atomic Clock (DSAC) will determine, during its year-long test mission, if the mercury-ion technology at its core could provide independent timing for spacecraft operating far from Earth. Currently all exploratory spacecraft depend on signals from Earth-bound, refrigerator-sized precise atomic clocks to determine their position and navigate to the far reaches. DSAC could enable them to reach farther, autonomously. And, eventually, enable them to carry humans to other planets and star systems.
		</p>

		<p>
			Every GNSS satellite, whether GPS, GLONASS, Galileo or BeiDou, carries multiple atomic clocks to generate the very precise time data incorporated into its signals. Receivers decode these signals, effectively synchronizing  themselves to the atomic clocks. The DSAC is up to 50 times more stable than the atomic clocks on GPS satellites, with similar order of magnitude improvement over the clocks of other GNSS satellites. Thus, the technology could engender significant improvement in positioning accuracy.
		</p>

		<p>
			The DSAC uses mercury ions, which emit precise frequencies of light, suspended in a vacuum container to mark the passage of time.
		</p>

		<p>
			While the technology, if proven out in this mission, will not go aboard any of the now-launching generation III or subsequent III-F space vehicles, it could form part of further modernized GPS satellites. A Lockheed-Martin spokesperson said, “We are cheering for NASA on this mission and will be interested in the data produced during DSAC’s demonstration over the next year.”
		</p>

		<p>
			The Deep Space Atomic Clock is sponsored by the Technology Demonstration Missions program within NASA’s Space Technology Mission Directorate and the Space Communications and Navigations program within NASA’s Human Exploration and Operations Mission Directorate. JPL manages the project.
		</p>

		<p>
			An <a target="_blank" href="https://insidegnss.com/new-nasa-space-clock-could-hold-promise-for-gps/">earlier Inside GNSS story</a> briefly describes the DSAC mercury-ion technology.
		</p>

		<h2 class='section-title'>References</h2>
		<ol>
			<li>
				How NASA’s Deep Space Atomic Clock Could Be the Next Space GPS
				<br>
				<a href="https://www.youtube.com/watch?v=4GEeak4Vphs" target="_blanck">https://www.youtube.com/watch?v=4GEeak4Vphs</a>
			</li>
			<li>
				Deep-Space Clock Could Blaze Trail to Improved GNSS Accuracy
				<br>
				<a href="https://insidegnss.com/deep-space-clock-could-blaze-trail-to-improved-gnss-accuracy/" target="_blank">https://insidegnss.com/deep-space-clock-could-blaze-trail-to-improved-gnss-accuracy/</a>
			</li>
		</ol>

	</div>

	<?php include (HTDOCS_DIR . '/html/en/footer.php'); ?>	

	<script>
		$(".language-btn").attr("href", "en/news/deep-space-clock-could-blaze-trail-to-improved-gnss-accuracy.php");
	</script>
 </body>