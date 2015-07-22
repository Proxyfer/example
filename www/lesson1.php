<html>
<title>Делаем первое задание</title>
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
</body>
</html>