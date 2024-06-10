<?php
$testo = $_GET["testo"];
$lunghezzatesto = strlen($testo);
$realeLunghezzaTesto = $lunghezzatesto - substr_count($testo, ' ');

$parolaCensurata= $_GET["censoredText"];

$censoredText = str_replace($parolaCensurata, "***", $testo);
$censoredTextLength = strlen($censoredText) - substr_count($censoredText, ' ');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form1Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="text_box">
            <h3>La lunghezza del testo ricevuto è di: <?php echo $realeLunghezzaTesto; ?> </h3><br>
            <h1>Il testo è: <br> <?php echo $testo; ?></h1>
        </div>
        <div class="text_box">
            <h3>La lunghezza del testo censurato è di: <?php echo $censoredTextLength; ?> </h3><br>
            <h1>Il testo censurato è: <br> <?php echo $censoredText; ?></h1>
        </div>
    </div>
    
</body>
</html>