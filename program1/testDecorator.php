<?php
include_once('test.php');
abstract class ClassQuestion  implements Test 
{
protected $quest;
function __construct(Test $quest)
{
$this->quest = $quest;
}
abstract function write();
abstract function answer();
}
class IS218 extends ClassQuestion 
{
function write()
{
return $this->quest->write() . "this class?";
}
function answer()
{
return "is 218";
}
}
?>
