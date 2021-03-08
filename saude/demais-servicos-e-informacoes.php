<?php
include_once('../conf/conf.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>



<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Secretaria de Saude ─ Serviços ─ CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/health.css">

	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="https://kit.fontawesome.com/fa170b8b16.js" crossorigin="anonymous"></script>
</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-health").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1>ATENDIMENTO E HORÁRIOS</h1>
		<p>Alguns serviços prestados pela Secretaria de Saúde tiveram seu funcionamento alterado.</p>

		<h2>Agendamento de Exames, Consultas e Transporte</h2>
			<ul>
				<li>Atendimento somente por telefone.</li>
				<li>Telefones:</li>
				<p>(18) 99146-9461</p>
         		<p>(18) 99650-5349</p>
         		<p>(18) 99695-7341</p>
         		<p>(18) 99659-2279</p>
			</ul>
		
		<h2>Central Única de Atendimento ao COVID-19</h2>
			<ul>
				<li><strong>Local:</strong> Rua Maria Pérez Jorge, s/nº. Entrada pelo portão lateral da Unidade Ambulatorial ─ Santa Casa.</li>
				<li><strong>Atendimento:</strong> diariamente das 8h às 20h.</li>
				<li><strong>Telefone:</strong> (18) 99799-0070.</li>
			</ul>
			<p>Evite aglomerações!</p>
			<p>Dúvidas também são esclarecidas por telefone.</p>
		

		<h2>Centro de Atenção Psicossocial (CAPS)</h2>
		<p>Atendimento de grupos suspensos.</p>
		<p>Horário de atendimento: das 7h às 17h</p>



		<h2>Centro de Saúde ─ Postão</h2>
		<ul>
			<li>Horário de atendimento: das 8h às 16h</li>
			<li>Atendimento normal</li>
			<li>Fonoaudiólogo e Nutricionista supensos.</li>
			<li>Odontologia com atendimento somente emergencial.</li>
		</ul>

		<h2>Laboratório Municipal</h2>
		<ul>
			<li>Somente urgência e COVID-19.</li>
		</ul>

		<h2>PSF I, PSF II, PSF III e PSF IV</h2>
		<ul>
			<li>Atendimentos comuns suspensos.</li>
			<li>Somente atendimentos emergenciais.</li>
		</ul>

		<h2>Unidade Ambulatorial</h2>
		<p>Horário de atendimento: 24h</p>
		<h5>Serviços em funcionamento:</h5>
		<ul>
			<li>Consultas eletivas</li>
			<li>Especialidades</li>
		</ul>
		
		<h2>*Fisioterapia</h2>
		<ul>
			<li>Atendimento normal.</li>
		</ul>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>