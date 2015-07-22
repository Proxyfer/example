 <html>
 <body>
 <?
   $name = isset($_POST['name']) ? $_POST['name'] : '';
   $year = isset($_POST['year']) ? $_POST['year'] : '';
 
   if (isset($_POST['name'], $_POST['year'])) {
     if ($_POST['name'] == '') {
       echo 'Укажите имя!<br>';
     } else if ($_POST['year'] < 1900 || $_POST['year'] > 2004) {
       echo 'Укажите год рождения! Допустимый диапазон значений: 1900..2004<br>';
     } else {
       echo 'Здравствуйте, ' . $_POST['name'] . '!<br>';
       $age = 2004 - $_POST['year'];
       echo 'Вам ' . $age . ' лет<br>';
     }
     echo '<hr>';
   }

 ?>
 <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
   Введите Ваше имя: <input type="text" name="name" value="<?=$name?>">
   <br>
   Введите Ваш год рождения: <input type="text" name="year" value="<?=$year?>"><br>
   <input type="submit" value="OK">
 </form>

 <? phpinfo(32); ?>
 </body>
 </html>