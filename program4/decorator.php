<?php
include_once('movie.php');
class MovieDecorator {
protected $movie;
protected $title;
public function __construct(Movie $movie2) {
$this->movie = $movie2;
$this->resetList();
}
function resetList() {
$this->title = $this->movie->getTitle();
}
function showTitle() {
return $this->title;
}
} 
?>
