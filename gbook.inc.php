
<!-- Основные настройки -->
<?
define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', '');
define ('DB_NAME', 'gbook');
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name = mysqli_real_escape_string($link, trim(strip_tags($_POST['name'])));
	$email = mysqli_real_escape_string($link, trim(strip_tags($_POST['email'])));
	$msg = mysqli_real_escape_string($link, trim(strip_tags($_POST['msg'])));
}
echo $name, $email, $msg;
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
?>
<!-- Основные настройки -->

<!-- Сохранение записи в БД -->
<?
//$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
$query = "INSERT INTO msgs (name, email, msg) VALUES ('$name','$email', '$msg')";
/*$res = mysqli_query($link, $query);
var_dump ($res);*/
if (mysqli_query($link, $query) === TRUE) {
	printf("Запрос успешно выполнен1.\n");
}
?>
<!-- Сохранение записи в БД -->

<!-- Удаление записи из БД -->

<!-- Удаление записи из БД -->
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<!-- Вывод записей из БД -->
<?
$query2 = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC";

if ($result = mysqli_query($link, $query2)) {
	 printf("Всего записей в гостевой книге - %d \n", mysqli_num_rows($result));
	}
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$arr[] = $row;
}
echo'<pre>';
print_r($arr);
echo'</pre>';
?>
<!-- Вывод записей из БД -->
