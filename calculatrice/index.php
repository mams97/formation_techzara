<?php

use App\Operation\Operation;

require_once "vendor/autoload.php";

$operateur = readline("choisit un operateur(1 pour +, 2 pour -, 3 pour * et 4 pour /): ");

$a = (int)readline("Entrez nobre 1: ");

$b = (int)readline("Entrez nobre 2: ");

$operation = new Operation();

if ($operateur == 1) 
{
	$operation->addition($a,$b);
}
elseif ($operateur == 2) 
{
	$operation->substraction($a,$b);
}
elseif ($operateur == 3)
{
	$operation->multiplication($a,$b);
}
else
{
	$operation->division($a,$b);
}

echo $operation->getResult();

