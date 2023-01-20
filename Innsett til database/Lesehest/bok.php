<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bok submit</title>
  </head>
  <body>
    <?php
    $tjener ="localhost";
    $brukernavn ="root";
    $passord ="";
    $database ="lesehesten";

    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    if ($kobling->connect_error){
      die("noe gikk galt" . $kobling->connect_error);
    } else {
      echo "kobling virker<br>";
    }

    $kobling ->set_charset("utf8");

    if (isset($_POST["leggtil"])) {

      $tittel = $_POST["tittel"];
      $forfatter = $_POST["forfatter"];
      $forlag = $_POST["forlag"];
      $år_ut = $_POST["år_ut"];

      $sql = "INSERT INTO medlem (tittel, forfatter, forlag, år_ut) VALUES('$tittel', '$forfatter', '$forlag', '$år_ut') ";

      if ($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført";
      } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
      }
    }
    ?>
    <form method="POST">
      <p>Tittel
        <input type="text" name="tittel"> </p>

        <p>Forfatter
          <input type="text" name="forfatter"> </p>

          <p>Forlag
            <input type="text" name="forlag"> </p>

          <p>år_ut
            <input type="text" name="år_ut"> </p>
      </form>


    <input type="submit" name="leggtil" value="Legg til">
    <a href="index.php">tilbake</a>
  </body>
</html>
