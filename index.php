<!DOCTYPE html>
<html>
<body>
<h1>K Test page PHP </h1>
<?php 

//VAR definitions"
$x = "hello my name is Thomas,";
$y = "Whats your name?";
//$cars = array("seat","bmw","mercedes");
function newline() {
/*	global $x,$y;
	print ("prova de print $x + $y");
	$x++;
*/

echo "<br>";
}

function list_cars() {
	$cars = array("seat","bmw","mercedes");
	var_dump($cars);
}
newline();
list_cars();
//echo $GLOBALS['x'] + "," + $GLOBALS['y']; 
//end script


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

 ?>
<h1> End Test page </h1>

</body>
</html>
