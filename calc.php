<h3>Калькулятор </h3>

<?

$num1= (int) (trim($_POST ['num1']));
$num2= (int) (trim($_POST ['num2']));
$op = trim ($_POST ['operator']);
$result = "Результат $num1 $op $num2 = ";
if ($op == '/' AND $num2 == 0) {
	echo "Деление на ноль"; die;}
switch ($op){
	case '-':
	$result .= $num1 - $num2;
	break;
	case '+':
	$result .= $num1 + $num2;
	break;
	case '*':
	$result .= $num1 * $num2;
	break;
	case '/':
	$result .= $num1 / $num2;
	break;
}



?>
<form action="<?= $_SERVER ['REQUEST_URI']?>" method="post">
 <p>Первое число: <input type="text" name="num1" /></p>
   <p>Операция: <input type="text" name="operator" /></p>
 <p>Второе число: <input type="text" name="num2" /></p>

 <p><input type="submit" /></p>
 
</form>
<?

echo $result;
?>
<hr>