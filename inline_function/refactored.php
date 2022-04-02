<?php
/**
 * Inline Function
 */
namespace Refactoring;
require_once('../bootstrap.inc.php');
call_user_func(function(){
	$trasportatori[]=['nome'=>'Mario','consegne_in_ritardo'=>2];
	$trasportatori[]=['nome'=>'Luigi','consegne_in_ritardo'=>6];
	echo "<h1>Valutazione Trasportatori</h1>".PHP_EOL;
	foreach($trasportatori as $trasportatore){
		echo "<hr>".PHP_EOL;
		echo "Trasportatore: ".$trasportatore['nome'].'<br/>'.PHP_EOL;
		echo "Valutazione: ".valutaTrasportatore($trasportatore).'<br/>'.PHP_EOL;
	}
});

/**
 * Rifattorizzazione
 */

function valutaTrasportatore($trasportatore):int{
	return (($trasportatore['consegne_in_ritardo'] > 5) ? 1 : 2);
}
