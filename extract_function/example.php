<?php
/**
 * Extract Function
 */
namespace Refactoring;
require_once('../bootstrap.inc.php');
call_user_func(function(){
	$scadenze['cliente']='ACME Corporation';
	$scadenze['fatture'][]=['numero'=>369,'data'=>'2022-01-03',"importo"=>18270.36];
	$scadenze['fatture'][]=["numero"=>387,'data'=>'2022-01-24',"importo"=>9459.45];
	stampaScadenze($scadenze);
});

/**
 * Esempio
 */

function stampaScadenze($scadenze){
	$totale=0;
	echo '<h1>Scadenze</h1>'.PHP_EOL;
	echo '<p>Cliente: '.$scadenze['cliente'].'</p>'.PHP_EOL;
	echo '<hr>'.PHP_EOL;
	echo '<h2>Fatture</h2>'.PHP_EOL;
	foreach($scadenze['fatture'] as $fattura){
		$totale+=$fattura['importo'];
		$scadenza=date('d/m/Y',strtotime('+30 days',strtotime($fattura['data'])));
		echo '<p>Numero: '.$fattura['numero'].'</p>';
		echo '<p>Data: '.date('d/m/Y',strtotime($fattura['data'])).'</p>';
		echo '<p>Importo: '.number_format($fattura['importo'],2,',','.').'</p>'.PHP_EOL;
		echo '<p>Scadenza: '.$scadenza.'</p>'.PHP_EOL;
		echo '<hr>'.PHP_EOL;
	}
	echo '<h2>Totale</h2>'.PHP_EOL;
	echo '<p>Importo: '.number_format($totale,2,',','.').'</p>'.PHP_EOL;
}
