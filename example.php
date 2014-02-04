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
