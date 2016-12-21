<?php
include_once('movie.php');
include_once('decorator.php');
include_once('BRDecorator.php');

echo write("html");
echo write("head");  
echo write("/head");  
echo write("body");
echo "Movie Titles:";
echo write("br").write("br");
$movieList = new Movie("Rogue One, Spiderman, Dr. Strange");
$decorator = new MovieDecorator($movieList);
$BR = new MovieBRDecorator($decorator);
echo "before : " . write("br");
echo $decorator->showTitle();
echo write("br").write("br");
echo "after separating by line: " . write("br");
$BR->BRTitle();
echo $decorator->showTitle();
echo write("br").write("br");
echo "original: " . write("br");
echo $decorator->resetList();
echo $decorator->showTitle();
echo write("br").write("br");
echo write("br");
echo write("/body");
echo write("/html");

function write($inside) 
{
return "<".$inside.">";
}  
?>
