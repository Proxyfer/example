<html>
<head>
<title>Первые уроки PHP</title>
	<?php
	$connect = mysql_connect( "localhost", "root", "");
	mysql_select_db("testdb");
	$result = mysql_query("select title from cars where price > 15000");
	while($a = mysql_fetch_assoc($result))
	{	
		print_r($a);
		echo "<br>";
	}


	include_once 'K:\DOM Parser\Simple_html_dom.php';

	$html = file_get_html('http://24tv.ua');
	foreach($html->find('img') as $element) 
			{
		       $image = $element->src;   //'http://google.com'.
		       echo "<img src=$image>"; 
		  	 }
		  	 
	mysql_close($connect);
	?>
</head>
</html>
