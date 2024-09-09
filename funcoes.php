<?php

function displayMenu()
{
	$text = "CON MENU \n";
	$text .= "1. Enviar Dinheiro \n";
	$text .= "2. Comprar Recargas \n";
	$text .= "3. Pagar Televisão \n";
	$text .= "4. Carregar Carteira \n";
	$text .= "5. Levantar Dinheiro \n";
	$text .= "6. Minha Carteira \n";
	echo $text;
}
function createAccount()
{
	$text = "CON Creating Account\n";
	$text .= "1. Male \n";
	$text .= "2. Woman \n";
	$text .= "3. Not Now \n";
	echo $text;
}
function checkBalance()
{
	$text = "END Account Balance\n";
	$text .= "Your account Balance is 43,050Rwf \n";
	echo $text;
}
function displayError()
{
	$text = "END Error\n";
	$text .= "Uknown USSD command \n";
	echo $text;
}
function checkNumber()
{

	$text = "END Ckeck Number\n";
	$number = $_POST['phone'];
	$text .= "Your number is " . $number . " \n";
	echo $text;
}
function sendMoney()
{
	$text = "CON Send Money\n";
	$text .= "1. MTN \n";
	$text .= "2. TIGO \n";
	$text .= "3. AIRTEL \n";
	echo $text;
}
