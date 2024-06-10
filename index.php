<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <div class="form_container">
        <form action="form1.php" method="GET">

            <label for="nome">Inserisci un testo molto lungo</label><br>
            <input type="text" placeholder="Text here..." name="testo"><br><br>

            <label for="nome">Inserisci una parola da censurare nel testo</label><br>
            <input type="text" placeholder="Word here..." name="censoredText"><br><br>

            <button type="submit">Invia</button>

        </form>
    </div>
    
</body>
</html>