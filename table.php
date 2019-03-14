<?
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$cols = abs ((int) $_POST ['cols']);
	$rows = abs ((int) $_POST ['rows']);
	$color = trim (strip_tags($_POST ['color']));
}
$cols = ($cols) ? $cols :10;
$rows = ($rows) ? $rows :10;
$color = ($color) ? $color :'yellow';

?>
<h2>Создание функции отрисовки таблицы умножения
</h2>
<form action="<?= $_SERVER ['REQUEST_URI']?>" method="post">
 <p>Количество строк: <input type="text" name="cols" /></p>
 <p>Количество столбцов: <input type="text" name="rows" /></p>
  <p>Цвет на английском: <input type="text" name="color" /></p>
 <p><input type="submit" /></p>
</form>
<?PHP
function drawTable2($incols,$inrows,$color){
$cols =$incols;
$rows=$inrows;

echo "<table border='1' width = '200>' bgcolor='$color'";
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

drawTable2 ($cols,$rows,$color);
?>