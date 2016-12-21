<?php
include_once('decorator.php');
class MovieBRDecorator extends MovieDecorator 
{
private $obj;
public function __construct(MovieDecorator $obj2) 
{
$this->obj = $obj2;
}
function BRTitle() 
{
$this->obj->title = Str_replace(", ","<br>",$this->obj->title);
}
}
  
  ?>
