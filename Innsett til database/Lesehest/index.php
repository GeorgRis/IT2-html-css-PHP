<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lesehesten</title>
    <link rel="stylesheet" href="style.css">
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
    ?>
    <h1>Velg hva du skal legge til</h1>
      <div class="knapp">
          <div class="insubmit">
            <a href="medlem.php">medlem</a>
            <a href="bok.php">bok</a>
          </div>
      </div>
    </form>
  </body>
</html>
