<?php
$moviesString = file_get_contents('db.json');
$movies = json_decode($moviesString, true);

header('Content-Type: application/json');
