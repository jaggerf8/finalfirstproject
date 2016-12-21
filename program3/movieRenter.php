<?php

Class MovieRenter
{
private $rentedMovie;
private $hasMovie = FALSE;   
function __construct() {
}    
function getTitles() {
if (TRUE == $this->hasMovie) {
return $this->rentedMovie->getTitles();
} 
else {
return "I don't have the movie(s)";
}
}    
function rentMovie() {
$this->rentedMovie = MovieSingleton::rentMovie();
if ($this->rentedMovie == NULL) {
$this->hasMovie = FALSE;
} 
else {
$this->hasMovie = TRUE;
}
}    
function returnMovie() {
$this->rentedMovie->returnMovie($this->rentedMovie);
}
}
?>
