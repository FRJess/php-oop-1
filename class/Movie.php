<?php

class Movie{
  public $name;
  public $director;
  public $genres;
  public $year;
  public $country;

  /**
   * @param String $name Movie's title in original language
   * @param String $director Movie's director(s)
   * @param String $genres Movie's genre
   * @param String $year Year of first release
   * @param String $country Country of origin
   */
  
  public function __construct($_name, $_director, $_genres, $_year, $_country)
  {
    $this->name = $_name;
    $this->director = $_director;
    $this->genres = $_genres;
    $this->year = $_year;
    $this->country = $_country;
  }


}