  <p><h1>Лабораторная работа №3</h1></p>
 <h3>Задача 1</h3>
<?php

$morning = "Доброе утро!";
$day = "Добрый день!";
$evening = "Добрый вечер!";
$night = "Доброй ночи!";
 
$minyt = date("i");
$chasov = date("H");
 
if($chasov >= 07) {$hello = $morning;}
if($chasov >= 12) {$hello = $day;}
if($chasov >= 15) {$hello = $evening;}
if($chasov >= 23 or $chasov < 04) {$hello = $night;}
 
echo "Время: $chasov:$minyt, $hello <br>";
 
?>
					<?PHP
					// Получаем текущий час в виде строки от 00 до 23 и приводим строку к целому числу от 0 до 23
					$hour = (int) strftime ('%H');
					$welcome = ''; //инициализируем переменную для приветствия
					 
					if ( 0 < $hour and $hour < 6){$welcome = "<b>Доброй ночи</b>";}
					elseif ( 7 < $hour and $hour < 13)  {$welcome = "<b>Доброй утро</b>";}
					elseif ( 12 < $hour and $hour < 16)  {$welcome = "<b>Добрый день</b>";}
					elseif ( 15 < $hour and $hour < 23) {$welcome = "<b>Доброй вечер</b>";	}
					else {$welcome = "Иди спать";	}				
					
					echo "$welcome , Гость";
					?>
					<h3>Задача 2</h3>
					<?
					$s = ini_get ('upload_max_filesize');
					echo "Максимальный размер загружаемого файла равен $s <br> или ";
			$dsize=$s;
			settype($dsize, "integer");
			//echo $dsize;
$size= $s{strlen($s)-1};
//echo $size;
switch ($size) {
	case G:
	echo "$dsize * 1024 * 1024 * 1024 байт";
	break;
	case M:
	echo $dsize * 1024 * 1024 ." байт";
	break;
	case k:
	echo $dsize * 1024;
	break;
	default: 
echo"много";	
}

					
?>
<h3> Задача про массивы </h3>
<?PHP
$arr = array ("Igor","root","3966");

$arr [] = 25;
$arr [] = true;
$arr [8] = 88;
$arr [] = 99;
echo $arr [0];
$result = count ($arr);
echo "<br> $result ";
?>
<pre><?php print_r ($arr);?> </pre>
<pre><?php var_dump ($arr);?> </pre>
<?
$arr2 = array (
"kurort" => "Стрелковое",
"length" => "50км",
"sea" => "Азовское",
"wc" => "true",
true
				);
				echo $arr2 ["kurort"]. " <br>";
				echo $arr2[0];
?>
<pre><?php var_dump ($arr2);?> </pre>
<h3>Упражнение с динамическим меню и массивом</h3>

<?
$leftMenu = array (
'home' => 'index.php',
'about' => 'about.php',
'contact' => 'contact.php',
'table' => 'table.php',
'calc' => 'calc.php',
);

?>

  </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Упражнение с динамическим меню и массивом</h3>
                            	<li><a href= '<?= $leftMenu['home']?>'> Домой </a> </li>
								<li><a href= '<?= $leftMenu['about']?>'> about </a> </li>
								<li><a href= '<?= $leftMenu['contact']?>'> contact </a> </li>
								<li><a href= '<?= $leftMenu['table']?>'> table </a> </li>
								<li><a href= '<?= $leftMenu['calc']?>'> calc </a> </li>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                   
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->
                <h3>Многомерный массив</h3>

<?PHP
$arr3[0] = array(
			"login" => "Vasya",
			"pass" => "Vasya123",
				);
$arr3[1] = array(
			"login" => "Petya",
			"pass" => "Petya123",
				);
echo $arr3[1]["login"];
?>

   <h3>Упражнение: Использование многомерного массива</h3>
   <?PHP
$secondMenu = array (
				array ('link'=>'Домой2', 'href' => 'index.php'),
				array ('link'=>'О нас', 'href' => 'about.php'),
				array ('link'=>'Контакты', 'href' => 'contacts.php'),
				array ('link'=>'Таблица', 'href' => 'table.php'),
				array ('link'=>'Калькулятор', 'href' => 'calc.php'),
					);
					echo current($secondMenu[0]). "<br>";
						echo end($secondMenu[3]);
?>
<li><a href ='<?= $secondMenu[0]['href']?>'><?= $secondMenu [0]['link']?></a></li>
<li><a href ='<?= $secondMenu[1]['href']?>'><?= $secondMenu [1]['link']?></a></li>
<li><a href ='<?= $secondMenu[2]['href']?>'><?= $secondMenu [2]['link']?></a></li>
<li><a href ='<?= $secondMenu[3]['href']?>'><?= $secondMenu [3]['link']?></a></li>
<li><a href ='<?= $secondMenu[4]['href']?>'><?= $secondMenu [4]['link']?></a></li>


