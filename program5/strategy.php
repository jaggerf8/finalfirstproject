<?php
include_once('shirt.php');
include_once('shirtDecorator.php');
interface StrategyOfInterface 
{
public function strategy();
}
class Strategy1 implements StrategyOfInterface 
{
public function strategy() 
{
echo "you are seeing the yes answer";
}
}
class Strategy2 implements StrategyOfInterface {
public function strategy() {
echo "you are seeing the no  answer";
}
}
class Answ
{
private $strategy1;
function __construct( $i ) 
{
switch($i) {
case 'yes';
$this->strategy1 = new Strategy1();
break;
case 'no';
$this->strategy1 = new Strategy2();
break;
default:
error_log('invalid');
break;
}
}
public function answer()
{
$this->strategy1->strategy();
}
}
?>
