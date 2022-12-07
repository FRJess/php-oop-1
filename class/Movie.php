<?php

class Movie{
  public $name;
  public $director;
  public $genre;
  public $year;
  public $country;
  public $details;

  /**
   * @param String $name Movie's title in original language
   * @param String $director Movie's director(s)
   * @param String $genre Movie's genre
   * @param String $year Year of first release
   * @param String $country Country of origin
   */
  
  public function __construct($_name, $_director, $_genre, $_year, $_country)
  {
    $this->name = $_name;
    $this->director = $_director;
    $this->genre = $_genre;
    $this->year = $_year;
    $this->country = $_country;
  }

  public function set_Details(){
    $this->details = $this->name . "was made by and was first released in" .$this->year;
  }


}