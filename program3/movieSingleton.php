<?php
class MovieSingleton {
private $movies = 'Rogue One, Suicide Squad, Avengers';
private static $movie = NULL;
private static $isRented = FALSE;
private function __construct() {
}    
static function rentMovie() {
if (FALSE == self::$isRented) {
if (NULL == self::$movie) {
self::$movie = new MovieSingleton();
}
self::$isRented = TRUE;
return self::$movie;
}
else {
return NULL;
}
}    
function returnMovie(MovieSingleton $movieReturned) {
self::$isRented = FALSE;
}
function getActors() {return $this->movies;}
function getTitle() {return $this->title;}    
function getTitles() {
return $this->getTitle() . ' = ' . $this->getActors();
}
}
?>
