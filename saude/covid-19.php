<?php
include_once('../conf/conf.php');
$contact_url = BASE_URL_DIR . "contato.php";
?>



<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Secretaria de Saude ─ COVID-19 ─ CGC da Prefeitura Municipal de Quatá-SP</title>

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
		<h1 id='how-to-prevent'>Como me previnir?</h1>
		<p>Certamente você já ouviu falar do coronavírus (COVID-19), um vírus que causa doença respiratória. Para evitar contágio e disseminação, é importante ter atenção a alguns cuidados simples, principalmente relacionados à higiene. Confira as principais práticas de prevenção, de acordo com orientação do Ministério da Saúde e da Secretaria Estadual da Saúde do Estado de São Paulo:</p>

		<div class='health-step-container'>
			<p>Lave frequentemente as mãos com água e sabão por cerca de 20 segundos (lavando entre dedos, atrás das mãos e até cotovelos) e higienize com álcool gel a 70%.</p>
			<img src="img/wash-hands.png" alt="">
		</div>

		<div class='health-step-container'>
			<p>Após lavar as mãos, não toque diretamente nas maçanetas. Abra as portas com o cotovelo ou utilize toalhas de papel.</p>
			<img src="img/door-handle.svg" alt="">
		</div>

		<div class='health-step-container'>
			<p>Ao tossir e espirrar, cubra a boca e o nariz com braços ou lenços descartáveis. Se usar as mãos, lembre-se de lavá-las bem com água e sabão.</p>
			<img src="img/sneeze.svg" alt="">
		</div>

		<div class='health-step-container'>
			<p>Não compartilhe toalhas, copos, talheres e outros utensílios pessoais.</p>
			<img src="img/cutlery.svg" alt="">
		</div>

		<div class='health-step-container'>
			<p>Evite contato pŕoximo com pessoas com febre ou tosse.</p>
			<img src="img/thermometer.svg" alt="">
		</div>

		<div class='health-step-container'>
			<p>Não entre em pânico. Mantenha-se atento às novas informações de especialista e órgãos oficiais. Guia</p>
			<ul>
				<li><a href="https://www.saopaulo.sp.gov.br/coronavirus/">Guia de Prevenção do Governo do Estado de São Paulo</a></li>
				<li><a href="https://coronavirus.saude.gov.br/">Guia de Prevenção do Ministério da Saúde (Governo Federal)</a></li>
			</ul>
		</div>

		<h1>O que fazer se sentir algum sintoma?</h1>
		<p>Quatá conta com central de atendimento ao COVID-19. Secretaria de Saúde de montou uma Central de Atendimento ao Coronavírus. A Central atende pacientes com sintomas do COVID-19 e esclarece dúvidas.</p>

		<div class='health-call-center-container' id='health-call-center-container'>
			<h2>Central Única de Atendimento ao COVID-19</h2>
			<ul>
				<li><strong>Local:</strong> Rua Maria Pérez Jorge, s/nº. Entrada pelo portão lateral da Unidade Ambulatorial ─ Santa Casa.</li>
				<li><strong>Funcionamento:</strong> 8h às 20h, todos os dias.</li>
				<li><strong>Telefone:</strong> (18) 99799-0070.</li>
			</ul>
			<p>Evite aglomerações!</p>
			<p>Dúvidas também são esclarecidas por telefone.</p>
		</div>

		<?php include(HTDOCS_DIR . '/html/call-center-health.php'); ?>

	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>