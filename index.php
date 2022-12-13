<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Una parola da censurare viene passata dall'utente tramite un form con metodo GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    -->

    <?php
		$text = 'Il censura territorio CENSURA di Jesolo si estende censura lungo la costa veneziana, su un territorio pianeggiante affacciato censura sul mare Adriatico e orlato dalla laguna di Jesolo censura (22 km²), dai fiumi Sile e Piave, e alle foci di questo 
        dall\'antistante laguna del CENSURA Mort. La valle di Dragojesolo CENSURA è, insieme a quella di Grassabò, censura la più estesa della laguna Nord di Venezia. La fascia censura costiera è bassa e sabbiosa, costituita da un\'ininterrotta spiaggia lunga circa 12 censura chilometri e di ampiezza CENSURA variabile tra i 30 e i 100 metri. Aggiungo del testo per verificare il funzionamento di strlen!';      

        $badWord = $_GET['censor']; 
        $censuredWord = str_ireplace($badWord, "***", $text);

	?>

	<h1>Jesolo</h1>
    <div> <?php echo $text; ?> </div>
    <h3>Questo testo contiene <mark><?php echo strlen($text); ?></mark> caratteri</h3>

    <form method="GET" action="">
        <label for="censor">Seleziona la parola che vuoi censurare</label>
        <input type="text" name="censor" id="censor" placeholder="Inserire...">
        <button>Censura</button>
    </form>

	<h1>Jesolo censurata</h1>
    <div> <?php echo $censuredWord; ?> </div>

</body>
</html>