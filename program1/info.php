<html>
<head>

<meta charset="UTF-8">
<title>Jagger's Test</title>

</head>
<body>
<h3>Were you correct? </h3>

<?php
include_once('test.php');
include_once('testDecorator.php');
include_once('strategy.php');
print_r($_POST["answer"]);
echo "<br>";
$class = new Question();
$class1 = new IS218($class);
if($_POST["answer"] == $class1->answer())
{
$answer = new Check('is 218' );
$answer->check();
echo "\n";
}
else
{
echo 'Incorrect answer.';
}
?>

</body>
<html>
