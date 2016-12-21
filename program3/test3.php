<?php
include_once('movieSingleton.php');
include_once('movieRenter.php');  
write('singleton:');
write('');
$person1 = new MovieRenter();
$person2 = new MovieRenter();
$person1->rentMovie();

write('person1 asked to rent a movie');
write('Movies: ');
write($person1->getTitles());
write('');
$person2->rentMovie();
write('person2 asked to rent a different movie');
write('Movies: ');
write($person2->getTitles());
write('');
$person1->returnMovie();
write('first person returned the movie');
write('');
$person2->rentMovie(); 


function write($line_in) {
echo $line_in.'<'.'br'.'>';
}
?>
