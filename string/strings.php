<?php 

$nome = "Eduardo";
$sobrenome = 'de Souza Bernardino da Silva';

var_dump($nome, $sobrenome);

echo "<br>";
echo "Nome: $nome $sobrenome"; // imprime o conteudo da variavael

echo "<br>";
echo 'Nome: $nome $sobrenome'; // imprime o texto puro

echo "<br>";
echo strtoupper($nome);

echo "<br>";
echo strtolower($nome);

echo "<br>";
echo ucwords($nome);

echo "<br>";
echo ucfirst($nome); //usado em paragrafos

echo "<br>";
$nome = str_replace("o","a", $nome);
echo $nome;

echo "<br>";
$nomecompleto = "$nome $sobrenome";
echo "$nomecompleto";

echo "<br>";
$q = strpos($nomecompleto, "Bernardino");
var_dump($q); // retorna a posição da palavra

echo "<br>";
$antesnome = substr($nomecompleto, 0, $q);
var_dump ($antesnome);

echo "<br>";
$antesnome2 = substr($nomecompleto, strlen($nome), strlen($nomecompleto));
var_dump ($antesnome2);

?>