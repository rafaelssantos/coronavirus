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
			<span>Última atualização em 13 de abril de 2020 às 20:00</span>
		</div>

		<div class='cases-panel-container'>
			<div class='cases-label-container' id='label-suspeitos-em-monitoramento'>
				<span class='cases-label'>*Suspeitos em monitoramento</span><span class='cases-counter'>010</span>
			</div>
			<div class='cases-label-container' id='label-suspeitos-em-investigacao'>
				<span class='cases-label'>**Suspeitos em investigação</span><span class='cases-counter'>008</span>
			</div>
			<div class='cases-label-container' id='label-recuperados'>
				<span class='cases-label'>***Recuperados</span><span class='cases-counter'>023</span>
			</div>
			<div class='cases-label-container' id='label-descartados-por-exame'>
				<span class='cases-label'>Descartados por exame</span><span class='cases-counter'>000</span>
			</div>
			<div class='cases-label-container' id='label-suspeitos-em-internacao-hospitalar'>
				<span class='cases-label'>Internação Hospitalar</span><span class='cases-counter'>002</span>
			</div>
			<div class='cases-label-container' id='label-confirmados-por-exame'>
				<span class='cases-label'>Confirmados por exame</span><span class='cases-counter'>000</span>
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
			Ainda não saíram resultados dos exames coletados. Infelizmente, o atraso não depende do Município de Quatá. A prefeitura aguarda os resultados e realizará a divulgação assim que os receber.
		</p>

		<div class='chart-panel-container'>
			<canvas id="cases-chart"></canvas>
		</div>


		<!-- <div class='cases-table'>
			<div class='cases-table-header'>
				<span class='table-cell table-cell-0'><span>Sexo</span></span>
				<span class='table-cell table-cell-1'><span>Idade</span></span>
				<span class='table-cell table-cell-2'><span>Condição do paciente</span></span>
				<span class='table-cell table-cell-3'><span>SWAB<br>Exame<br>COVID-19</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>74</span></span>
				<span class='table-cell table-cell-2'><span>Internação Hospitalar (UTI)</span></span>
				<span class='table-cell table-cell-3'><span>Sim</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>36</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>21</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>38</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>39</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>52</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>03</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>27</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>24</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>43</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>M</span></span>
				<span class='table-cell table-cell-1'><span>06</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>32</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>81</span></span>
				<span class='table-cell table-cell-2'><span>Internação Domiciliar</span></span>
				<span class='table-cell table-cell-3'><span>Não</span></span>
			</div>
			<div class='cases-table-content status-suspeito'>
				<span class='table-cell table-cell-0'><span>F</span></span>
				<span class='table-cell table-cell-1'><span>61</span></span>
				<span class='table-cell table-cell-2'><span>Internação Hospitalar</span></span>
				<span class='table-cell table-cell-3'><span>Sim</span></span>
			</div>
		</div> -->
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart"), {
		type: 'line',
		data: {
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04'],
			datasets: [{
				data: [04, 04, 06, 06, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10],
				label: "Suspeitos em monitoramento",
				borderColor: "#FFFF00",
				fill: false
			},
			{
				data: [00, 01, 04, 04, 04, 04, 04, 04, 04, 05, 05, 05, 06, 06, 06, 06, 06, 06, 06, 07, 07, 07, 07, 08],
				label: "Suspeitos em investigação",
				borderColor: "#FFC800",
				fill: false
			},
			{
				data: [00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 03, 03, 04, 05, 06, 16, 16, 17, 18, 18, 20, 20, 20, 23],
				label: "Recuperados",
				borderColor: "#0000FF",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00],
				label: "Descartados por exame",
				borderColor: "#008000",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 01, 01, 01, 01, 01, 01, 01, 01, 02, 02, 02, 02, 02],
				label: "Internação Hospitalar",
				borderColor: "#8B0000",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00],
				label: "Confirmados por exame",
				borderColor: "#FF0000",
				fill: false
			}, {
				data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00],
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