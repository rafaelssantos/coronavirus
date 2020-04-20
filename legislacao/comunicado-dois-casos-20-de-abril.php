<?php
include_once('../conf/conf.php');
?>


<?php
require_once(ROOT_DIR . '/classes/NewsManager.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>


<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Legislação ─ CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel='shortcut icon' href='img/logo.ico'>

	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/html.css'>
	<link rel='stylesheet' type='text/css' href='css/header.css'>
	<link rel='stylesheet' type='text/css' href='css/content.css'>
	<link rel='stylesheet' type='text/css' href='css/footer.css'>
	<link rel='stylesheet' type='text/css' href='css/news.css'>

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
</head>



<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-news").addClass("current-menu-item");
	</script>



	<div class='content'>
		<span class='date'>20 de abril de 2020</span>
		<h1>Comunicado ─ Dois casos de COVID-19 confirmados</h1>
		<span class='author'>O texto reproduzido tem caráter informativo e não substitui o <a href=""></a>publicado no diário oficial do município</span>

		<p><strong>A Secretaria Municipal de Saúde de Quatá</strong><p>
        <p>COMUNICA que recebeu hoje os resultados de 02 (dois) exames confirmatórios do COVID-19 de pessoas residentes no Município. Os pacientes estão em isolamento, acompanhados por atendimento médico. A Secretaria de Saúde reafirma que os munícipes devem reforçar as medidas de distanciamento social e higiene rigorosa das mãos, sendo recomendando a utilização de máscaras, ainda que caseiras, quando precisarem sair de suas residências.</p>

	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>