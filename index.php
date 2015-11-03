<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<h1> Test page PHP </h1>
<?php 

//VAR definitions"
$x = "hello my name is Thomas,";
$y = "Whats your name?";
define("WELLCOME","<h2>Missatge de benvinguda</h2><br>");
//$cars = array("seat","bmw","mercedes");



//FUNCTIONS
function newline() {
echo "<br>";
}

function list_cars() {
	$cars = array("seat","bmw","mercedes");
	var_dump($cars);
}

echo WELLCOME;

list_cars();
class cotxe {

	function cotxe (){

	$this->model="citroen";

	}
}

// creació d'un objecte tipus cotxe
$bibi = new cotxe();
// es mostra la propietat model de l'objecte cotxe
newline();
echo "$bibi->model";
// Indica el tamany del string
newline();
echo "la frase $x medeix:",strlen($x);
newline();
echo "la frase \"$y\" té:",str_word_count($y)," paraules";
newline();
echo "la frase \"$x\" al revés:",strrev($x);
newline();
$match=strpos("$x","Thomas");
echo $match;
newline();
echo str_replace("Thomas","Sanchez",$x);

 ?>

<h1> End Test page </h1>

</body>
</html>
