<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
        $sender_email = $_POST["sender"];
        $adressee_email = $_POST["adressee"];
        $object = $_POST["object"];
        $message = $_POST["message"];
        echo "<h1>Mail creata</h1>";
        echo "<div class='bg-primary text-white'><h3>Informazioni</h3><p>Mittente: $sender_email</p> <p>Destinatario: $adressee_email</p> <p>Oggetto: $object</p> <p>Messaggio: $message</p></div><br>";
        echo "<div class='bg-warning w-50'><h3>Corpo della mail</h3><p>Messaggio: $message</p></div><br><hr>";
        echo "<div class='bg-secondary text-white'><h3>Statistiche della mail</h3><p>" . strlen($message) . "</p><p>" . str_word_count($message) . "</p></div><br>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>