<HTML>
<TITLE> Тест новой книги </TITLE>
<body>
<form method="post">
	<p>Имя: <input name="name" type="text"></p>
	<p><input type='submit' value='Отправить'></p>
</form>
<?php
	$second = "дром";
	echo "Вольксваген выехал на {$second}авто</br>";
	echo "New line</br>";

	$million1 = "255";
	$million2 = (integer) $million1;

	$number = 7;
	$first = "nubmer";
	echo "ololo = ", $million2*2,"</br>";
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		
		echo "Текст в форме ",$name."<br />";
	} 
?>


</body>
</HTML>