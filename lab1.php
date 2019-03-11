				 <h2>Лабораторная работа №1, №2</h2>
                   <?php
ini_set('display_errors', 1);
$name = 'sam-igor';
$day=strftime('%d');
$mon=strftime('%B');
$year=strftime('%Y');
define ("COPYRIGHT", "created by $name");

?>
<blockquote>
<?echo "today $day  chislo $mon  month $year year.";?>	
</blockquote>
<br>
<?=strftime('%Y');?>
<br>
<?
$a= 'hello';
$$a='world';
//hello world
echo $a, ' ', $hello; 
?>
<br>
<?
$a = 'name';
$$a = 'Dan';
// Вас зовут Dan
echo 'Your name: ', $name;
?>
<br>
<?
$foo = True;
$juice = "apple";
echo "he drank some ${juice}s juice";

echo 'here were \'bere\' \n new';
?>
<br>
<?
echo <<<tr
Проверка  "$name". Проверка 

	Проверка2 'A': \x41
lorem ipsum bla bla bla
tr;
?>
<br>
<?
$str = 'This is a test.';
$first = $str{0};
echo $first;
$str{strlen($str)-1} = "!";
echo $str;
?>
<br>
<?
$a = "Hello ";
$b = $a . "World ";
echo $b;
$c = $a . " " . $b;
echo $c;
$d = "$a $b";
echo $d;
$d .=" of fame! ";
echo $d;
?>
<?
$output = 'ping 127.0.0.1';
echo "<pre>$output</pre>";
?>
<?
$value = 5;
echo gettype($value);


?>
<br>
<?
const CON = "HELLO HELLO";
echo CON;
?>
<br>
<?

echo COPYRIGHT?>
<br>
<h3> Задание 1 лаба 2. </h3>
Написать php-скрипт вычисление объема куба, все параметры произвольные.



<?
$a = 5;
$v = $a * $a * $a;
echo "Объем куба со стороной 5 равен $v";

?>
<br>
<h3> Задание 2 лаба 2 </h3> Даны три координаты вектора x,y,z с основанием у начала координат. Вычислите длину этого вектора и выведите результат на экран
<?
$x = 5;
$y = 12;
$z = 3;
$l = sqrt (($x * $x) + ($y * $y) + ($z * $z));
echo "длина вектора равна $l";

?>
<br>
<h3> Задание 3 лаба 2 </h3> Напишите скрипт который пересчитывает скорость из км/ч на скорость в м/c
</p>
<?
$km = 36;
$m = ($km*1000)/3600;
echo "36 км в час это $m метров в сек";

?>
<br>
<h3> Задание 4 лаба 2 </h3> Дано число а. Не используя никаких функций получить число a^4 за две операции 
</p>
<?
$k = 5;
$k *= ($k * $k);
echo "k =5 в четвертой степени равняется $k";
?>