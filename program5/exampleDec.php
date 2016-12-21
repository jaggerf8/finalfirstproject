<?php
include_once('example.php');
abstract class StratExample implements Example 
{
protected $example;
function __construct(Example $example)
{
$this->example = $example;
}
abstract function aboutIt();
abstract function details();
}
class P1 extends StratExample 
{
function aboutIt()
{
return $this->example->aboutIt() + "yes or no answer?";
}
}
?>
