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
			<p class='font-italic text-right'>Última atualização em 22 de fevereiro de 2021 às 13:00.</p>
		</div>

		<div class="container">
			<div class="row text-center">
				<div class="col-xl-4 col-sm-6 col-12 bg-yellow rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Suspeitos
					</div>
					<div class="container font-bold h2">
						29
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-red rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Confirmados
					</div>
					<div class="container font-bold h2">
						471
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-black rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Óbitos
					</div>
					<div class="container-fluid font-bold h2">
						006
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-green rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Negativados
					</div>
					<div class="container font-bold h2">
						946
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12  bg-blue rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Curados
					</div>
					<div class="container-fluid font-bold h2">
						433
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-purple rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Hospitalizados
					</div>
					<div class="container font-bold h2">
						001
					</div>
				</div>
			</div>
		</div>

		<div class='cases-panel-container'>
			<div class='chart-panel-container'>
				<canvas id="cases-chart-1"></canvas>
			</div>
		</div>

		<!-- <div class='container aglomerate-container'>
			<a id='aglomerate-link' href="https://forms.gle/f5qmt9kiN3D5Q4rr7">Clique aqui para denunciar aglomerações clandestinas!</a>
		</div> -->
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart-1"), {
		type: 'line',
		data: {
			labels: ['21/03', '22/03', '23/03', '24/03', '25/03', '26/03', '27/03', '28/03', '29/03', '30/03', '31/03', '01/04', '02/04', '03/04', '04/04', '05/04', '06/04', '07/04', '08/04', '09/04', '10/04', '11/04', '12/04', '13/04', '14/04', '15/04', '16/04', '17/04', '18/04', '19/04', '20/04', '21/04', '22/04', '23/04', '24/04', '25/04', '26/04', '27/04', '28/04', '29/04', '30/04', '01/05', '02/05', '03/05', '04/05', '05/05', '06/05', '07/05', '08/05', '09/05', '10/05', '11/05', '12/05', '13/05', '14/05', '15/05', '16/05', '17/05', '18/05', '19/05', '20/05', '21/05', '22/05', '23/05', '24/05', '25/05', '26/05', '27/05', '28/05', '31/05', '01/06', '02/06', '03/06', '04/06', '05/06', '06/06', '07/06', '08/06', '09/06', '10/06', '11/06', '12/06', '13/06', '14/06', '15/06', '16/06', '17/06', '18/06', '19/06', '20/06', '21/06', '22/06', '23/06', '24/06', '25/06', '26/06', '27/06', '28/06', '29/06', '30/06', '01/07', '02/07', '03/07', '04/07', '05/07', '06/07', '07/07', '08/07', '09/07', '10/07', '11/07', '12/07', '13/07', '14/07', '15/07','16/07', '17/07', '18/07', '19/07', '20/07', '21/07', '22/07', '23/07', '24/07', '25/07', '26/07', '27/07', '28/07', '29/07', '30/07', '31/07', '01/08', '02/08', '03/08', '04/08', '05/08', '06/08', '07/08', '10/08', '11/08', '12/08', '13/08', '14/08', '17/08', '18/08', '19/08', '20/08', '21/08', '24/08', '25/08', '26/08', '27/08', '28/08', '31/08', '01/09', '02/09', '03/09', '04/09', '07/09', '08/09', '09/09', '10/09', '11/09', '14/09', '15/09', '16/09', '17/09', '18/09', '21/09', '22/09', '23/09', '24/09', '25/09', '28/09', '29/09', '30/09', '01/10', '02/10', '05/10', '06/10', '07/10', '08/10', '09/10', '13/10', '14/10', '15/10', '16/10', '19/10', '20/10', '21/10', '22/10', '23/10', '26/10', '27/10', '28/10', '29/10', '30/10', '03/11', '04/11', '05/11', '06/11', '09/11', '10/11', '11/11', '12/11', '13/11', '16/11', '17/11', '18/11', '19/11', '20/11', '23/11', '24/11', '25/11', '26/11', '27/11', '30/11', '01/12', '02/12', '03/12', '04/12', '07/12', '08/12', '09/12', '10/12', '11/12', '14/12', '15/12', '16/12', '17/12', '18/12', '21/12', '22/12', '23/12', '28/12', '29/12', '04/01', '05/01', '06/01', '07/01', '08/01', '11/01', '12/01', '13/01', '14/01', '15/01', '18/01', '19/01', '20/01', '21/01', '22/01', '25/01', '26/01', '27/01', '28/01', '29/01', '01/02', '02/02', '03/02', '04/02', '05/02', '08/02', '09/02', '10/02', '11/02', '12/02', '15/02', '16/02', '17/02', '18/02'],
			datasets: [{
					data: [4, 4, 6, 6, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10, 9, 9, 7, 9, 8, 7, 6, 7, 7, 7, 8, 8, 8, 7, 8, 8, 9, 9, 6, 6, 4, 10, 11, 12, 14, 15, 15, 16, 13, 13, 13, 13, 13, 13, 14, 18, 16, 11, 12, 14, 14, 14, 14, 9, 8, 8, 7, 11, 9, 12, 12, 14, 15, 16, 11, 10, 10, 11, 11, 11, 7, 6, 6, 10, 14, 15, 17, 13, 14, 15, 13, 16, 19, 19, 19, 15, 17, 18, 19, 22, 23, 22, 22, 23, 23, 25, 27, 28, 19, 18, 21, 22, 25, 33, 34, 29, 36, 40, 40, 41, 44, 45, 40, 45, 51, 55, 54, 61, 64, 51, 52, 50, 55, 53, 39, 42, 48, 60, 67, 63, 62, 65, 63, 62, 46, 46, 48, 51, 51, 54, 59, 57, 55, 21, 31, 22, 24, 24, 24, 28, 17, 20, 19, 21, 21, 20, 17, 19, 24, 22, 14, 13, 15, 17, 9, 12, 11, 12, 12, 14, 14, 14, 19, 23, 26, 28, 24, 24, 27, 28, 31, 21, 26, 28, 26, 23, 24, 20, 17, 19, 17, 18, 23, 31, 30, 24, 22, 30, 33, 24, 20, 20, 17, 14, 9, 6, 6, 10, 7, 11, 12, 10, 5, 5, 3, 5, 9, 17, 8, 5, 12, 15, 18, 25, 26, 27, 32, 32, 24, 32, 32, 21, 30, 31, 47, 36, 31, 39, 38, 42, 43, 36, 42, 49, 54, 48, 41, 40, 40, 46, 56, 52, 56, 46, 44, 36],
					label: "Suspeitos",
					borderColor: "#FFFF00",
					pointRadius: 0.5,
					pointBackgroundColor: "#FFFF00",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 4, 4, 4, 4, 4, 5, 5, 6, 6, 6, 6, 9, 9, 10, 10, 10, 10, 10, 10, 10, 13, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 24, 24, 24, 24, 27, 27, 29, 29, 29, 29, 29, 33, 35, 36, 36, 37, 37, 41, 42, 43, 46, 46, 46, 46, 46, 46, 47, 48, 50, 50, 50, 51, 53, 54, 55, 55, 55, 55, 57, 57, 59, 60, 65, 71, 71, 72, 72, 74, 75, 77, 78, 79, 82, 87, 89, 90, 91, 98, 107, 108, 109, 111, 120, 120, 123, 124, 129, 129, 134, 140, 144, 149, 150, 150, 150, 150, 151, 151, 153, 153, 153, 154, 156, 157, 157, 157, 158, 159, 162, 164, 164, 171, 172, 174, 178, 181, 184, 187, 192, 195, 198, 198, 200, 212, 213, 213, 215, 216, 217, 219, 219, 222, 230, 232, 236, 236, 240, 255, 259, 262, 264, 266, 266, 269, 270, 271, 273, 277, 278, 280, 283, 286, 287, 288, 290, 290, 291, 298, 301, 310, 311, 320, 328, 332, 343, 346, 350, 355, 355, 359, 360, 363, 369, 377, 387, 396, 404, 409, 414, 425, 430, 439, 444, 446, 449, 453, 459, 460, 462, 464, 464, 465, 470, 470, 471, 471],
					label: "Confirmados",
					borderColor: "#FF0000",
					pointRadius: 0.5,
					pointBackgroundColor: "#FF0000",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 6, 6, 6, 6],
					label: "Óbitos",
					borderColor: "#000000",
					pointRadius: 0.5,
					pointBackgroundColor: "#000000",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 3, 3, 3, 3, 3, 6, 7, 8, 8, 8, 8, 8, 8, 8, 11, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 17, 18, 18, 18, 18, 18, 18, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 23, 23, 24, 24, 24, 25, 25, 30, 32, 33, 33, 33, 33, 37, 37, 38, 39, 39, 39, 39, 39, 39, 40, 40, 46, 46, 46, 47, 48, 48, 48, 48, 48, 49, 50, 50, 52, 52, 56, 59, 62, 64, 64, 66, 66, 69, 71, 72, 75, 77, 79, 79, 79, 81, 82, 88, 89, 92, 92, 92, 95, 101, 106, 109, 125, 130, 135, 135, 137, 137, 143, 143, 143, 143, 143, 144, 145, 145, 145, 149, 150, 151, 152, 152, 156, 158, 158, 164, 165, 165, 168, 168, 168, 172, 180, 182, 182, 184, 190, 199, 200, 200, 203, 206, 208, 210, 211, 214, 214, 217, 221, 221, 224, 231, 234, 235, 239, 243, 248, 253, 256, 257, 263, 269, 270, 271, 274, 274, 276, 276, 276, 276, 280, 283, 287, 295, 297, 304, 305, 307, 314, 314, 326, 326, 330, 335, 335, 342, 346, 348, 349, 350, 354, 358, 358, 364, 364, 389, 391, 396, 399, 402, 413, 416, 417, 417, 417, 419, 433, 433, 433],
					label: "Curados",
					borderColor: "#0000FF",
					pointRadius: 0.5,
					pointBackgroundColor: "#0000FF",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 1, 0, 0, 0, 0, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 1, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 2, 2, 2, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 3, 3, 4, 3, 3, 2, 2, 3, 4, 3, 3, 2, 3, 1, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 2, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 3, 3, 2, 1, 2, 1, 1, 2, 2, 1, 1, 2, 3, 1, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 2, 1],
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
					ticks: {
						autoSkip: true,
						offset: true,
						maxTicksLimit: 11,
						autoSkipPadding: 5
					}
					}
				],
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