# Extract Function

> Inversa di: [Inline Function](/inline_function/)

Una delle rifattorizzazioni più comuni, si estrae un pezzo di codice in una funziona più piccola con un nome specifico.

Non è da usare solo per evitare la duplicazione di codice usato in più parti del sistema, ma deve proprio essere visto
come un modo per isolare parti di codice in blocchi ben definiti identificati da un nome parlante.

## Metodo

* Creare una nuova funzione nominandola in base al suo intendo
* Spostare il codice dalla funzione principale verso la nuova funzione
* Se necessario inserire le variabili come parametri o come variabili locali
* Cercare eventuale codice simile e sostituirlo con una chiamata a questa nuova funzione
