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
		<span class='date'>17 de março de 2020</span>
		<h1>Comunicado ─ Isolamento Domiciliar</h1>
		<span class='author'>O texto reproduzido tem caráter informativo e não substitui o <a href=""></a>publicado no diário oficial do município</span>

		<p>Considerando a confirmação ocorrida no dia de hoje da positividade do exame para o Coronavírus (COVID-19) do Deputado Federal do PSD – Cezinha de Madureira, o qual esteve na sexta-feira, dia 13 de Março de 2020 em visita à cidade de Quatá – SP e Região, baseado no protocolo do Ministério da Saúde, <strong>COMUNICAMOS</strong> para todas as pessoas que tiveram <strong>CONTATO DIRETO</strong> com o referido Deputado que fiquem em <strong>ISOLAMENTO DOMICILIAR</strong> por 14 dias a contar do contato, o que significa que devem permanecer desde já em suas residências até o dia 27/03/2020, evitando contato com outras pessoas neste período; intensificando as medidas de higiene, especialmente a lavagem das mãos; e proteção ao tossir e espirrar. Se por ventura dentro desse período de 14 dias apresentarem sintomas respiratórios e febre, deverão procurar a Central de Atendimento ao Coronavírus, montada na Unidade Ambulatorial de Quatá (Santa Casa) especificamente para atender os pacientes que apresentarem sintomas da doença. Dúvidas entrem em contato com os telefones: (18) 99660-3080 e (18) 99613-8840.</p>

	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>