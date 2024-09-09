<?php

header('Access-Control-Allow-Origin: ' . "*");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

$number = $_POST['phoneNumber'];
$sessionId = $_POST['sessionId'];
$text = $_POST['text'];
$code = $_POST['serviceCode'];



include("funcoes.php");
include("enviardinheiro.php");

$mode = "menu";


$level = 1;
$ussd_array = explode("*", $text);
if (count($ussd_array) == 0) {
	$level = 0;
} else {
	$level = count($ussd_array);
}

$level = $level + 1;

if (trim($text) == "")
	$level = 1;



switch ($ussd_array[0]) {
	case '0':
		$mode = "menu";
		break;
	case '':
		$mode = "menu";
		break;
	case '1':
		$mode = "enviar";
		break;
	case '2':
		$mode = "balance";
		break;
	case '3':
		$mode = "sendMoney";
		break;

	default:
		# code...
		break;
}

if ($level == 1) {
	displayMenu();
} else {
	if ($mode == "menu") {
		switch ($text) {
			case '0':
				displayMenu();
				break;
			case '1':
				enviardinheiro();
				break;
			case '2':
				checkBalance();
				break;
			case '3':
				checkNumber();
				break;
			case '4':
				sendMoney();
				break;

			default:
				displayError();
				break;
		}
	} else if ($mode == "enviar") {
		if((count($ussd_array)>2  and count($ussd_array)==3)  and $ussd_array[2]>5){
			inserirValor();
		}elseif((count($ussd_array)>3 and count($ussd_array)==4)){
			inserirPin($ussd_array[2],$ussd_array[3],"0,2%");
		}elseif((count($ussd_array)>4 and count($ussd_array)==5)){
			Enviou($ussd_array[2],$ussd_array[3],"0,2%");
		}else{
			switch ($text) {
				case '1':
					enviardinheiro();
					break;
				case '1*1':
					inserirTelefone();
					break;
				case '1*2':
					inserirIBAN();
					break;
				case '1*3':
					inserirBINIF();
					break;

				default:
					displayError();
					break;
			}
		}
	} else if ($mode == "balance") {
		checkBalance();
	} else if ($mode == "sendMoney") {
		switch ($text) {
			case '3':
				sendMoney();
				break;
			case '3*1':
				echo "END You choose \n MTN";
				break;
			case '3*2':
				echo "END You choose \n AIRTEL";
				break;
			case '3*3':
				echo "END You choose \n TIGO";
				break;

			default:
				displayError();
				break;
		}
	}
}
