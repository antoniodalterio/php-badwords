<?php 
  #chiamata Get di 'name'
  $text= strtolower($_GET['name']);

  #chiamata Get di 'word'
  $bad_word= strtolower($_GET['word']);

  #sostituzine parola censurata
  $text_censored= str_replace($bad_word, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>

  <!-- Googlw Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@400;700&display=swap" rel="stylesheet">
  <!-- Googlw Fonts -->

  <!-- my css -->
  <link rel="stylesheet" href="style.css">
  <!-- my css -->

</head>
<body>
  <!-- div contenente la frase senza censura -->
  <div class='glass container'>
    <h2>Frase senza la parola censurata</h2>
    <p>
      <?php echo ucfirst($text); ?>
    </p>

    <p>
      la frase ha una lunghezza di, 
      <?php echo strlen($text); ?>,
      caratteri.
    </p>

  </div>

  <!-- div contenente la frase con censura -->
  <div class='glass container'>
    <h2>Frase con la parola censurata</h2>
    <p>
     <?php echo ucfirst($text_censored); ?>
    </p>

    <p>
      La frase ha una lunghezza di, 
      <?php echo strlen($text_censored); ?>,
      caratteri.
    </p>

  </div>

</body>
</html>
