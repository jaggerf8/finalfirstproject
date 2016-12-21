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
echo "your answer is correct!\n";
}
}

class Check
{
private $m_strategy;
function __construct( $mode ) 
{
switch($mode) {
case 'is 218';
$this->m_strategy = new Strategy1();
break;
default:
error_log('your answer is incorrect');
break;
}
}
public function check()
{
$this->m_strategy->strategy();
}
}
?>
