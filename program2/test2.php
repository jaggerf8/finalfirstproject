<?php
  
  include_once('subjectMusic.php');
  include_once('observerMusic.php');
  echo 'observer pattern:'; 
  echo "<br>";
 
  $music = new MusicSubject();
  $music1 = new MusicObserver();
  $music->attach($music1);
  $music->updateFav('rolling stones, beatles');
  $music->updateFav('Brand New, Eminem');
  $music->detach($music1);
  $music->updateFav('Pinegrove, Famous Dex');
?>
