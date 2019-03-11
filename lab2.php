<br> <p><h1>Лабораторная работа №4</h1></p>
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
unset ($i);
?>
<h2>Упражнение 
Вывод нечетных чисел из заданного диапазона
</h2>
<?PHP

for ($i =-1; $i <= 50; $i++)
{
		echo "$i <br>";
		$i++;
}
unset ($i);
?>
<h2>Вывод строки посимвольно
</h2>
<?PHP
$var = 'HELLO';
$i=0;
$dl=strlen($var);
while ($i <=$dl){
	echo "$var[$i]<br>";
	$i++;
}unset ($i);
?>	
<h2>Создание динамической таблицы
</h2><?PHP
$cols =10;
$rows=10;

echo "<table border='1' width = '200>'";
for ($i=1;$i<=$rows;$i++){
	echo "<tr>";
	for ($j=1;$j<=$cols;$j++)
	{if ($i==1 OR $j==1)
		{
			echo "<th>";
		}
		else {
			echo "<td>";
	}
	echo $i*$j;
	if ($i==1 OR $j==1) 
	{
		echo "</th>";
	}
	else {
		echo "</td>";
	}
}
echo "</tr>";

}
echo "</table>";
?>
<h2>Создание динамического меню навигации по сайту

</h2>
<?PHP
$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'lab2.php'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'lab3.php'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'lab4.php'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'lab5.php'),
);
echo "<ul>";
foreach ($menu as $array){
	?>
	<li>
	<a href = <?php echo $array['href'];?>>
	<?php echo $array['title'];?>
	</li>
	<?PHP
}
echo "</ul>";

?>

<h2>Потерянная задача про Фибоначчи

</h2>
<?PHP
$a0= '1';
$a1= '1';
$n= 2000;
$fib = $a0+ $a1;
while ($fib<$n){
	$a0 = $a1;
	$a1 = $fib;
	echo $fib. " ";
	$fib = $a0+ $a1;
}
?>

