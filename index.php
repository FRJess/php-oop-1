<?php

include './Models/Movie.php';
include './Models/Genre.php';
include 'movies.php';

//var_dump($moviesList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

  <!-- AXIOS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- VUE -->
  <script src="https://unpkg.com/vue@3"></script>

  <title>Movies list</title>
</head>

<body>
  <div id="app">

    <!-- Inizio Header -->
    <header class="bg-dark">
      <div class="container d-flex align-items-center justify-content-center py-2">
        <div div class="row text-white">
          <div class="col">
            <h1>My favorites movies</h1>
          </div>
        </div>
      </div>
    </header>
    <!-- Fine Header -->

    <div class="jt-container">
      <div class="container py-5 ">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
          <?php foreach ($moviesList as $movie) : ?>
            <div class="col-5 card h-100 m-3 text-center pt-2">
              <img src="<?php echo $movie->poster?>" class="card-img-top" alt="">
                <h3 class="py-3"><?php echo $movie->name ?></h3>
                <p> <strong>Director: </strong> <?php echo $movie->director ?></p>
                <p><strong>Genre: </strong> <?php echo $movie->genres ?></p>
                <p><strong>Release year: </strong> <?php echo $movie->year ?></p>
                <p><strong>Country of origin: </strong> <?php echo $movie->country ?></p>
            </div>
          <?php endforeach; ?>
          </div>
      </div>
    </div>

  </div>

  <!-- JS -->
  <script src="js/script.js"></script>
</body>

</html>






<!-- // Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
//  - è definita una classe ‘Movie’
//    => all’interno della classe sono dichiarate delle variabili d’istanza
//    => all’interno della classe è definito un costruttore
//    => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.
// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
// - creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
// - mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
// - organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->
