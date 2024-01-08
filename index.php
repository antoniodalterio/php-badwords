<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
  <!-- Googlw Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@400;700&display=swap" rel="stylesheet">
  <!-- Googlw Fonts -->

  <!-- MY css -->
  <link rel="stylesheet" href="style.css">
  <!-- MY css -->

</head>
<body>

  <form action="pag2.php" method="get" class='glass'>
    <div class='input-area'>
      <label for="name">Scrivi una frase</label>
      <textarea name="name" id="name" cols="30" rows="10"></textarea>
    </div>
   
    <div class='input-area'> 
      <label for="word">Inserisci parola da censurare</label>
      <input type="text" name='word' id='word'>
    </div>
   
    <button>invia</button>
  </form>
</body>
</html>