<?php
	

	//esta variavel vai armazenar o valor da pergunta 1 
	$quest01 = $_GET['quest01'];

	//esta variavel vai armazenar o valor da pergunta 2
	$quest02 = $_GET['quest02'];

	//esta variavel vai armazenar o valor da pergunta 3
	$quest03 = $_GET['quest03'];


	//este switch vai verificar qual foi a opção selecionada da primeira pregunta do outro script e cada case vai ter um valor equivalente a cada pergunta que foi defenido no atributo value do input da opção
	switch ($quest01) {
		case 1:
			echo $quest01;
			break;

		case 2:
			echo $quest01;
			break;

		case 3:
			echo $quest01;
			break;

		case 4:
			echo $quest01;
			break;
		
	}


	echo "<br>";

	//este switch vai verificar qual foi a opção selecionada da segunda pregunta do outro script e cada case vai ter um valor equivalente a cada pergunta que foi defenido no atributo value do input da opção
	switch ($quest02) {
		case 1:
			echo $quest02;
			break;

		case 2:
			echo $quest02;
			break;

		case 3:
			echo $quest02;
			break;

		case 4:
			echo $quest02;
			break;
		
	}

	echo "<br>";

	switch ($quest03) {
		case 1:
			echo $quest03;
			break;

		case 2:
			echo $quest03;
			break;

		case 3:
			echo $quest03;
			break;

		case 4:
			echo $quest03;
			break;
		
	}

	echo "<br>";



	//esta variavel vai calcular os pontos que se obteve em cada pergunta
	$resultado = $quest01 + $quest02 + $quest03;

	//vai printar os pontos que se obteve 
	echo "o resultado do teu teste é $resultado";






?>

