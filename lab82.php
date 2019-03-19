
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
 <h3>Лабораторная работа №8.2 Написать программу ищет слово в файле text.txt которая находится в директории uploads
	</h3>
 <form action="lab82.php" method = "POST">
 	Введите слово: <input name = "word" type="text">
 	<input type="submit"><br>
   <?PHP
$word=0;
$word=trim($_POST['word']);
$file='./uploads/text.txt';
$n =  substr_count(strtolower(file_get_contents($file)), $word);
echo "В файле $file слово $word повторяется $n раз <br>"; /*
        function getdir($dir_name) {
             $dir = scandir($dir_name);
	foreach($dir as $d) {
	      if($d != '.' and $d != '..') {
	            if(is_dir($dir_name.'/'.$d)) {
		echo '<li>'.$d.'<ul>';
		echo getdir($dir_name.'/'.$d);
			global $file, $word, $n;
		$word=0;
$word=trim($_POST['word']);

$file=$d;
$n =  substr_count(strtolower(file_get_contents($file)), $word);
		echo '</ul></li>';
	             } else {
		echo '<li>'.$d.'</li>';
	             }
	      }
	}

        }
       $dir = 'C:\OSPanel\domains\localhost\uploads';
       echo getdir($dir);
echo "В файле $file слово $word повторяется $n раз <br>"; */
?>