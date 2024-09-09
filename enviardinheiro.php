<?php


function EnviarDinheiro()
{
	$text = "CON ENVIAR DINHEIRO \n";
	$text .= "1. Por Tetefone \n";
	$text .= "2. Por IBAN \n";
	$text .= "3. Por BI ou NIF \n";
	$text .= "0. Voltar \n";
	echo $text;
}
function inserirTelefone()
{
	$text = "CON \n \n Insira o telefone que vai receber a transferência \n";
	$text .= "1.  \n";
	echo $text;
}
function inserirIBAN()
{
	$text = "CON \n \n Insira o IBAN que vai receber a transferência \n";
	echo $text;
}
function inserirBINIF()
{
	$text = "CON \n \n Insira o BI ou o NIF que vai receber a transferência \n";
	echo $text;
}
function inserirValor()
{
	$text = "CON \n \n  Insira o valor a transferir \n";
	echo $text;
}
function inserirPIN($para, $valor, $taxa)
{
	$text = "CON Tranferir $valor para - $para.
                A taxa é de $taxa.\n \n INSIRA O SEU PIN PARA CONFIRMAR A TRANSFERÊNCIA";
	echo $text;
}
function enviou($para, $valor, $taxa)
{
	$text = "END \n \n  Enviou $valor  para - $para
               . \n 
                Com taxa de $taxa.  \n";
	echo $text;
}