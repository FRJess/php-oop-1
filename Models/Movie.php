<?php

include 'movies.php';

class Movie{
  public $name;
  public $director;
  public $genres;
  public $year;
  public $country;
  public $details;
  public $poster;

  /**
   * @param String $name Movie's title in original language
   * @param String $director Movie's director(s)
   * @param Array $genre Movie's genre
   * @param String $year Year of first release
   * @param String $country Country of origin
   */
  
  public function __construct($_name, $_director, $_genres, $_year, $_country, $_poster)
  {
    $this->name = $_name;
    $this->director = $_director;
    $this->genres = $_genres;
    $this->year = $_year;
    $this->country = $_country;
    $this->poster = $_poster;
  }

  public function set_Details(){
    $this->details = $this->name . "was made by and was first released in" .$this->year;
  }

}