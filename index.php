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
			<p class='font-italic text-right'>Última atualização em 28 de abril de 2021 às 08:40.</p>
		</div>

		<div class="container">
			<div class="row text-center">
				<div class="col-xl-4 col-sm-6 col-12 bg-yellow rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Suspeitos
					</div>
					<div class="container font-bold h2">
						30
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-red rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Confirmados
					</div>
					<div class="container font-bold h2">
						867
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12 bg-black rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Óbitos
					</div>
					<div class="container-fluid font-bold h2">
						015
					</div>
				</div>

				<div class="col-xl-4 col-sm-6 col-12 bg-green rounded shadow text-white">
					<div class="container h5 p-1 font-bold">
						Negativados
					</div>
					<div class="container font-bold h2">
						1608
					</div>
				</div>
				<div class="col-xl-4 col-sm-6 col-12  bg-blue rounded shadow text-white">
					<div class="container-fluid h5 p-1 font-bold">
						Curados
					</div>
					<div class="container-fluid font-bold h2">
						806
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

		<div class="container mt-5">
			<div class="row text-center">
				
				<div class="col-12 bg-gray-3 rounded shadow text-black">
					<div class="container h1 p-1 font-bold">
						Vacinação
					</div>
					<div class="container font-bold h2">
						3387
					</div>
				</div>
				<div class="col-12 bg-gray-1 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Total na Primeira Dose
					</div>
					<div class="container font-bold h2">
						2050
					</div>
				</div>

				<div class="col-12 bg-gray-2 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Total na Segunda Dose
					</div>
					<div class="container font-bold h2">
						1337
					</div>
				</div>

				<div class="col-xl-6 col-sm-6 col-12 bg-gray-1 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Trabalhadores de Saúde e Cuidadores
					</div>
					<div class="container font-bold h2">
						425
					</div>
				</div>
				<div class="col-xl-6 col-sm-6 col-12 bg-gray-2 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Professores e funcionários da Educação
					</div>
					<div class="container font-bold h2">
						112
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-3 rounded shadow text-black">
					<div class="container-fluid h5 p-1 font-bold">
						Idosos 90+ anos
					</div>
					<div class="container-fluid font-bold h2">
						034
					</div>
				</div>

				<div class="col-xl-3 col-sm-6 col-12 bg-gray-4 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Idosos 80 a 89 anos
					</div>
					<div class="container font-bold h2">
						267
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-5 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Idosos 75 a 79 anos
					</div>
					<div class="container font-bold h2">
						266
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-6 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Idosos 70 a 74 anos
					</div>
					<div class="container font-bold h2">
						332
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-7 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Idosos 65 a 69 anos
					</div>
					<div class="container font-bold h2">
						500
					</div>
				</div>
				<div class="col-xl-3 col-sm-6 col-12 bg-gray-8 rounded shadow text-black">
					<div class="container h5 p-1 font-bold">
						Idosos 60 a 64 anos
					</div>
					<div class="container font-bold h2">
						114
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
			labels: ['21/03/21', '22/03/21', '23/03/21', '24/03/21', '25/03/21', '26/03/21', '27/03/21', '28/03/21', '29/03/21', '30/03/21', '31/03/21', '01/04/21', '02/04/21', '03/04/21', '04/04/21', '05/04/21', '06/04/21', '07/04/21', '08/04/21', '09/04/21', '10/04/21', '11/04/21', '12/04/21', '13/04/21', '14/04/21', '15/04/21', '16/04/21', '17/04/21', '18/04/21', '19/04/21', '20/04/21', '21/04/21', '22/04/21', '23/04/21', '24/04/21', '25/04/21', '26/04/21', '27/04/21', '28/04/21', '29/04/21', '30/04/21', '01/05/21', '02/05/21', '03/05/21', '04/05/21', '05/05/21', '06/05/21', '07/05/21', '08/05/21', '09/05/21', '10/05/21', '11/05/21', '12/05/21', '13/05/21', '14/05/21', '15/05/21', '16/05/21', '17/05/21', '18/05/21', '19/05/21', '20/05/21', '21/05/21', '22/05/21', '23/05/21', '24/05/21', '25/05/21', '26/05/21', '27/05/21', '28/05/21', '31/05/21', '01/06/21', '02/06/21', '03/06/21', '04/06/21', '05/06/21', '06/06/21', '07/06/21', '08/06/21', '09/06/21', '10/06/21', '11/06/21', '12/06/21', '13/06/21', '14/06/21', '15/06/21', '16/06/21', '17/06/21', '18/06/21', '19/06/21', '20/06/21', '21/06/21', '22/06/21', '23/06/21', '24/06/21', '25/06/21', '26/06/21', '27/06/21', '28/06/21', '29/06/21', '30/06/21', '01/07/21', '02/07/21', '03/07/21', '04/07/21', '05/07/21', '06/07/21', '07/07/21', '08/07/21', '09/07/21', '10/07/21', '11/07/21', '12/07/21', '13/07/21', '14/07/21', '15/07/21','16/07/21', '17/07/21', '18/07/21', '19/07/21', '20/07/21', '21/07/21', '22/07/21', '23/07/21', '24/07/21', '25/07/21', '26/07/21', '27/07/21', '28/07/21', '29/07/21', '30/07/21', '31/07/21', '01/08/21', '02/08/21', '03/08/21', '04/08/21', '05/08/21', '06/08/21', '07/08/21', '10/08/21', '11/08/21', '12/08/21', '13/08/21', '14/08/21', '17/08/21', '18/08/21', '19/08/21', '20/08/21', '21/08/21', '24/08/21', '25/08/21', '26/08/21', '27/08/21', '28/08/21', '31/08/21', '01/09/21', '02/09/21', '03/09/21', '04/09/21', '07/09/21', '08/09/21', '09/09/21', '10/09/21', '11/09/21', '14/09/21', '15/09/21', '16/09/21', '17/09/21', '18/09/21', '21/09/21', '22/09/21', '23/09/21', '24/09/21', '25/09/21', '28/09/21', '29/09/21', '30/09/21', '01/10/21', '02/10/21', '05/10/21', '06/10/21', '07/10/21', '08/10/21', '09/10/21', '13/10/21', '14/10/21', '15/10/21', '16/10/21', '19/10/21', '20/10/21', '21/10/21', '22/10/21', '23/10/21', '26/10/21', '27/10/21', '28/10/21', '29/10/21', '30/10/21', '03/11/21', '04/11/21', '05/11/21', '06/11/21', '09/11/21', '10/11/21', '11/11/21', '12/11/21', '13/11/21', '16/11/21', '17/11/21', '18/11/21', '19/11/21', '20/11/21', '23/11/21', '24/11/21', '25/11/21', '26/11/21', '27/11/21', '30/11/21', '01/12/21', '02/12/21', '03/12/21', '04/12/21', '07/12/21', '08/12/21', '09/12/21', '10/12/21', '11/12/21', '14/12/21', '15/12/21', '16/12/21', '17/12/21', '18/12/21', '21/12/21', '22/12/21', '23/12/21', '28/12/21', '29/12/21', '04/01/22', '05/01/22', '06/01/22', '07/01/22', '08/01/22', '11/01/22', '12/01/22', '13/01/22', '14/01/22', '15/01/22', '18/01/22', '19/01/22', '20/01/22', '21/01/22', '22/01/22', '25/01/22', '26/01/22', '27/01/22', '28/01/22', '29/01/22', '01/02/22', '02/02/22', '03/02/22', '04/02/22', '05/02/22', '08/02/22', '09/02/22', '10/02/22', '11/02/22', '12/02/22', '15/02/22', '16/02/22', '17/02/22', '18/02/22', '19/02/22', '22/02/22', '23/02/22', '24/02/22', '25/02/22', '26/02/22', '01/03/22', '02/03/22', '03/03/22', '04/03/22', '05/03/22', '08/03/22', '09/03/22', '10/03/22', '11/03/22', '12/03/22', '15/03/22', '16/03/22', '17/03/22', '18/03/22', '19/03/22', '22/03/22', '23/03/22', '24/03/22', '25/03/22', '26/03/22', '29/03/22', '30/03/22', '31/03/22', '01/04/22', '02/04/22', '03/04/22', '05/04/22', '06/04/22', '07/04/22', '08/04/22', '09/04/22', '12/04/22', '13/04/22', '14/04/22', '15/04/22', '16/04/22', '19/04/22', '20/04/22', '22/04/22', '26/04/22', '27/04/22'],
			datasets: [{
					data: [4, 4, 6, 6, 12, 12, 15, 15, 15, 14, 17, 14, 15, 14, 14, 10, 10, 12, 13, 14, 12, 11, 12, 10, 9, 9, 7, 9, 8, 7, 6, 7, 7, 7, 8, 8, 8, 7, 8, 8, 9, 9, 6, 6, 4, 10, 11, 12, 14, 15, 15, 16, 13, 13, 13, 13, 13, 13, 14, 18, 16, 11, 12, 14, 14, 14, 14, 9, 8, 8, 7, 11, 9, 12, 12, 14, 15, 16, 11, 10, 10, 11, 11, 11, 7, 6, 6, 10, 14, 15, 17, 13, 14, 15, 13, 16, 19, 19, 19, 15, 17, 18, 19, 22, 23, 22, 22, 23, 23, 25, 27, 28, 19, 18, 21, 22, 25, 33, 34, 29, 36, 40, 40, 41, 44, 45, 40, 45, 51, 55, 54, 61, 64, 51, 52, 50, 55, 53, 39, 42, 48, 60, 67, 63, 62, 65, 63, 62, 46, 46, 48, 51, 51, 54, 59, 57, 55, 21, 31, 22, 24, 24, 24, 28, 17, 20, 19, 21, 21, 20, 17, 19, 24, 22, 14, 13, 15, 17, 9, 12, 11, 12, 12, 14, 14, 14, 19, 23, 26, 28, 24, 24, 27, 28, 31, 21, 26, 28, 26, 23, 24, 20, 17, 19, 17, 18, 23, 31, 30, 24, 22, 30, 33, 24, 20, 20, 17, 14, 9, 6, 6, 10, 7, 11, 12, 10, 5, 5, 3, 5, 9, 17, 8, 5, 12, 15, 18, 25, 26, 27, 32, 32, 24, 32, 32, 21, 30, 31, 47, 36, 31, 39, 38, 42, 43, 36, 42, 49, 54, 48, 41, 40, 40, 46, 56, 52, 56, 46, 44, 36, 29, 15, 16, 22, 20, 21, 11, 28, 24, 33, 23, 19, 21, 22, 22, 19, 20, 33, 40, 35, 31, 28, 32, 32, 35, 29, 42, 42, 34, 31, 46, 53, 42, 31, 29, 23, 30, 29, 27, 34, 20, 20, 23, 26, 24, 30],
					label: "Suspeitos",
					borderColor: "#FFFF00",
					pointRadius: 0.5,
					pointBackgroundColor: "#FFFF00",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 4, 4, 4, 4, 4, 5, 5, 6, 6, 6, 6, 9, 9, 10, 10, 10, 10, 10, 10, 10, 13, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 24, 24, 24, 24, 27, 27, 29, 29, 29, 29, 29, 33, 35, 36, 36, 37, 37, 41, 42, 43, 46, 46, 46, 46, 46, 46, 47, 48, 50, 50, 50, 51, 53, 54, 55, 55, 55, 55, 57, 57, 59, 60, 65, 71, 71, 72, 72, 74, 75, 77, 78, 79, 82, 87, 89, 90, 91, 98, 107, 108, 109, 111, 120, 120, 123, 124, 129, 129, 134, 140, 144, 149, 150, 150, 150, 150, 151, 151, 153, 153, 153, 154, 156, 157, 157, 157, 158, 159, 162, 164, 164, 171, 172, 174, 178, 181, 184, 187, 192, 195, 198, 198, 200, 212, 213, 213, 215, 216, 217, 219, 219, 222, 230, 232, 236, 236, 240, 255, 259, 262, 264, 266, 266, 269, 270, 271, 273, 277, 278, 280, 283, 286, 287, 288, 290, 290, 291, 298, 301, 310, 311, 320, 328, 332, 343, 346, 350, 355, 355, 359, 360, 363, 369, 377, 387, 396, 404, 409, 414, 425, 430, 439, 444, 446, 449, 453, 459, 460, 462, 464, 464, 465, 470, 470, 471, 471, 471, 474, 475, 476, 478, 486, 491, 494, 505, 507, 517, 525, 533, 537, 543, 555, 573, 582, 591, 600, 613, 631, 639, 647, 652, 669, 693, 699, 711, 720, 726, 737, 746, 754, 765, 779, 793, 798, 804, 807, 822, 831, 835, 842, 858, 867],
					label: "Confirmados",
					borderColor: "#FF0000",
					pointRadius: 0.5,
					pointBackgroundColor: "#FF0000",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 8, 8, 9, 9, 10, 10, 11, 11, 11, 11, 11, 12, 12, 12, 12, 12, 12, 12, 12, 13, 13, 13, 13, 13, 13, 15, 15, 15, 15, 15],
					label: "Óbitos",
					borderColor: "#000000",
					pointRadius: 0.5,
					pointBackgroundColor: "#000000",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 3, 3, 3, 3, 3, 6, 7, 8, 8, 8, 8, 8, 8, 8, 11, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 17, 18, 18, 18, 18, 18, 18, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 23, 23, 24, 24, 24, 25, 25, 30, 32, 33, 33, 33, 33, 37, 37, 38, 39, 39, 39, 39, 39, 39, 40, 40, 46, 46, 46, 47, 48, 48, 48, 48, 48, 49, 50, 50, 52, 52, 56, 59, 62, 64, 64, 66, 66, 69, 71, 72, 75, 77, 79, 79, 79, 81, 82, 88, 89, 92, 92, 92, 95, 101, 106, 109, 125, 130, 135, 135, 137, 137, 143, 143, 143, 143, 143, 144, 145, 145, 145, 149, 150, 151, 152, 152, 156, 158, 158, 164, 165, 165, 168, 168, 168, 172, 180, 182, 182, 184, 190, 199, 200, 200, 203, 206, 208, 210, 211, 214, 214, 217, 221, 221, 224, 231, 234, 235, 239, 243, 248, 253, 256, 257, 263, 269, 270, 271, 274, 274, 276, 276, 276, 276, 280, 283, 287, 295, 297, 304, 305, 307, 314, 314, 326, 326, 330, 335, 335, 342, 346, 348, 349, 350, 354, 358, 358, 364, 364, 389, 391, 396, 399, 402, 413, 416, 417, 417, 417, 419, 433, 433, 433, 433, 435, 435, 436, 436, 436, 436, 439, 440, 444, 447, 456, 463, 467, 470, 476, 482, 497, 504, 510, 512, 515, 526, 533, 546, 554, 567, 588, 602, 618, 623, 633, 646, 655, 667, 674, 687, 699, 717, 724, 727, 742, 762, 771, 779, 798, 806],
					label: "Curados",
					borderColor: "#0000FF",
					pointRadius: 0.5,
					pointBackgroundColor: "#0000FF",
					fill: false
				},
				{
					data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 2, 2, 2, 3, 3, 1, 0, 0, 0, 0, 3, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 1, 2, 2, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 2, 2, 2, 2, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 3, 3, 3, 4, 3, 3, 2, 2, 3, 4, 3, 3, 2, 3, 1, 2, 2, 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2, 2, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 2, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 2, 2, 2, 2, 3, 3, 2, 1, 2, 1, 1, 2, 2, 1, 1, 2, 3, 1, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 0, 1, 1, 4, 5, 5, 4, 4, 4, 5, 2, 2, 4, 3, 2, 3, 3, 3, 3, 2, 2, 4, 2, 3, 4, 4, 4, 5, 5, 4, 3, 5, 4, 4, 5, 7, 5, 5, 3, 4, 5],
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