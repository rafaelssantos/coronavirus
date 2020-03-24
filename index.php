<?php
include_once('conf/conf.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Quatá contra o COVID-19─Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">

	<link rel="stylesheet" href="css/home.css">


	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://use.fontawesome.com/bd6ce15083.js"></script>

	<script src="javascript/lib/chartjs/Chart.min.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-home").addClass("current-menu-item");
	</script>


	<div class='content'>
		<div class='update-panel-container'>
			<span>Última atualização em 24 de março de 2020 às 16:30</span>
		</div>

		<div class='cases-panel-container'>
			<div class='cases-label-container' id='label-suspeitos'>
				<span class='cases-label'>Casos suspeitos</span><span class='cases-counter'>010</span>
			</div>
			<div class='cases-label-container' id='label-descartados'>
				<span class='cases-label'>Casos descartados</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-confirmados'>
				<span class='cases-label'>Casos confirmados</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-obitos'>
				<span class='cases-label'>Óbitos</span><span class='cases-counter'>000</span>
			</div>
		</div>

		<div class='chart-panel-container'>
			<canvas id="cases-chart"></canvas>
		</div>

		<?php include(HTDOCS_DIR . '/html/call-center.php'); ?>

	</div>
	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart"), {
		type: 'line',
		data: {
			labels: ['21/03', '22/03', '23/03', '24/03'],
			datasets: [{
				data: [0, 1, 10, 10],
				label: "Casos suspeitos",
				borderColor: "#FFFF00",
				fill: false
			}, {
				data: [0, 0, 0, 0],
				label: "Casos descartados",
				borderColor: "#0000FF",
				fill: false
			}, {
				data: [0, 0, 0, 0],
				label: "Casos confirmados",
				borderColor: "#FF0000",
				fill: false
			}, {
				data: [0, 0, 0, 0],
				label: "Óbitos",
				borderColor: "#000000",
				fill: false
			}]
		},
		options: {
			maintainAspectRatio: false,
			title: {
				display: false,
			},
			scales: {
				yAxes: [{
					ticks: {
						precision: 0
					}
				}]
			}
		}
	});
</script>

</html>