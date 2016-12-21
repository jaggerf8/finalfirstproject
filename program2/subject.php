<?php
include_once('observer.php');
abstract class AbstractSubject {
abstract function attach(AbstractObserver $observer);
abstract function detach(AbstractObserver $observer);
abstract function notify();
}
?>
