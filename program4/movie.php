<?php
class Movie 
{
private $title;
function __construct($title2) 
{
$this->title  = $title2;
}     
function getTitle() 
{
return $this->title;
}    
}
?>
