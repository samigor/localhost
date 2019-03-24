<?php
	// подключение библиотек
	//require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/db.inc.php";
	

	$title = clearString ($link, $_POST['title']);
	$author = clearString ($link, $_POST['author']);
	$pubyear = clearString ($link, $_POST['pubyear']);
	$price = clearString ($link, $_POST['price']);
	if (!addItemToCatalog ($link, $title, $author, $pubyear, $price)) {
		echo "Произошла ошибка добавления товара в каталог!";
	} else
	{
		header("Location: add2cat.php");
		exit;
	}
?>