<?php
	// подключение библиотек
	require "inc/lib.inc.php";
	require "inc/db.inc.php";
	//var_dump($result);
	//var_dump($arr);
?>
<html>
<head>
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?php
if (myBasket()==false){
echo "<h1>Корзина пуста. Вернитесь в <a href='.\catalog.php'> каталог</a> <h1>";}
?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, грн.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?php
	myBasket();
	$i = 1;
	$sum = 0;
	$goods2=myBasket();
foreach($goods2 as $item){
	$i++;
	$sum+=$item['price'];
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?=$item['title']?></td>
		<td><?=$item['author']?></td>
		<td><?=$item['pubyear']?></td>
		<td><?=$item['price']?></td>
		<td><?php echo 1?></td>
		<td><a href="./delete_from_basket.php?del=<?php echo $item['id'] ?> ">Удалить с корзины</a></td>
		
<?}	

?>
</table>

<p>Всего товаров в корзине на сумму: <? echo $sum ?> грн.</p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'" />
</div>

</body>
</html>