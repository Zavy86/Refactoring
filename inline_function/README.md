# Inline Function

> Inversa di: [Extract Function](/extract_function/)

A volte capita di avere delle chiamate a funzioni veramente brevi, se il codice chiamato non è così complicato ed è
abbastanza parlante già di suo, si può pensare di riportarlo "inline" nel codice.

## Metodo

* Verificare che la funzione non sia un metodo polimorfico di una classe
* Trovare tutti i chiamanti della funzione presenti nel progetto
* Sostituire ciascun chiamante con il codice della funzione
* Eliminare la funzione
