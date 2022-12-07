<?php

class Movie{
  public $name;
  public $director;
  public $genres;
  public $year;
  public $country;

  public function __construct($_name, $_director, $_genres, $_year, $_country)
  {
    $this->name = $_name;
    $this->director = $_director;
    $this->genres = $_genres;
    $this->year = $_year;
    $this->country = $_country;
  }


}