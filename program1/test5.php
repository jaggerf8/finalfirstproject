<html>
<head>
<meta charset="UTF-8">
<title>Jagger's Store</title>
</head>
<body>
<p> Jagger's Test</p>
<p> question: </p>

<?php
include_once('test.php');
include_once('testDecorator.php');
include_once('strategy.php');
$reg_Quest = new Question();
$classQuest = new IS218($reg_Quest);
echo "<br>";
echo $classQuest -> write();
?>

<p>write in your answer:</p>
<form action="info.php" method="post">
answer:
<input type="text" name="answer"placeholder="is 218"><button
type="enter"value="enter">Enter</button>
</body>
</html>
