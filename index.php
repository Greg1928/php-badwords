<?php
$text = 'Godi, Fiorenza, poi che se sì grande
che per mare e per terra batti lali
e per lo nferno tuo nome si spande!

Tra li ladron trovai cinque cotali
tuoi cittadini onde mi ven vergogna,
e tu in grande orranza non ne sali.

Ma se presso al mattin del ver si sogna,
tu sentirai, di qua da picciol tempo,
di quel che Prato, non chaltri, tagogna.

E se già fosse, non saria per tempo.
Così fossei, da che pur esser dee!
ché più mi graverà, com più mattempo.

Noi ci partimmo, e su per le scalee
che navea fatto iborni a scender pria,
rimontò l duca mio e trasse mee;

Considerate la vostra semenza:
fatti non foste a viver come bruti,
ma per seguir virtute e canoscenza".';

$badword = $_GET['badword'];
$newText = str_replace($badword,"***",$text);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <h1><?php echo $text ?></h1>
    <p>Lunghezza testo non censurato: <?php echo strlen($text) ?> caratteri.</p>
    <hr>
    <h1><?php echo $newText ?></h1>
    <p>Lunghezza testo censurato: <?php echo strlen($newText) ?> caratteri.</p>
</body>
</html>