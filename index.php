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

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/health.css">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/8cd927dbc4.js" crossorigin="anonymous"></script>
	<script src="javascript/lib/chartjs/Chart.min.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-home").addClass("current-menu-item");
	</script>


	<div class='content'>
		<div class="container-fluid">
			<p class='font-italic text-right'>Última atualização em 26 de junho de 2020 às 07:20.</p>
		</div>

		<div class="container">
			<div class="row text-center">
				<div class="col-xl-4 col-sm-6 col-12 bg-yellow rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Suspeitos
					</div>
					<div class="container font-bold h2">
						13
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-red rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Confirmados
					</div>
					<div class="container font-bold h2">
						23
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-black rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Óbitos
					</div>
					<div class="container-fluid font-bold h2">
						02
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-green rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Negativados
					</div>
					<div class="container font-bold h2">
						106
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12  bg-blue rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Curados
					</div>
					<div class="container-fluid font-bold h2">
						20
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-purple rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Hospitalizados
					</div>
					<div class="container font-bold h2">
						01
					</div>
				</div>
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
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04', '14/04', '15/04', '16/04', '17/04', '18/04', '19/04', '20/04', '21/04', '22/04', '23/04', '24/04', '25/04', '26/04', '27/04', '28/04', '29/04', '30/04', '01/05', '02/05', '03/05', '04/05', '05/05', '06/05', '07/05', '08/05', '09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05', '21/05', '22/05', '23/05', '24/05', '25/05', '26/05', '27/05', '28/05', '31/05', '01/06', '02/06', '03/06', '04/06', '05/06', '06/06', '07/06', '08/06', '09/06', '10/06', '11/06', '12/06', '13/06', '14/06', '15/06', '16/06', '17/06', '18/06', '19/06', '20/06', '21/06', '22/06', '23/06', '24/06', '25/06'],
			datasets: [{
					data: [04, 04, 06, 06, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10, 09, 09, 07, 09, 08, 07, 06, 07, 07, 07, 08, 08, 08, 07, 08, 08, 09, 09, 06, 06, 04, 10, 11, 12, 14, 15, 15, 16, 13, 13, 13, 13, 13, 13, 14, 18, 16, 11, 12, 14, 14, 14, 14, 09, 08, 08, 07, 11, 09, 12, 12, 14, 15, 16, 11, 10, 10, 11, 11, 11, 07, 06, 06, 10, 14, 15, 17, 13, 14, 15, 13],
					label: "Suspeitos",
					borderColor: "#FFFF00",
					pointRadius: 0.5,
					pointBackgroundColor: "#FFFF00",
					fill: false
				},
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02, 02, 02, 02, 04, 04, 04, 04, 04, 05, 05, 06, 06, 06, 06, 09, 09, 10, 10, 10, 10, 10, 10, 10, 13, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23],
					label: "Confirmados",
					borderColor: "#FF0000",
					pointRadius: 0.5,
					pointBackgroundColor: "#FF0000",
					fill: false
				},
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02],
					label: "Óbitos",
					borderColor: "#000000",
					pointRadius: 0.5,
					pointBackgroundColor: "#000000",
					fill: false
				},
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 02, 02, 02, 03, 03, 03, 03, 03, 06, 07, 08, 08, 08, 08, 08, 08, 08, 11, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 17, 18, 18, 18, 18, 18, 18, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20],
					label: "Curados",
					borderColor: "#0000FF",
					pointRadius: 0.5,
					pointBackgroundColor: "#0000FF",
					fill: false
				},
				{
					data: [00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 01, 01, 01, 01, 01, 01, 01, 01, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 02, 03, 03, 03, 02, 02, 02, 02, 02, 02, 02, 02, 01, 01, 01, 01, 01, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 00, 01, 01, 01, 02, 02, 02, 03, 03, 01, 00, 00, 00, 00, 03, 03, 03, 03, 03, 03, 03, 03, 02, 02, 02, 02, 02, 02, 00, 00, 00, 00, 01, 02, 02, 02, 01, 01],
					label: "Hospitalizados",
					borderColor: "#800080",
					pointRadius: 0.5,
					pointBackgroundColor: "#800080",
					fill: false
				}

			]
		},
		options: {
			maintainAspectRatio: false,
			title: {
				display: true,
				text: 'Evolução dos casos'
			},
			scales: {
				xAxes: [{
					// type: 'linear',
					// position: 'bottom',
					ticks: {
						ticks: {
							stepSize: 10,
						},
					}
				}],
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