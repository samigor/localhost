<?php
function clearString($link,$data){
	return mysqli_real_escape_string($link, trim(strip_tags($data)));return abs((int) $data);
}

function AddItemToCatalog ($link, $title, $author, $pubyear, $price)
{
$sql = 'INSERT INTO catalog (title, author, pubyear, price) VALUES (?,?,?,?)';
if (!$stmt = mysqli_prepare($link, $sql)) {
	return false;
}
else
{

	mysqli_stmt_bind_param ($stmt, 'ssii', $title, $author, $pubyear, $price);
	mysqli_stmt_execute ($stmt);
	mysqli_stmt_close ($stmt);
	return true;
}
}
function selectAllItems ($link)
{
$sql = 'SELECT id,title,author,pubyear,price FROM catalog';
if(!$result= mysqli_query($link, $sql))
	return false;
else 
$items = mysqli_fetch_all ($result, MYSQLI_ASSOC);
mysqli_free_result ($result);
return $items;
}
?>