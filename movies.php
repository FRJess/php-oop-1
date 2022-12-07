<?php
//$moviesString = file_get_contents('db.json');
$moviesString = file_get_contents('./data/db.json');
$movies = json_decode($moviesString);
$moviesList = [];

foreach ($movies as $movie) {
  $moviesList[$movie->name] = new Movie($movie->name, $movie->director, $movie->genre, $movie->year, $movie->country);
}