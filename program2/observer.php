<?php
include_once('subject.php');  
abstract class AbstractObserver {
abstract function update(AbstractSubject $subject);
}
?>
