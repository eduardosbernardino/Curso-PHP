<?php
	////////////////////////////////Basicos/////////////////////////

	$nome = "Eduardo";
	$site = "www.hcode.com.br";
	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;
	echo "<br>";
	
	///////////////////////////////Composto////////////////////////
	$arreio = array('nome'=>"teste", "$site", "$ano", "$salario", array(1,2,array('a','x'),4,5,6));
	print"<pre>";
	print_r($arreio);
	print"</pre>";
	echo "<br>";

	$nascimento = new DateTime();
	print"<pre>";
	print_r($nascimento);
	print"</pre>";

	echo "<br>";
	/////////////////////////////Especiais/////////////////////////
	$arquivo = fopen("var.php", "r");
	print_r($arquivo);
	$nulo = NULL;
	$vazio = "";
	echo "<br>";
	echo "$nulo - $vazio";

?>