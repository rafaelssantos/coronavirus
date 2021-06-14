<?php
include_once('conf/conf.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Quatá contra a COVID-19─Prefeitura Municipal de Quatá-SP</title>

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
			<p class='font-italic text-right'>Última atualização em 14 de junho de 2021 às 08:26.</p>
		</div>

		<div class="container">
			<div class="row text-center">
				<div class="col-xl-4 col-sm-6 col-12 bg-yellow rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Suspeitos
					</div>
					<div class="container font-bold h2">
						37
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-red rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Confirmados
					</div>
					<div class="container font-bold h2">
						1327
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-black rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Óbitos
					</div>
					<div class="container-fluid font-bold h2">
						024
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-green rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Negativados
					</div>
					<div class="container font-bold h2">
						2223
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12  bg-blue rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Curados
					</div>
					<div class="container-fluid font-bold h2">
						1153
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-purple rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Hospitalizados
					</div>
					<div class="container font-bold h2">
						004
					</div>
				</div>
			</div>
		</div>

		<div class='cases-panel-container'>
			<div class='chart-panel-container'>
				<canvas id="cases-chart-1"></canvas>
			</div>
		</div>

		<div class='cases-panel-container'>
		
		</div>


		<div class="container-fluid">
			<p class='font-italic text-right'>4533 doses aplicadas.</p>
		</div>

		<div class="container mt-5">
			<div class="row text-center">
				
				<div class="col-12 bg-black rounded shadow text-white">
					<div class="container h1 p-1 font-bold">
						Doses aplicadas
					</div>
					<div class="container font-bold h2">
						4533
					</div>
				</div>
				<div class="col-12 bg-gray-1 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Primeira Dose
					</div>
					<div class="container font-bold h2">
						3006
					</div>
				</div>

				<div class="col-12 bg-gray-2 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Segunda Dose
					</div>
					<div class="container font-bold h2">
						1527
					</div>
				</div>
		</div>

		<div class="container mt-5">
			<div class="row text-center">
				
				<div class="col-12 bg-black rounded shadow text-white">
					<div class="container h1 p-1 font-bold">
						Vacinados
					</div>
				</div>

				<div class="col-xl-6 col-sm-6 col-12 bg-gray-1 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Trabalhadores de Saúde e Cuidadores
					</div>
					<div class="container font-bold h2">
						479
					</div>
				</div>
				<div class="col-xl-6 col-sm-6 col-12 bg-gray-2 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Professores e funcionários da Educação
					</div>
					<div class="container font-bold h2">
						114
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-3 rounded shadow text-black">
					<div class="container-fluid h5 p-1 font-bold">
						90+ anos
					</div>
					<div class="container-fluid font-bold h2">
						034
					</div>
				</div>

				<div class="col-xl-3 col-sm-6 col-12 bg-gray-4 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						80 a 89 anos
					</div>
					<div class="container font-bold h2">
						268
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-5 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						75 a 79 anos
					</div>
					<div class="container font-bold h2">
						268
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-6 rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						70 a 74 anos
					</div>
					<div class="container font-bold h2">
						334
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-7 rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						65 a 69 anos
					</div>
					<div class="container font-bold h2">
						509
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-8 rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						60 a 64 anos
					</div>
					<div class="container font-bold h2">
						658
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-9 rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Comorbidades
					</div>
					<div class="container font-bold h2">
						342
					</div>
				</div>
			</div>
		</div>

		<div class='container aglomerate-container'>
			<p id='aglomerate-link'> Denuncie: <a href="tel: 18996556408">&nbsp;(18) 99655-6408&nbsp;</a></p>
		</div>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

<script>
	new Chart(document.getElementById("cases-chart-1"), {
		type: 'line',
		data: {
			labels: ['21/03/20', '22/03/20', '23/03/20', '24/03/20', '25/03/20', '26/03/20', '27/03/20', '28/03/20', '29/03/20', '30/03/20', '31/03/20', '01/04/20', '02/04/20', '03/04/20', '04/04/20', '05/04/20', '06/04/20', '07/04/20', '08/04/20', '09/04/20', '10/04/20', '11/04/20', '12/04/20', '13/04/20', '14/04/20', '15/04/20', '16/04/20', '17/04/20', '18/04/20', '19/04/20', '20/04/20', '21/04/20', '22/04/20', '23/04/20', '24/04/20', '25/04/20', '26/04/20', '27/04/20', '28/04/20', '29/04/20', '30/04/20', '01/05/20', '02/05/20', '03/05/20', '04/05/20', '05/05/20', '06/05/20', '07/05/20', '08/05/20', '09/05/20', '10/05/20', '11/05/20', '12/05/20', '13/05/20', '14/05/20', '15/05/20', '16/05/20', '17/05/20', '18/05/20', '19/05/20', '20/05/20', '21/05/20', '22/05/20', '23/05/20', '24/05/20', '25/05/20', '26/05/20', '27/05/20', '28/05/20', '31/05/20', '01/06/20', '02/06/20', '03/06/20', '04/06/20', '05/06/20', '06/06/20', '07/06/20', '08/06/20', '09/06/20', '10/06/20', '11/06/20', '12/06/20', '13/06/20', '14/06/20', '15/06/20', '16/06/20', '17/06/20', '18/06/20', '19/06/20', '20/06/20', '21/06/20', '22/06/20', '23/06/20', '24/06/20', '25/06/20', '26/06/20', '27/06/20', '28/06/20', '29/06/20', '30/06/20', '01/07/20', '02/07/20', '03/07/20', '04/07/20', '05/07/20', '06/07/20', '07/07/20', '08/07/20', '09/07/20', '10/07/20', '11/07/20', '12/07/20', '13/07/20', '14/07/20', '15/07/20','16/07/20', '17/07/20', '18/07/20', '19/07/20', '20/07/20', '21/07/20', '22/07/20', '23/07/20', '24/07/20', '25/07/20', '26/07/20', '27/07/20', '28/07/20', '29/07/20', '30/07/20', '31/07/20', '01/08/20', '02/08/20', '03/08/20', '04/08/20', '05/08/20', '06/08/20', '07/08/20', '10/08/20', '11/08/20', '12/08/20', '13/08/20', '14/08/20', '17/08/20', '18/08/20', '19/08/20', '20/08/20', '21/08/20', '24/08/20', '25/08/20', '26/08/20', '27/08/20', '28/08/20', '31/08/20', '01/09/20', '02/09/20', '03/09/20', '04/09/20', '07/09/20', '08/09/20', '09/09/20', '10/09/20', '11/09/20', '14/09/20', '15/09/20', '16/09/20', '17/09/20', '18/09/20', '21/09/20', '22/09/20', '23/09/20', '24/09/20', '25/09/20', '28/09/20', '29/09/20', '30/09/20', '01/10/20', '02/10/20', '05/10/20', '06/10/20', '07/10/20', '08/10/20', '09/10/20', '13/10/20', '14/10/20', '15/10/20', '16/10/20', '19/10/20', '20/10/20', '21/10/20', '22/10/20', '23/10/20', '26/10/20', '27/10/20', '28/10/20', '29/10/20', '30/10/20', '03/11/20', '04/11/20', '05/11/20', '06/11/20', '09/11/20', '10/11/20', '11/11/20', '12/11/20', '13/11/20', '16/11/20', '17/11/20', '18/11/20', '19/11/20', '20/11/20', '23/11/20', '24/11/20', '25/11/20', '26/11/20', '27/11/20', '30/11/20', '01/12/20', '02/12/20', '03/12/20', '04/12/20', '07/12/20', '08/12/20', '09/12/20', '10/12/20', '11/12/20', '14/12/20', '15/12/20', '16/12/20', '17/12/20', '18/12/20', '21/12/20', '22/12/20', '23/12/20', '28/12/20', '29/12/20', '04/01/21', '05/01/21', '06/01/21', '07/01/21', '08/01/21', '11/01/21', '12/01/21', '13/01/21', '14/01/21', '15/01/21', '18/01/21', '19/01/21', '20/01/21', '21/01/21', '22/01/21', '25/01/21', '26/01/21', '27/01/21', '28/01/21', '29/01/21', '01/02/21', '02/02/21', '03/02/21', '04/02/21', '05/02/21', '08/02/21', '09/02/21', '10/02/21', '11/02/21', '12/02/21', '15/02/21', '16/02/21', '17/02/21', '18/02/21', '19/02/21', '22/02/21', '23/02/21', '24/02/21', '25/02/21', '26/02/21', '01/03/21', '02/03/21', '03/03/21', '04/03/21', '05/03/21', '08/03/21', '09/03/21', '10/03/21', '11/03/21', '12/03/21', '15/03/21', '16/03/21', '17/03/21', '18/03/21', '19/03/21', '22/03/21', '23/03/21', '24/03/21', '25/03/21', '26/03/21', '29/03/21', '30/03/21', '31/03/21', '01/04/21', '02/04/21', '03/04/21', '05/04/21', '06/04/21', '07/04/21', '08/04/21', '09/04/21', '12/04/21', '13/04/21', '14/04/21', '15/04/21', '16/04/21', '19/04/21', '20/04/21', '22/04/21', '26/04/21', '27/04/21', '28/04/21', '29/04/21', '30/04/21', '03/05/21', '04/05/21', '05/05/21', '06/05/21', '07/05/21', '10/05/21', '11/05/21', '12/05/21','13/05/21', '14/05/21', '17/05/21', '18/05/21', '19/05/21', '20/05/21', '21/05/21', '24/05/21', '25/05/21', '26/05/21', '27/05/21', '28/05/21', '29/05/21', '31/05/21', '01/06/21', '02/06/21', '07/06/21', '08/06/21', '09/06/21', '10/06/21', '11/06/21'],
			datasets: [{
					data: [4, 4, 6, 6, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10, 9, 9, 7, 9, 8, 7, 6, 7, 7, 7, 8, 8, 8, 7, 8, 8, 9, 9, 6, 6, 4, 10, 11, 12, 14, 15, 15, 16, 13, 13, 13, 13, 13, 13, 14, 18, 16, 11, 12, 14, 14, 14, 14, 9, 8, 8, 7, 11, 9, 12, 12, 14, 15, 16, 11, 10, 10, 11, 11, 11, 7, 6, 6, 10, 14, 15, 17, 13, 14, 15, 13, 16, 19, 19, 19, 15, 17, 18, 19, 22, 23, 22, 22, 23, 23, 25, 27, 28, 19, 18, 21, 22, 25, 33, 34, 29, 36, 40, 40, 41, 44, 45, 40, 45, 51, 55, 54, 61, 64, 51, 52, 50, 55, 53, 39, 42, 48, 60, 67, 63, 62, 65, 63, 62, 46, 46, 48, 51, 51, 54, 59, 57, 55, 21, 31, 22, 24, 24, 24, 28, 17, 20, 19, 21, 21, 20, 17, 19, 24, 22, 14, 13, 15, 17, 9, 12, 11, 12, 12, 14, 14, 14, 19, 23, 26, 28, 24, 24, 27, 28, 31, 21, 26, 28, 26, 23, 24, 20, 17, 19, 17, 18, 23, 31, 30, 24, 22, 30, 33, 24, 20, 20, 17, 14, 9, 6, 6, 10, 7, 11, 12, 10, 5, 5, 3, 5, 9, 17, 8, 5, 12, 15, 18, 25, 26, 27, 32, 32, 24, 32, 32, 21, 30, 31, 47, 36, 31, 39, 38, 42, 43, 36, 42, 49, 54, 48, 41, 40, 40, 46, 56, 52, 56, 46, 44, 36, 29, 15, 16, 22, 20, 21, 11, 28, 24, 33, 23, 19, 21, 22, 22, 19, 20, 33, 40, 35, 31, 28, 32, 32, 35, 29, 42, 42, 34, 31, 46, 53, 42, 31, 29, 23, 30, 29, 27, 34, 20, 20, 23, 26, 24, 30, 36, 31, 20, 20, 27, 26, 28, 34, 27, 27, 21, 26, 31, 27, 44, 51, 43, 55, 58, 49, 45, 47, 66, 63, 63, 48, 60, 53, 47, 45, 49, 57, 37],
					label: "Suspeitos",
					borderColor: "#FFFF00",
					pointRadius: 0.5,
					pointBackgroundColor: "#FFFF00",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 4, 4, 4, 4, 4, 5, 5, 6, 6, 6, 6, 9, 9, 10, 10, 10, 10, 10, 10, 10, 13, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 24, 24, 24, 24, 27, 27, 29, 29, 29, 29, 29, 33, 35, 36, 36, 37, 37, 41, 42, 43, 46, 46, 46, 46, 46, 46, 47, 48, 50, 50, 50, 51, 53, 54, 55, 55, 55, 55, 57, 57, 59, 60, 65, 71, 71, 72, 72, 74, 75, 77, 78, 79, 82, 87, 89, 90, 91, 98, 107, 108, 109, 111, 120, 120, 123, 124, 129, 129, 134, 140, 144, 149, 150, 150, 150, 150, 151, 151, 153, 153, 153, 154, 156, 157, 157, 157, 158, 159, 162, 164, 164, 171, 172, 174, 178, 181, 184, 187, 192, 195, 198, 198, 200, 212, 213, 213, 215, 216, 217, 219, 219, 222, 230, 232, 236, 236, 240, 255, 259, 262, 264, 266, 266, 269, 270, 271, 273, 277, 278, 280, 283, 286, 287, 288, 290, 290, 291, 298, 301, 310, 311, 320, 328, 332, 343, 346, 350, 355, 355, 359, 360, 363, 369, 377, 387, 396, 404, 409, 414, 425, 430, 439, 444, 446, 449, 453, 459, 460, 462, 464, 464, 465, 470, 470, 471, 471, 471, 474, 475, 476, 478, 486, 491, 494, 505, 507, 517, 525, 533, 537, 543, 555, 573, 582, 591, 600, 613, 631, 639, 647, 652, 669, 693, 699, 711, 720, 726, 737, 746, 754, 765, 779, 793, 798, 804, 807, 822, 831, 835, 842, 858, 867, 874, 881, 892, 903, 908, 913, 916, 922, 931, 941, 950, 954, 960, 971, 982, 997, 1011, 1030, 1053, 1068, 1081, 1099, 1123, 1124, 1161, 1168, 1200, 1254, 1279, 1294, 1305, 1327], 
					label: "Confirmados",
					borderColor: "#FF0000",
					pointRadius: 0.5,
					pointBackgroundColor: "#FF0000",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 11, 11, 11, 12, 12, 12, 12, 12, 12, 12, 12, 13, 13, 13, 13, 13, 13, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 16, 17, 17, 17, 17, 18, 18, 19, 19, 19, 19, 19, 20, 20, 20, 21, 22, 23, 23, 23, 23, 23, 23, 24, 24],
					label: "Óbitos",
					borderColor: "#000000",
					pointRadius: 0.5,
					pointBackgroundColor: "#000000",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 3, 3, 3, 3, 3, 6, 7, 8, 8, 8, 8, 8, 8, 8, 11, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 17, 18, 18, 18, 18, 18, 18, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 23, 23, 24, 24, 24, 25, 25, 30, 32, 33, 33, 33, 33, 37, 37, 38, 39, 39, 39, 39, 39, 39, 40, 40, 46, 46, 46, 47, 48, 48, 48, 48, 48, 49, 50, 50, 52, 52, 56, 59, 62, 64, 64, 66, 66, 69, 71, 72, 75, 77, 79, 79, 79, 81, 82, 88, 89, 92, 92, 92, 95, 101, 106, 109, 125, 130, 135, 135, 137, 137, 143, 143, 143, 143, 143, 144, 145, 145, 145, 149, 150, 151, 152, 152, 156, 158, 158, 164, 165, 165, 168, 168, 168, 172, 180, 182, 182, 184, 190, 199, 200, 200, 203, 206, 208, 210, 211, 214, 214, 217, 221, 221, 224, 231, 234, 235, 239, 243, 248, 253, 256, 257, 263, 269, 270, 271, 274, 274, 276, 276, 276, 276, 280, 283, 287, 295, 297, 304, 305, 307, 314, 314, 326, 326, 330, 335, 335, 342, 346, 348, 349, 350, 354, 358, 358, 364, 364, 389, 391, 396, 399, 402, 413, 416, 417, 417, 417, 419, 433, 433, 433, 433, 435, 435, 436, 436, 436, 436, 439, 440, 444, 447, 456, 463, 467, 470, 476, 482, 497, 504, 510, 512, 515, 526, 533, 546, 554, 567, 588, 602, 618, 623, 633, 646, 655, 667, 674, 687, 699, 717, 724, 727, 742, 762, 771, 779, 798, 806, 811, 814, 818, 820, 826, 833, 838, 839, 848, 859, 861, 865, 870, 878, 885, 901, 919, 925, 935, 941, 952, 967, 973, 973, 987, 1020, 1032, 1081, 1086, 1131, 1144, 1153],
					label: "Curados",
					borderColor: "#0000FF",
					pointRadius: 0.5,
					pointBackgroundColor: "#0000FF",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 1, 0, 0, 0, 0, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 1, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 2, 2, 2, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 3, 3, 4, 3, 3, 2, 2, 3, 4, 3, 3, 2, 3, 1, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 2, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 3, 3, 2, 1, 2, 1, 1, 2, 2, 1, 1, 2, 3, 1, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 0, 1, 1, 4, 5, 5, 4, 4, 4, 5, 2, 2, 4, 3, 2, 3, 3, 3, 3, 2, 2, 4, 2, 3, 4, 4, 4, 5, 5, 4, 3, 5, 4, 4, 5, 7, 5, 5, 3, 4, 5, 2, 2, 4, 7, 8, 8, 7, 7, 7, 5, 5, 6, 4, 4, 6, 3, 4, 2, 4, 6, 4, 3, 6, 6, 7, 9, 9, 7, 7, 7, 5, 4],
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