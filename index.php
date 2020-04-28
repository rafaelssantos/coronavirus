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
			<span>Última atualização em 27 de abril de 2020 às 08:05.</span>
		</div>

		<div class='cases-panel-container'>
			<div class='cases-label-container' id='label-suspeitos-em-monitoramento'>
				<span class='cases-label'>*Suspeitos em monitoramento</span><span class='cases-counter'>007</span>
			</div>
			<div class='cases-label-container' id='label-suspeitos-em-investigacao'>
				<span class='cases-label'>**Suspeitos em investigação</span><span class='cases-counter'>001</span>
			</div>
			<div class='cases-label-container' id='label-recuperados'>
				<span class='cases-label'>***Recuperados</span><span class='cases-counter'>036</span>
			</div>
			<div class='cases-label-container' id='label-curados'>
				<span class='cases-label'>****Curados de COVID-19</span><span class='cases-counter'>002</span>
			</div>
			<div class='cases-label-container' id='label-descartados-por-exame'>
				<span class='cases-label'>Descartados por exame</span><span class='cases-counter'>006</span>
			</div>
			<div class='cases-label-container' id='label-suspeitos-em-internacao-hospitalar'>
				<span class='cases-label'>Internação Hospitalar</span><span class='cases-counter'>002</span>
			</div>
			<div class='cases-label-container' id='label-confirmados-por-swab'>
				<span class='cases-label'>Confirmados por exame (SWAB)</span><span class='cases-counter'>002</span>
			</div>
			<div class='cases-label-container' id='label-confirmados-por-teste-rapido'>
				<span class='cases-label'>Confirmados por exame (teste rápido)</span><span class='cases-counter'>002</span>
			</div>
			<div class='cases-label-container' id='label-obitos-suspeitos'>
				<span class='cases-label'>Óbitos suspeitos</span><span class='cases-counter'>001</span>
			</div>
			<div class='cases-label-container' id='label-obitos'>
				<span class='cases-label'>Óbitos</span><span class='cases-counter'>000</span>
			</div>
		</div>

		<p>
			<strong>*Suspeito em monitoramento</strong> é um caso suspeito em que não foi feita coleta de exame.
		<p>

		<p>
			<strong>**Suspeito em investigação</strong> é um caso suspeito em que foi feita coleta de exame e aguarda-se o resultado.
		<p>

		<p>
			<strong>***Recuperado</strong> é um caso que apresentava sintomas gripais e, após o período de quarentena, não apresenta mais sintomas.
		<p>

		<p>
			<strong>****Curado</strong> é um caso em que foi confirmado com COVID-19 e não apresenta mais sintomas.
		<p>

		<p>
			Ainda não saíram resultados dos exames coletados. Infelizmente, o atraso não depende do Município de Quatá. A prefeitura aguarda os resultados e realizará a divulgação assim que os receber.
		</p>

		<div class='chart-panel-container'>
			<canvas id="cases-chart"></canvas>
		</div>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart"), {
		type: 'line',
		data: {
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04', '14/04', '15/04', '16/04', '17/04', '18/04', '19/04', '20/04', '21/04', '22/04', '23/04', '24/04', '25/04', '26/04', '27/04'],
			datasets: [{
				data: [04, 04, 06, 06, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10, 09, 08, 07, 09, 08, 07, 06, 07, 07, 07, 08, 08, 08, 07],
				label: "Suspeitos em monitoramento",
				borderColor: "#FFFF00",
				fill: false
			},
			{
				data: [00, 01, 04, 04, 04, 04, 04, 04, 04, 05, 05, 05, 06, 06, 06, 06, 06, 06, 06, 07, 07, 07, 07, 08, 09, 09, 09, 04, 04, 04, 02, 03, 01, 01, 01, 01, 01, 01],
				label: "Suspeitos em investigação",
				borderColor: "#FFC800",
				fill: false
			},
			{
				data: [00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 03, 03, 04, 05, 06, 16, 16, 17, 18, 18, 20, 20, 20, 23, 26, 28, 29, 29, 30, 31, 32, 32, 32, 32, 32, 34, 34, 36],
				label: "Recuperados",
				borderColor: "#0000FF",
				fill: false
			},
			{
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02],
				label: "Curados",
				borderColor: "#ADD8E6",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 05, 05, 05, 05, 05, 06, 06, 06, 06, 06, 06],
				label: "Descartados por exame",
				borderColor: "#008000",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 01, 01, 01, 01, 01, 01, 01, 01, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 03, 03, 03, 02, 02, 02, 02],
				label: "Internação Hospitalar",
				borderColor: "#e75480",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02, 02, 02, 02, 02, 02, 02, 02],
				label: "Confirmados por exame (SWAB)",
				borderColor: "#FF0000",
				fill: false
			},
			{
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02, 02, 02, 02],
				label: "Confirmados por exame (teste rápido)",
				borderColor: "#8B0000",
				fill: false
			}
			, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 01, 01],
				label: "Óbitos suspeitos (aguardando resultados)",
				borderColor: "#303030",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00],
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