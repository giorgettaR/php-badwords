<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CENSURA</title>
</head>


<body>
    <main>
        <form action="./server.php" method="POST">
            <p>
                <label for="essay"><h3>Testo da censurare</h3></label>
                <textarea name="text" id="essay" placeholder="Scrivi il testo da censurare..."></textarea>
            </p>
            <p>
                <label for="word"><h3>Parola da eliminare</h3></label>
                <input type="text" name="word" id="word" placeholder="">
            </p>
            <button>Invia</button>
        </form>
    </main>
</body>
</html>
