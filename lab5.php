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
$arr= array (5,13,25,2,11,7,88,52,36,47,95,36,14,2,8,35,4,6,8,43);
print_r ($arr);


	$x= count ($arr);
	echo $x;
	
	for ($i=0; $i<=$x-1; $i++)
	{
		if ($arr[i]>$arr[$i+1]){
		$temp = $arr[i];
		$arr[i] = $arr[$i+1];
		$arr[$i+1] = $temp;
		}
		//echo "$arr[$i] <br>";
	}
	//else continue;
	print_r ($arr);

/*function sortObmen ()
{
	
}
sortObmen ();*/
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
