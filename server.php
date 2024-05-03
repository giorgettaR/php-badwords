
<?php

// var_dump($_POST);
$bad_word = $_POST['word'];

$original = $_POST['text'];
$original_length = strlen($original);

$censured = str_replace($bad_word, '***', $original, $bad_words_count);
$censured_length = strlen($censured);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENSURATO</title>
</head>

<body>
    <h2>Testo originale</h2>
    <p><?php echo $original; ?></p>

    <h2>Lunghezza del testo</h2>
    <p><?php echo $original_length; ?></p>

    <h2>Testo censurato</h2>
    <p><?php echo $censured; ?></p>

    <h2>Lunghezza testo censurato</h2>
    <p><?php echo $censured_length; ?></p>

    <h2>Numero di brutte parole</h2>
    <p><?php echo $bad_words_count; ?></p>

</body>
</html>
