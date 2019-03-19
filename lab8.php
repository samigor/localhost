
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
 <h3>Лабораторная работа №8. Работа с файлами. Написать программу, которая ищет слово в файле произвольной длины.	</h3>
 <form action="index.php?id=lab8" method = "POST">
 	Введите слово: <input name = "word" type="text">
 	<input type="submit"><br>
   <?PHP
/*fwrite($file, "Example\ntext\ntext");
fclose($file);
$file = fopen("a.txt", "r+t");
while (!feof($file)) {
echo fread($file, 1). "<br />";
}
fseek($file, 0);
echo fread($file, 1). "<br />";
fclose($file);
echo "-------------------<br />";
file_put_contents("c.txt", "TEST test Test");
echo file_get_contents("c.txt")."<br />";

echo file_exists("a.txt")."<br />";
echo filesize("c.txt");
rename("c.txt", "b.txt");
unlink("b.txt");*/
$word=0;
$word=trim($_POST['word']);
$file='./uploads/text.txt';
$n =  substr_count(strtolower(file_get_contents($file)), $word);
echo "В файле $file слово $word повторяется $n раз <br>";

?>