<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
 <h3>Лабораторная работа №8.2 Написать программу ищет слово в файле text.txt которая находится в директории uploads
	</h3>


<!--** Написать программу ищет слово во всех файлах которые находятся в заданной директории и выводит список файлов где это слово содержится-->

<form action="lab83.php" method="POST">
	Введите слово:<input name="word" type="text">
	<input type="submit"><br>
<?php
$w=trim($_POST['word']);
$arr= glob("./uploads/*.txt");
foreach ($arr as $val){
	 echo "в файле $val слово $w встречается"," ",substr_count(strtolower(file_get_contents($val)),$w )," ", "раз(а)","<br>";
     }
?>