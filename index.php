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
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/health.css">

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
	<script src="javascript/lib/chartjs/Chart.min.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-home").addClass("current-menu-item");
	</script>


	<div class='content'>
		<div class='update-panel-container'>
			<span>Última atualização em 09 de maio de 2020 às 20:00.</span>
		</div>

		<div class='cases-panel-container'>
			<h1>Confirmados</h1>
			<div class='cases-label-container' id='label-confirmados'>
				<span class='cases-label'>Total</span><span class='cases-counter'>010</span>
			</div>
			<div class='cases-label-container' id='label-curados'>
				<span class='cases-label'>Curados</span><span class='cases-counter'>008</span>
			</div>
			<div class='cases-label-container' id='label-confirmados-hospitalizados'>
				<span class='cases-label'>Hospitalizados</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-obitos'>
				<span class='cases-label'>Óbitos</span><span class='cases-counter'>002</span>
			</div>
		</div>
		<div class='cases-panel-container'>

			<h1>Suspeitos</h1>

			<div class='cases-label-container' id='label-suspeitos'>
				<span class='cases-label'>Total</span><span class='cases-counter'>015</span>
			</div>
			<div class='cases-label-container' id='label-suspeitos-hospitalizados'>
				<span class='cases-label'>Hospitalizados</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-obitos-suspeitos'>
				<span class='cases-label'>Óbitos</span><span class='cases-counter'>000</span>
			</div>
		</div>

		<div class='cases-panel-container'>
			<h1>Exames</h1>

			<div class='cases-label-container' id='label-aguardando-resultados'>
				<span class='cases-label'>Aguardando resultados</span><span class='cases-counter'>013</span>
			</div>
			<div class='cases-label-container' id='label-descartados'>
				<span class='cases-label'>Descartados</span><span class='cases-counter'>011</span>
			</div>
		</div>

		<div class='cases-panel-container'>
			<div class='chart-panel-container'>
				<canvas id="cases-chart-1"></canvas>
			</div>
		</div>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart-1"), {
		type: 'line',
		data: {
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04', '14/04', '15/04', '16/04', '17/04', '18/04', '19/04', '20/04', '21/04', '22/04', '23/04', '24/04', '25/04', '26/04', '27/04', '28/04', '29/04', '30/04', '01/05', '02/05', '03/05', '04/05', '05/05', '06/05', '07/05', '08/05', '09/05'],
			datasets: [{
					data: [04, 04, 06, 06, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10, 09, 09, 07, 09, 08, 07, 06, 07, 07, 07, 08, 08, 08, 07, 08, 08, 09, 09, 06, 06, 04, 10, 11, 12, 14, 15],
					label: "Suspeitos",
					borderColor: "#FFFF00",
					fill: false
				},
				// {
				// 	data: [00, 01, 04, 04, 04, 04, 04, 04, 04, 05, 05, 05, 06, 06, 06, 06, 06, 06, 06, 07, 07, 07, 07, 08, 09, 09, 07, 04, 04, 04, 02, 03, 01, 01, 01, 01, 01, 01, 01, 01, 01, 00, 06, 06, 06, 10, 11, 11, 13, 13],
				// 	label: "Exames aguardando resultado",
				// 	borderColor: "#FFA500",
				// 	fill: false
				// },
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02, 02, 02, 03, 03, 03, 03, 03, 06, 07, 08, 08, 08],
					label: "Curados",
					borderColor: "#0000FF",
					fill: false
				},
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02, 02, 02, 02, 04, 04, 04, 04, 04, 05, 05, 06, 06, 06, 06, 09, 09, 10, 10, 10],
					label: "Confirmados",
					borderColor: "#FF0000",
					fill: false
				},
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 02, 02, 02, 02, 02, 02, 02, 02],
					label: "Óbitos",
					borderColor: "#000000",
					fill: false
				}
			]
		},
		options: {
			maintainAspectRatio: false,
			title: {
				display: true,
				text: 'Quantidade de casos'
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