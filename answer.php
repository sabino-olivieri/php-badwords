
<?php
    $text = $_GET["text"];
    $taboo = $_GET["taboo"];
    $num_text = strlen($text);
    $censored_text = str_replace(" ".$taboo." ", " *** ", $text)
?>


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

        <h2>Il testo inviato con una lunghezza di <?php echo $num_text ?> caratteri è:</h2>
        <p><?php echo $text ?></p>

        <h2>Al testo abbiamo sostituito la parola "<?php echo $taboo ?>" con "***" e la sua nuova lunghezza è di <?php echo strlen($censored_text); ?> caratteri:</h2>
        <p><?php echo $censored_text ?></p>
    </div>
</body>

</html>

