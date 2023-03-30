<?php
// Importo la Classe "Movie"
require_once __DIR__ . '/./Movie.php';

// // Creo prima Instanza della Classe 'Movie'
$film = new Movie('Minions');
$film->genre = 'Animazione';
$film->time_min = 170;

// Creo seconda Instanza della Classe 'Movie'
$film2 = new Movie('I Mercenari');
$film2->genre = 'Azione';
$film2->time_min = 185;

var_dump($film, $film2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <title>PHP OOP 1</title>
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>