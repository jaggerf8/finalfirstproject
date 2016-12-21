<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<p> example</p>

<?php
include_once('example.php');
include_once('exampleDec.php');
include_once('strategy.php');

$ex = new P1();
$ex1 = new Ex1($ex);
echo $ex -> aboutIt();
?>

<p>write yes or no:</p>

<form action="info.php" method="post">
answer
<input type="text" name="answer"placeholder=""><button type="enter"value="enter">Enter</button>
</body>

</html>
