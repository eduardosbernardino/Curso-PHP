<?php

$nome = "Eduardo";

function teste() {

	global $nome;
	echo "$nome ";
	print "<pre>";
	print_r($_SERVER);
	print "</pre>";

}
function teste2() {

	$nome = "Joao";
	echo "$nome";

}

teste();
echo "<br>";
teste2();

?>