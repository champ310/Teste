<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">

	<title>Result </title>

</head>

<body>



	<?php
	

	//estas variaveis vão armazenar o valor das perguntas de 1 a 10
	$quest01 = $_POST['quest01'];
	$quest02 = $_POST['quest02'];
	$quest03 = $_POST['quest03'];
	//$quest04 = $_POST['quest04'];
	//$quest05 = $_POST['quest05'];
	//$quest06 = $_POST['quest06'];
	//$quest07 = $_POST['quest07'];
	//$quest08 = $_POST['quest08'];
	//$quest09 = $_POST['quest09'];
	//$quest10 = $_POST['quest10'];
	//$quest11 = $_POST['quest11'];
	//$quest12 = $_POST['quest12'];
	//$quest13 = $_POST['quest13'];
	//$quest14 = $_POST['quest14'];
	//$quest15 = $_POST['quest15'];

	$points = $quest01 + $quest02 + $quest03/*+ $quest04 + $quest05 + $quest06 + $quest07 + $quest08 + $quest09 + $quest10 + $quest11 + $quest12 + $quest13 + $quest14 + $quest15*/;


	//echo "<br>";

	echo "<h2> Result : $points </h2> ";


?>

	



</body>
</html>





