<?php
// Importo la Classe "Movie"
require_once __DIR__ . '/./Movie.php';

// // Creo prima Instanza della Classe 'Movie'
$film = new Movie('Minions');
$film->desc = 'I minion sono esistiti fin dall\'alba dei tempi ed hanno un solo scopo: servire il padrone "più cattivissimo" al mondo.';
$film->genres = ['Animazione', 'Commedia'];
$film->time_min = 170;

// Creo seconda Instanza della Classe 'Movie'
$film2 = new Movie('I Mercenari');
$film2->desc = 'I Mercenari un piccolo gruppo internazionale di esperti mercenari statunitensi, che vivono nell\'ombra e agiscono laddove nemmeno gli agenti segreti si spingono.';
$film2->genres = ['Azione', 'Avventura'];
$film2->time_min = 185;

// var_dump($film, $film2);

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

  <div class="container text-center py-4">
    <h1>Movies</h1>
  </div>

  <div class="container">
    <div class="row gap-3">

      <!-- Card per il primo Film -->
      <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
          <h5 class="card-title fst-italic"> "<?php echo $film->title ?>" </h5>
          <p class="card-text"> <?php echo $film->desc ?></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <span class="fw-semibold">Genere: </span>
            <?php foreach ($film->genres as $genre) { ?>
              <span>
                <?php echo $genre ?>
              </span>

            <?php
            }
            ?>
          </li>

          <li class="list-group-item">
            <span class="fw-semibold">Durata: </span>
            <?php echo $film->getTimeHour() ?>
          </li>
        </ul>
      </div>

      <!-- Card per il Secondo Film -->
      <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
          <h5 class="card-title fst-italic"> "<?php echo $film2->title ?>" </h5>
          <p class="card-text"> <?php echo $film2->desc ?> </p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <span class="fw-semibold">Genere: </span>
            <?php foreach ($film2->genres as $genre) { ?>
              <span>
                <?php echo $genre ?>
              </span>

            <?php
            }
            ?>
          </li>

          <li class="list-group-item">
            <span class="fw-semibold">Durata: </span>
            <?php echo $film2->getTimeHour() ?>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>