<<<<<<< HEAD
 <h3><b>Упражнение: бактерии.</b></h3>
=======
 <h3>Упражнение: бактерии.</h3>
>>>>>>> 16d0d5f5e9b9fad16dc1c7b85f929f87531f0a1d
<?
$x =  rand(1, 50);
$y =  rand(1, 50);
echo "Начальное количество бактерий - $x" . "<br>" ."Начальное количество минут - $y";
for ($i=1; $i<=$y; $i++) 
{
	$x = $x * 2;
	
	
}
echo "<br>В конце цикла количество бактерий равно <b> $x </b>";
unset($i);
?>

 <h3><b>Упражнение: Доставка самолетом груза.</b></h3>

<?
$dg = 30;
$nP = rand (1, 150);
$oVG = 0;
for ($i = 1; $i <= $nP; $i++)
{
	$vB = rand (1, 32);
	$sum = $vB * $dg;
	echo "Стоимость провоза багажа для пассажира № $i  = $sum USD. (Вес багажа - $vB кг.)<br>";
	$oVG = $oVG + $vB;
}
echo "<b>Общий вес груза равен $oVG кг.</b>";
unset($i);
?>

<br><br><br>
<h3>Упражнение: Даны натуральные числа от 20 до 50.Напечатать те из них, которые делятся на 3, но не делятся на 5.
.</h3>
<?PHP
for ($i = 20; $i <= 50; $i++)
{
	if ($i % 3 == 0 && $i % 5 != 0) 
	{
		echo "$i  ;";

	}
}
?>

<br>

<h3>Упражнение: С помощью цикла while() напишите скрипт вывода всех четных чисел в диапазоне от 2 до 100 включительно.
</h3>


<?PHP
	unset ($x);
	$x = 2;
	echo "<b>Четные числа в диапазоне от 2 до 100: <br></b>";
	while ($x <=100) 
	{
		echo "$x  ,";
		$x = $x+2;
	}
?>
<br>
<br>
<h3>Упражнение: Сделать программу, выводящую факториал числа (произведение чисел от 1 одного до n), где n любое число больше 1.

</h3>
<?PHP
unset ($n);
unset ($i);
$n = rand (1, 100);
//$n = 10;
$fact = 1;
for ($i = 1; $i <= $n ; $i++)
{
	$fact = $fact * ($i);
//	echo "$fact <br>";
}
echo " Факториал числа <b>$n</b> равен <b>$fact </b>";
?>
<br>
<br>

<h3>Найти наибольшее и наименьшее значение функции y=3x^2+x-4, если на заданном интервале [a,b] Х изменяется с шагом 0,5.</h3>

<?PHP
unset ($i);
unset ($x);
unset ($y);
$x = rand (1,100);
//$x = 5;
echo "В заданном интервале от 1 до $x будут следующие значения y =";
$arr = array ();
for ($i = 1; $i <=$x ; $i += 0.5)
{
	
	$y = (3 * $i * $i + $i) - 4;
	echo "$y, ";
	array_push($arr, $y);
	
	
}
$min = min ($arr);
$max = max ($arr);
echo "<br>Минимальное значение функции: $min <br> Максимальное  значение функции: $max";
?>
<br>
<br>

<h3>Составьте программу, позволяющую найти все числа Фибоначчи, меньшие заданного числа N.
</h3>


<?PHP
unset ($i);
unset ($n);
$n = rand (2,50);
$fib = array (1);
$fib[1] = '1'; 
$fib[2] = '1';
for ($i = 3; $i <= $n; $i++)
{
	 $fib[$i] = bcadd($fib[$i-1], $fib[$i-2]);
}

for ($i = 1; $i < $n; $i++) {

  echo($i."\t".$fib[$i].", ;\n");

}

?>

<br>
<br> <p><h2>Лабораторная работа №4</h2></p>
<p><b>Найти наибольшее и наименьшее значение функции y=3x^2+x-4, на заданном интервале(в виде массива) который необходимо сгенерировать случайным образом
 </b></p>
<?PHP
unset ($i);
unset ($n);
unset ($x);
unset ($y);
$x = rand (1,100);
//$x = 5;
for($i=0; $i<=$x; $i++) {
$arr2[$i] = rand(0,$x);
}

echo "В заданном интервале от 1 до $x будут следующие значения y =";
$resultarr = array ();
for ($i = 1; $i <=$x ; $i++)
{
	$n = $arr2 [$i];
	$y = (3 * $n * $n + $n) - 4;
	echo "$y, ";
	array_push($resultarr, $y);
	
	
}
$min = min ($resultarr);
$max = max ($resultarr);
echo "<br>Минимальное значение функции: $min <br> Максимальное  значение функции: $max";
?>