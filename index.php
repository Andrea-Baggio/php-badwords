<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite un form con metodo GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    -->

    <?php
		$text = 'Il censura territorio CENSURA di Jesolo si estende censura lungo la costa veneziana, su un territorio pianeggiante affacciato censura sul mare Adriatico e orlato dalla laguna di Jesolo censura (22 km²), dai fiumi Sile e Piave, e alle foci di questo 
        dall\'antistante laguna del CENSURA Mort. La valle di Dragojesolo CENSURA è, insieme a quella di Grassabò, censura la più estesa della laguna Nord di Venezia. La fascia censura costiera è bassa e sabbiosa, costituita da un\'ininterrotta spiaggia lunga circa 12 censura chilometri e di ampiezza CENSURA variabile tra i 30 e i 100 metri.';
	?>

	<h1>Jesolo</h1>
    <p> <?php echo $text; ?> </p>
</body>
</html>