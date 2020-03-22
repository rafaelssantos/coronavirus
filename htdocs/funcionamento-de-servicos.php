<?php include_once ('../../conf/conf.php'); ?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>O Projeto ─ GNSS-NavAer</title>
	
	<base href=<?php echo BASE_URL_DIR; ?>>
	
	<link rel="shortcut icon" href="img/logo.ico">
	<link rel="alternate" hreflang="en" href="en/project.php">


	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/html.css">
	<link rel="stylesheet" type="text/css" href="css/language.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/project.css">

	<!-- Google Analytics  -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153764787-1"></script>
	<script src="javascript/google/gtag-config.js"></script>


	<script src="javascript/lib/jquery-3.4.1.min.js"></script>
</head>





<body>
	<?php include (HTDOCS_DIR. '/html/pt/language.php'); ?>
	<?php include (HTDOCS_DIR. '/html/pt/header.php'); ?>

	<script>
		$("#mn-project").addClass("current-menu-item");
	</script>


	<div class='content'>
		<h1>
			O Projeto
		</h1>
		
		<span>
			<p>INCT é a sigla para Instituto Nacional de Ciência e Tecnologia. É um dos maiores programas de Ciência e Tecnologia no Brasil e objetiva desenvolver Ciência e Tecnologia do mais alto nível, na chamada fronteira do conhecimento.</p>

			<p>O INCT <strong>Tecnologia <abbr title='Global Navigation Satellite System'>GNSS</abbr> no suporte à navegação aérea</strong> foi aprovado na chamada INCT 16/2014. Trata-se de um projeto de seis anos, que teve início em janeiro de 2017. Ele passou a ser designado como <strong><abbr title='Global Navigation Satellite System'>GNSS</abbr>-NavAer</strong>. Dentre os 14 temas de pesquisa apresentados quando da chamada, ele se insere no tema "Controle e Gerenciamento de Tráfego Aéreo". </p>

			<p>Diferentes instituições participam deste projeto: a <abbr title='Universidade Estadual Paulista'>Unesp Campus de Presidente Prudente</abbr> que o coordena, o <abbr title='Instituto Nacional de Pesquisas Espaciais'>INPE</abbr>, o <abbr title='Instituto Tecnológico de Aeronáutica'>ITA</abbr>, o <abbr title='Instituto de Aeronáutica e Espaço'>IAE</abbr>, a <abbr title='Pontifícia Universidade Católica do Rio de Janeiro'>PUC-Rio</abbr>, a <abbr title='Universidade Federal do Rio Grande do Sul'>UFRGS</abbr> e o <abbr title='Instituto Federal de São Paulo'>IFSP</abbr> Campus Presidente Epitácio. Outras instituições ainda colaboram com o nosso INCT, tais como <abbr title='Universidade Federal do Paraná'>UFPR</abbr>, <abbr title='Universidade Tecnológica Federal do Paraná'>UTFPR</abbr> além das instituições que se prontificaram a colaborar na forma de permitir a instalações de equipamentos para o projeto, que são várias e se espalham por todo o pais. Esse projeto recebe financiamento do <abbr title='Conselho Nacional de Desenvolvimento Científico e Tecnológico'>CNPq</abbr>, <abbr title='Coordenação de Aperfeiçoamento de Pessoal de Nível Superior'>CAPES</abbr> e <abbr title='Fundação de Amparo à Pesquisa do Estado de São Paulo'>FAPESP</abbr>.</p>
		</span>
		
		<figure >
			<div class='iframe-wrapper'>
				<iframe width='560' height='315' src='https://www.youtube.com/embed/rRiLc_HsUNM' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
			</div>
			<figcaption id='project-fig-caption-galera'><strong>Figura 1:</strong> Palestra "Os múltiplos usos do GNSS e o INCT NavAer" apresentada no Programa de Pós-Graduação Engenharia de Transportes EESC-USP.</figcaption>
		</figure>

		<h2 class='section-title'>
			Visão Geral
		</h2>

		<span>
			<p>A aviação aérea em todo o mundo passa atualmente por uma mudança de paradigma quando o assunto envolve as tecnologias empregadas. As tecnologias ditas "tradicionais" foram largamente utilizadas por muitos anos. Contudo, com a evolução natural e aumento da população, há uma crescente demanda pelo uso do espaço aéreo. Essas novas tecnologias devem proporcionar um uso mais econômico e otimizado do espaço aéreo, reduzindo o tempo de voo, o consumo de combustível, a separação entre as aeronaves, com melhorias no desempenho e na segurança das operações, alcançando o esperado desenvolvimento sustentável.</p>

			<p>Como exemplo dessas novas tecnologias cita-se a navegação por satélites, tais como o GPS (Global Positioning System) e outros sistemas que constituem o GNSS (Global Navigation Satellite System), em vez de auxílios de rádio instalados em solo. E há uma demanda cada vez maior por um gerenciamento do tráfego aéreo realizado de maneira eficiente.</p> 

			<p>O uso de sistemas de navegação por satélite GNSS constitui uma forte tendência para a navegação aérea, em especial para a realização de pousos de precisão de uma aeronave em condições visuais degradadas. A navegação a partir de GNSS dispensa toda ou boa parte da infraestrutura de solo, apresenta custoso menores e proporciona maior flexibilidade nos procedimentos de pouso, com aumento da acessibilidade ao aeródromo por meio de operações mais eficientes.</p> 

			<p>No Brasil e no mundo, a navegação GNSS é empregada para navegação em rota e procedimentos de pouso de categoria não-precisa a fim de atingir os requisitos do conceito de navegação baseada em desempenho (Performance-Based Navigation: PBN).</p> 

			<p>Em nível mundial, na navegação aérea, em se tratando dos procedimentos de precisão, atualmente as duas tecnologias disponíveis para tal são: o Sistema de Solo para Melhoria de Desempenho (Ground-Based Augmentation System: GBAS) e o Sistema via satélite para Melhoria de Desempenho (Satellite-Based Augmentation System: SBAS). No Brasil, o Departamento de Controle do Espaço Aéreo (DECEA), no seu papel de Provedor de Serviço de Navegação Aérea, estuda há mais de 15 anos a viabilidade de implantação de tecnologias baseadas em GNSS para procedimentos de navegação aérea de precisão (Categoria I). Contudo, até o momento nenhum sistema SBAS ou GBAS se encontra operacional. Isso se deve a forte interferência imposta pela camada ionosférica sobre os sinais GNSS.</p>

			<p>Nesse INCT objetiva-se um entendimento profundo sobre as ações da ionosfera sobre o sinal GNSS para fins de avaliação a sua aplicação segura na navegação aérea.</p>
		</span>
		
	</div>


	<?php include (HTDOCS_DIR. '/html/pt/footer.php'); ?>

	
	<script>
		$(".language-btn").attr("href", "en/project.php");
	</script>
</body>
</html>
