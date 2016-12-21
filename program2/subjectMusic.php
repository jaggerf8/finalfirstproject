<?php
include_once('Subject.php');
include_once('observerMusic.php');  
class MusicSub extends AbstractSubject {
private $music = NULL;
private $observers = array();
function __construct() {
}
function attach(AbstractObserver $observer)
{      
$this->observers[] = $observer;
}
function detach(AbstractObserver $observer) {
foreach($this->observers as $okey => $oval) {
if ($oval == $observer) { 
unset($this->observers[$okey]);
}
}
}
function notify() {
foreach($this->observers as $obs) {
$obs->update($this);
}
}
function updateFav($newFav) {
$this->fav = $newFav;
$this->notify();
}
function getFav() {
return $this->fav;
}
}
?>
