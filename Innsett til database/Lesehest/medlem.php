<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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

      $fornavn = $_POST["fornavn"];
      $etternavn = $_POST["etternavn"];
      $postnr = $_POST["poststed"];
      $epost = $_POST["epost"];

      $sql = "INSERT INTO medlem (fornavn, etternavn, poststed, epost) VALUES('$fornavn', '$etternavn', '$postnr', '$epost') ";

      if ($kobling->query($sql)) {
        echo "Spørringen $sql ble gjennomført";
      } else {
        echo "Noe gikk galt med spørringen $sql ($kobling->error).";
      }
    }
    ?>
    <form method="POST">
      <p>Fornavn
        <input type="text" name="fornavn"> </p>

        <p>Etternavn
          <input type="text" name="etternavn"> </p>

          <p>Postnr
            <input type="text" name="poststed"> </p>

            <p>Epost
              <input type="text" name="epost"> </p>
      </form>


    <input type="submit" name="leggtil" value="Legg til">
  </body>
</html>
