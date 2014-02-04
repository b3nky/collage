-------------------------------------------------------------------------------
example.php
-------------------------------------------------------------------------------
<html>
<head>
<title>PHP - Primjer 40_1</title>
</head>
<body>
<? include('Stog.php');

$stog = new Stog;

$stog->dodaj("Jedan");
$stog->dodaj("Dva");
$stog->dodaj("Tri");
$stog->dodaj("Pet");
brojElemenata($stog->broj());
ispisiElemente($stog->elementi());
$elem = $stog->uzmi();
print "Uzet element: $elem <br>";
brojElemenata($stog->broj());
ispisiElemente($stog->elementi());

function brojElemenata($broj) {
	print "Ukupno elemenata: $broj<br>";
}

function ispisiElemente($lista) {
	foreach ($lista as $i) {
		print $i . "<br>";
	}
}
?>
</body>
</html>
-------------------------------------------------------------------------------
Stog.php
-------------------------------------------------------------------------------
<? include('Red.php');
 
class Stog extends Red
{
	function dodaj($noviElement) {
		array_unshift($this->elementi, $noviElement);
		$this->broj++;
	}
	
	function uzmi() {
		if($this->broj == 0) {
			return null;
		}
		$odlazi = array_pop($this->elementi);
		$this->broj--;
		return $odlazi;		
	}	
}
?>
-------------------------------------------------------------------------------
Red.php
------------------------------------------------------------------------------
<?
class Red
{
	public $broj = 0;
	public $elementi = array();
	
	function Red() {
		$this->broj = 0;
		$this->elementi = array();
	}
	
	function broj() {
		return $this->broj;		
	}

	function dodaj($noviElement) {
		$this->elementi[] = $noviElement;
		$this->broj++;
	}
	
	function uzmi() {
		if($this->broj == 0) {
			return null;
		}
		$odlazi = array_shift($this->elementi);
		$this->broj--;
		return $odlazi;		
	}	

	function elementi() {
		return $this->elementi;
	}	
}
?>



