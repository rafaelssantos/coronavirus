<?php 
	/**
	 * Altere e BASE_URL_DIR para no url da página.
	 * Caso url não tenha subdomínio, como por exemplo: "www.meusite.com.br/", defina  BASE_URL_DIR para "/".
	 * Caso url tenha subdomínio, como por exemplo: "www.instituicao.com.br/abcd", defina BASE_URL_DIR para "/abcd/".
	 * Obs: Inclua as barras.
	 */

	define ("BASE_URL_DIR", "/coronavirus/"); 			//Alterar aqui. Url com subdomínio.
	// define ("BASE_URL_DIR", "/"); 				//Alterar aqui. Url sem subdomínio.



	define("HTDOCS_DIR", __DIR__ ."/../");	//Não alterar. Alterar apenas em caso de não funcionamento
	define("ROOT_DIR", __DIR__ ."/../");				//Não alterar. Alterar apenas em caso de não funcionamentofuncionamento
?>
