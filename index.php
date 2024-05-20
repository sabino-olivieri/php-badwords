<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css/style.css">
</head>

<body>
    <div class="container">
        <form action="answer.php" method="get">
            <label for="text">Inserisci il testo:</label>
            <textarea name="text" id="" rows="4"></textarea>

            <label for="taboo">Inserisci la parola vietata:</label>
            <input type="text" name="taboo">

            <button type="submit">Invia</button>
        </form>
    </div>
</body>

</html>