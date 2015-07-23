<html>
<head>
	<title>Делаем первое задание</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<center>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	Введите любое число 
	<input type="text" name="number">
	<input type="submit" name="sumOK" value="OK">
	<br>
	Введите искомое число в строке
	<input type="text" name="stroke">
	<input type="submit" name="strOK" value="OK">
<?php
	if((isset($_POST['number'])) and ($_POST['sumOK'])) 
	{
		$cifer=htmlspecialchars($_POST['number']);
		for($i=0; $i<strlen($cifer); $i++)
			$sum+=$cifer[$i];

		echo "<br>".$sum;
	}
if((isset($_POST['stroke'])) and ($_POST['sumOK'])) 
	{
		$cifer=htmlspecialchars($_POST['number']);
		for($i=0; $i<strlen($cifer); $i++)
			$sum+=$cifer[$i];

		echo "<br>".$sum;

	}


?>
</center>
</form>
<p class="abzac">string1</p>
<p>string2</p>
<h3>are you my father?</h3>
<h2>divniy1</h2>
<h1><p>divniy2</p></h1>
<div class="father">
	<a class="abzac" href="http://google.com">google</a>
	<a href="nahui.ru">Тебе туда</a>
	<p class="abzac">trololo</p>
	<h3>inside container</h3>
</div>
</body>
</html>