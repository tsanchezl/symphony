<!DOCTYPE html>
<html>
<body>
<h1> Test page PHP </h1>
<?php 

//VAR definitions"
$x = hello;
$y = world;
//$cars = array("seat","bmw","mercedes");
function proba() {
	global $x,$y;
	print ("prova de print $x + $y");
	$x++;
}
proba();
echo "<br>";
proba();
echo "<br>";
proba();
echo "<br>";
proba();

function list_cars() {
	$cars = array("seat","bmw","mercedes");
	echo "<br>";
	var_dump($cars);
}

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

echo "$bibi->model";


 ?>
<h1> End Test page </h1>

</body>
</html>
