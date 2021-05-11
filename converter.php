<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    Your numeral is <?php echo $_POST['numeral']; ?>
    <br>
    <?php
    $numeral = $_POST['numeral'];
    if (strlen($numeral) > 2) {
      echo "Cor that's complicated m8";
    } else {
      echo "now this we may be able to handle";
    }
    ?>
  </body>
</html>
