<?php
include_once('conf/conf.php');
?>


<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Funcionamento de serviços─CGC da Prefeitura Municipal de Quatá-SP</title>

	<base href=<?php echo BASE_URL_DIR; ?>>


	<link rel="shortcut icon" href="img/logo.ico">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/department.css">
	<link rel="stylesheet" type="text/css" href="css/call-center.css">



	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
	<script src="javascript/collapsible-button.js"></script>
	<script src="https://use.fontawesome.com/bd6ce15083.js"></script>

</head>




<body>
	<?php include(HTDOCS_DIR . '/html/header.php'); ?>

	<script>
		$("#mn-services").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1>REPARTIÇÕES PÚBLICAS MUNICIPAIS</h1>
		<p>Algumas repartições e serviços públicos municipais foram temporariamente suspensos ou tiveram seu horário de funcionamento alterado. Clique no nome de cada secretaria ou setor para obter mais informações e instruções a respeito do funcionamento.</p>


		<button type="button" class="collapBtn">Administração e Finanças</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Agricultura e Meio Ambiente</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>

		<button type="button" class="collapBtn">Cultura e Turismo</button>
		<div class="department-container">
			<p class='boss'><strong>Responsável: </strong>Gustavo Pilizari<br>Telefone: (18) 99789-3645</p>

			<h3>Centro Cultural (Fechado)</h3>
			<ul>
				<li>Biblioteca Memorial (Fechado)</li>
				<li>Aulas de Piano (Interrompido)</li>
			</ul>

			<h3>Anfiteatro (Fechado)</h3>
			<ul>
				<li>Aulas de Banda (Interrompido)</li>
				<li>Aulas de Xadrez (Interrompido)</li>
			</ul>

			<h3>Polo GURI (Fechado)</h3>
			<ul>
				<li>Aulas de Música (Interrompido)</li>
				<li>Aulas de Ballet (Interrompido)</li>
			</ul>
		</div>

		<button type="button" class="collapBtn">Educação</button>
		<div class="department-container">
			<p class='boss'>
				<strong>Responsável: </strong>Denise Maria Roncada Pollon
				<br>Telefone: (18) 99617-9029
				<br>E-mail: <a href="mailto:secretariaeducacao@quata.sp.gov.br">secretariaeducacao@quata.sp.gov.br</a>
				<br>(Atendimento Remoto)</p>
			<p>
				<strong>Orientadora Pedagógica:</strong> Maria Aparecida Maricato Botelho<br>
				Telefone:(18) 99158-2728
			</p>

			<p>
				<strong>Escriturária:</strong> Matilde de Carvalho Gonçalves Azevedo<br>
				Telefone: (18) 99754-7566
			</p>
			<p>
				<strong>Escriturária:</strong> Verônica da Silva Duarte Ramalho Ribeiro<br>
				Telefone: (18) 99622-5083
			</p>

			<p>
				*Todas as unidades e espaços físicos da Secretaria de Educação estão fechados.
			</p>

			<p>
				**Para maiores informações entrar em contato por telefone com um dos números informados.
			</p>
		</div>

		<button type="button" class="collapBtn">Esporte e Lazer</button>
		<div class="department-container">
			<p class='boss'><strong>Responsável: </strong>Roberto Sérgio Nogueira (Bé)<br>Telefone: (18) 99677-0019<br>E-mail: <a href="mailto:secretariaesporte@quata.sp.gov.br">secretariaesporte@quata.sp.gov.br</a><br>(Atendimento Remoto / Trabalho Interno / <em>Home Office</em>)</p>

			<h3>Complexo Esportivo Guido Pecchio (Fechado)</h3>
			<h3>Estádio Municipal Benedito Calma Pria (Fechado)</h3>
			<h3>Campo de Futebol José Fernandes de Lima (Fechado)</h3>
			<h3>Quadra de Esportes Zezinho da Jangada (Fechado)</h3>
			<h3>Quadra de Esportes Cláudio Ferreira "Puxita" (Asa Branca) (Fechado)</h3>
			<h3>Quadra de Esportes Jardim Por do Sol e Campo Sintético Irineu Campos "Lelo" (Fechado)</h3>
		</div>

		<button type="button" class="collapBtn">Infraestrutura, Urbanização e Serviços</button>
		<div class="department-container">
			<p>Em definição.</p>
		</div>


		<button type="button" class="collapBtn">Planejamento, Obras e Serviços</button>
		<div class="department-container">
			<p class='boss'>
				<strong>Responsável: </strong>Jamil Martins Askar Fonseca
				<br>Telefone: (18) 99782-5744
				<br>E-mail: <a href="mailto:secretariaplanejamento@quata.sp.gov.br">secretariaplanejamento@quata.sp.gov.br</a>
				<br>(Atendimento Remoto / Atendimento Físico / Trabalho Interno / <em>Home Office</em>)</p>

			<h3>Setor de Engenharia (Atendimento Remoto / <em>Home Office</em>)</h3>
			<p>
				Telefone: (18) 99732-1460 / E-mail: <a href="mailto:guilhermeengenheiro@quata.sp.gov.br">guilhermeengenheiro@quata.sp.gov.br</a><br>
				Telefone: (14) 99723-2500 / E-mail: <a href="mailto:marliarquiteta@quata.sp.gov.br">marliarquiteta@quata.sp.gov.br</a>
			</p>
			<h5>Esquema de funcionamentos do Setor de Engenharia:</h5>
			<ul>
				<li>As análises de documentos e projetos protocolados pelos Munícipes e Entidades, estarão sendo analisados de forma remota (<em>Home Office</em>) pelos nossos funcionários; Cadastro imobiliário, setor de engenharia e fiscalização.</li>
				<li>Os prazos contratuais com as empresas que estão atuando em obras no município (vigências, suspensivas, prestação de contas, execução de obras, entre outros) permanecem inalterados. As documentações referentes as medições os engenheiros estarão realizando em <em>Home Office</em>, duvidas entrar em contato com o contato com o engenheiro por e-mail ou via telefone.</li>
			</ul>

			<h3>Setor de Cadastro Imobiliário (Atendimento Remoto / <em>Home Office</em>)</h3>
			<p>
				Telefone: (18) 99779-4395 / E-mail: <a href="mailto:cadastroimobiliario@quata.sp.gov.br">cadastroimobiliario@quata.sp.gov.br</a>
			</p>

			<h3>Departamento de Trânsito (Atendimento Remoto)</h3>
			<p>
				<strong>Responsável: </strong>Devair Flores da Silva
				<br>Telefone: (18) 98179-8894
				<br>E-mail: <a href="mailto:transitomunicipal@quata.sp.gov.br">transitomunicipal@quata.sp.gov.br</a>
			</p>

			<h3>Departamento de Fiscalização (Atendimento Remoto)</h3>
			<p>
				<strong>Responsável: </strong>Fabiana Bernardino
				<br>Telefone: (18) 99673-4804
				<br>E-mail: <a href="mailto:fiscalizacao@quata.sp.gov.br">fiscalizacao@quata.sp.gov.br</a>
			</p>

			<p>
				*Contatos telefônicos (todos os setores) devem respeitar os horários de atendimento (9h às 11h e 13h às 17h), bem como os dias de funcionamentos (Segunda à Sexta-feira).
			</p>

			<p>
				**Em caso de dúvidas ou ainda para situações específicas, não relacionadas acima, solicitamos enviar e-mail ou ligar, pois assim poderemos prestar os devidos esclarecimentos.
			</p>
		</div>

		<button type="button" class="collapBtn">Promoção Social</button>
		<div class="department-container">
			<p><strong>Responsável: </strong>Rosana Fonseca<br>Telefone: (18) 99627-7198</p>

			<h3>Assistência Social (Aberto)</h3>
			<p>Horário de funcionamento: 8h às 11h</p>

			<h3>CRAS (Aberto)</h3>
			<p><strong>Responsável: </strong>Fernanda Maria<br>Telefone: (14) 99653-0180</p>
			<p>Horário de funcionamento: 13h às 16h</p>
		</div>



		<button type="button" class="collapBtn">Saúde</button>
		<div class="department-container">
			<p>Secretaria de Saúde conta com um espaço próprio.<br><a href="/saude/">Clique aqui para ser redirecionado!</a> </p>
		</div>

		<button type="button" class="collapBtn">Assessoria de Imprensa</button>
		<div class="department-container">
			<p class='boss'><strong>Responsável: </strong> Andréia Serrano<br>Telefone: (18) 99662-2304<br>Horário de atendimento: 8h às 11h e das 13h às 17h</p>
		</div>

		<?php include(HTDOCS_DIR . '/html/call-center.php'); ?>
	</div>

	<?php include(HTDOCS_DIR . '/html/footer.php'); ?>
</body>

</html>