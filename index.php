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
			<p class='font-italic text-right'>Última atualização em 08 de setembro de 2020 às 16:00.</p>
		</div>

		<div class="container">
			<div class="row text-center">
				<div class="col-xl-4 col-sm-6 col-12 bg-yellow rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Suspeitos
					</div>
					<div class="container font-bold h2">
						31
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-red rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Confirmados
					</div>
					<div class="container font-bold h2">
						120
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-black rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Óbitos
					</div>
					<div class="container-fluid font-bold h2">
						04
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-green rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Negativados
					</div>
					<div class="container font-bold h2">
						344
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12  bg-blue rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Curados
					</div>
					<div class="container-fluid font-bold h2">
						92
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-purple rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Hospitalizados
					</div>
					<div class="container font-bold h2">
						00
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
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04', '14/04', '15/04', '16/04', '17/04', '18/04', '19/04', '20/04', '21/04', '22/04', '23/04', '24/04', '25/04', '26/04', '27/04', '28/04', '29/04', '30/04', '01/05', '02/05', '03/05', '04/05', '05/05', '06/05', '07/05', '08/05', '09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05', '21/05', '22/05', '23/05', '24/05', '25/05', '26/05', '27/05', '28/05', '31/05', '01/06', '02/06', '03/06', '04/06', '05/06', '06/06', '07/06', '08/06', '09/06', '10/06', '11/06', '12/06', '13/06', '14/06', '15/06', '16/06', '17/06', '18/06', '19/06', '20/06', '21/06', '22/06', '23/06', '24/06', '25/06', '26/06', '27/06', '28/06', '29/06', '30/06', '01/07', '02/07', '03/07', '04/07', '05/07', '06/07', '07/07', '08/07', '09/07', '10/07', '11/07', '12/07', '13/07', '14/07', '15/07','16/07', '17/07', '18/07', '19/07', '20/07', '21/07', '22/07', '23/07', '24/07', '25/07', '26/07', '27/07', '28/07', '29/07', '30/07', '31/07', '01/08', '02/08', '03/08', '04/08', '05/08', '06/08', '07/08', '10/08', '11/08', '12/08', '13/08', '14/08', '17/08', '18/08', '19/08', '20/08', '21/08', '24/08', '25/08', '26/08', '27/08', '28/08', '31/08', '01/09', '02/09', '03/09', '04/09', '07/09', '', ''],
			datasets: [{
					data: [004, 004, 006, 006, 012, 012, 015, 015, 015, 014, 017, 014, 015, 014, 014, 010, 010, 012, 013, 014, 012, 011, 012, 010, 009, 009, 007, 009, 008, 007, 006, 007, 007, 007, 008, 008, 008, 007, 008, 008, 009, 009, 006, 006, 004, 010, 011, 012, 014, 015, 015, 016, 013, 013, 013, 013, 013, 013, 014, 018, 016, 011, 012, 014, 014, 014, 014, 009, 008, 008, 007, 011, 009, 012, 012, 014, 015, 016, 011, 010, 010, 011, 011, 011, 007, 006, 006, 010, 014, 015, 017, 013, 014, 015, 013, 016, 019, 019, 019, 015, 017, 018, 019, 022, 023, 022, 022, 023, 023, 025, 027, 028, 019, 018, 021, 022, 025, 033, 034, 029, 036, 040, 040, 041, 044, 045, 040, 045, 051, 055, 054, 061, 064, 051, 052, 050, 055, 053, 039, 042, 048, 060, 067, 063, 062, 065, 063, 062, 046, 046, 048, 051, 051, 054, 059, 057, 055, 021, 031],
					label: "Suspeitos",
					borderColor: "#FFFF00",
					pointRadius: 0.5,
					pointBackgroundColor: "#FFFF00",
					fill: false
				},
				{
					data: [000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 002, 002, 002, 002, 004, 004, 004, 004, 004, 005, 005, 006, 006, 006, 006, 009, 009, 010, 010, 010, 010, 010, 010, 010, 013, 018, 018, 018, 018, 018, 018, 019, 019, 019, 019, 019, 019, 019, 019, 019, 019, 019, 020, 020, 020, 020, 020, 020, 021, 021, 021, 021, 021, 021, 022, 022, 022, 022, 022, 022, 022, 022, 022, 022, 023, 024, 024, 024, 024, 027, 027, 029, 029, 029, 029, 029, 033, 035, 036, 036, 037, 037, 041, 042, 043, 046, 046, 046, 046, 046, 046, 047, 048, 050, 050, 050, 051, 053, 054, 055, 055, 055, 055, 057, 057, 059, 060, 065, 071, 071, 072, 072, 074, 075, 077, 078, 079, 082, 087, 089, 090, 091, 098, 107, 108, 109, 111, 120, 120],
					label: "Confirmados",
					borderColor: "#FF0000",
					pointRadius: 0.5,
					pointBackgroundColor: "#FF0000",
					fill: false
				},
				{
					data: [000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 001, 001, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 003, 003, 003, 003, 003, 003, 003, 004, 004, 004, 004, 004, 004, 004, 004, 004],
					label: "Óbitos",
					borderColor: "#000000",
					pointRadius: 0.5,
					pointBackgroundColor: "#000000",
					fill: false
				},
				{
					data: [000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 002, 002, 002, 003, 003, 003, 003, 003, 006, 007, 008, 008, 008, 008, 008, 008, 008, 011, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 016, 017, 018, 018, 018, 018, 018, 018, 020, 020, 020, 020, 020, 020, 020, 020, 020, 020, 020, 020, 020, 020, 020, 023, 023, 024, 024, 024, 025, 025, 030, 032, 033, 033, 033, 033, 037, 037, 038, 039, 039, 039, 039, 039, 039, 040, 040, 046, 046, 046, 047, 048, 048, 048, 048, 048, 049, 050, 050, 052, 052, 056, 059, 062, 064, 064, 066, 066, 069, 071, 072, 075, 077, 079, 079, 079, 081, 082, 088, 089, 092, 092, 092],
					label: "Curados",
					borderColor: "#0000FF",
					pointRadius: 0.5,
					pointBackgroundColor: "#0000FF",
					fill: false
				},
				{
					data: [000, 000, 000, 000, 000, 000, 000, 000, 000, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 002, 003, 003, 003, 002, 002, 002, 002, 002, 002, 002, 002, 001, 001, 001, 001, 001, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 000, 001, 001, 001, 002, 002, 002, 003, 003, 001, 000, 000, 000, 000, 003, 003, 003, 003, 003, 003, 003, 003, 002, 002, 002, 002, 002, 002, 000, 000, 000, 000, 001, 002, 002, 002, 001, 001, 001, 000, 000, 000, 000, 000, 000, 001, 001, 000, 000, 002, 002, 002, 002, 003, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 001, 002, 003, 003, 003, 004, 003, 003, 002, 002, 003, 004, 003, 003, 002, 003, 001, 002, 002, 002, 002, 002, 002, 000, 000, 000, 000, 000],
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
						maxTicksLimit: 15
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