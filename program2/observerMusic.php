
<?php
include_once('observer.php');
include_once('subjectMusic.php');
class PatternObserver extends AbstractObserver {
public function __construct() {
}
public function update(AbstractSubject $subject) {

echo "<br>";
echo 'new favorite artists/bands: '
echo $subject->getFav();
}
}
?>
