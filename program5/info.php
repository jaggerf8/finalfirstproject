<html>
<head>

<meta charset="UTF-8">
</head>
<body>
<?php
include_once('example.php');
include_once('exampleDec.php');
include_once('strategy.php');
print_r($_POST["answer"]);
echo "<br>";
if($_POST["answer"] == 'yes')
{

$answ = new Answ('yes' );
$answ->answer();
echo "<br>";
}
elseif($_POST["answer"] =='no')
{
$answ =new Answ('no');
$answ->answer();
echo "<br>";
}
else
{
echo 'Invalid answer';
}
?>

</body>
</html>
