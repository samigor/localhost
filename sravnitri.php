<form method="POST">
    Введи шестизначное число: <input type="text" name="number">
    <input type="submit">
</form>
<?php
foreach ($_POST as $key => $item) {
    if ($key == "number") {
        $n5 = $item;
    }
}
$x1 = substr($n5, 0, 3);
$x2 = substr($n5, -3);
echo "Ваше значение: ";
echo $n5;
echo "<br>";
if ($x1 == $x2) {
    echo "Первые и последние 3 символа совпадают";
} else {
    echo "Первые и последние 3 символа не совпадают";
}
?>