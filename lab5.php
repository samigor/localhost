<br>
<h2>Создание функции отрисовки таблицы умножения
</h2><?PHP
function drawTable($incols,$inrows){
$cols =$incols;
$rows=$inrows;

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
echo "</table>";}

drawTable (15,15);
?>
<br> <p><h2>Лабораторная работа №5</h2></p>
<h3>Написать 2 функции сортировки массивов, используя алгоритмы «Сортировка обменами», «Сортировка вставками»

 </h3>
<?PHP

echo "<h3> Cортировка обменами </h3><br>";
	function sortObmen (){
$array = array(1, 0, 6, 9, 4, 5, 2, 3, 8, 7); // исходный массив
 
// перебираем массив
for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        // если текущий элемент больше следующего
        if ($array[$i] > $array[$i + 1]){
            // меняем местами элементы
            $tmp_var = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $tmp_var;
        }
    }
}
 
// вывод результата
	var_dump($array);}
	echo sortObmen ();
?>
<br>
<br>
<?php
  echo "<h3> Cортировка вставками </h3><br>";

	function insertionSort($mas, $masCount)
{
	
    for($i = 1; $i < $masCount; $i++)
    {
        $rightValue = $mas[$i];
        $leftValue = $i - 1;
        
        while($leftValue >= 0 && $mas[$leftValue] > $rightValue)
        {
            $mas[$leftValue+1] = $mas[$leftValue];
            $leftValue--;
        }
        
        $mas[++$leftValue] = $rightValue;
    }
    
    return $mas;
}
$mas = array (5, 7, 3, 8, 3, 9, 0, 3, 2, 7, 9, 4);
$masCount = count ($mas);
print_r (insertionSort ($mas, $masCount));
?>
<h3>Создание функции отрисовки меню навигации по сайту 5.2.
</h3>
<?PHP

$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'lab2.php'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'lab3.php'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'lab4.php'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'lab5.php'),
					'lab6' => array ('title'=>'Лаба6', 'href'=>'lab6.php'),
);

function drawMenu ($inmenu,$vertical="false"){
	$menu = $inmenu;
	
	if ($vertical=false){
	echo "<ul>";}
	else {
		echo "<br>";
	}
foreach ($menu as $array){
	if ($vertical=false){
	echo "<li>";}
	else {
		echo " ";
	}
	echo '<a href = '. $array['href'].'>';
	echo $array['title'];
	
	
}
if ($vertical=false){
	echo "</ul>";}
	else {
		echo " "; 
	} echo $vertical;
}
drawMenu($menu); 
?>

            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
                  <?PHP
$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'index.php'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'index.php'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'lab4.php'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'lab5.php'),
					'lab6' => array ('title'=>'Лаба6', 'href'=>'lab6.php'),
);
echo "<ul>";
foreach ($menu as $array){
	?>
	<li>
	<a href = <?php echo $array['href'];?>></a>
	<?php echo $array['title'];?>
	
	<?PHP
}
echo "</ul>";

?>
