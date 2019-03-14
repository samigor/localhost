<form method="POST">
    Введите сумму: <input type="text" name="money">
    <input type="submit" value="OK">
</form>
<?php

foreach ($_POST as $key => $item) {
    if ($key == "money") {
        $m1 = $item;
    }
};
echo "Вы дали: $m1";
echo "<br>";
echo "К выдаче: <br>";
function razmennik($m1)
{
    $stack = array();
    $arr = array("500" => "500", "200" => "200", "100" => "100", "50" => "50", "20" => "20", "10" => "10", "5" => "5", "2" => "2", "1" => "1");
    foreach ($arr as $val) {
        if ($m1 / $val >= 1) {
            print "$val" . "<br>";
            $stack[] = $val;
            $m1 = $m1 - $val;
            razmennik($m1);
            break;
        }
    }
    global $x500;
    $x500 = 0;
    global $x200;
    $x200 = 0;
    global $x100;
    $x100 = 0;
    global $x50;
    $x50 = 0;
    global $x20;
    $x20 = 0;
    global $x10;
    $x10 = 0;
    global $x5;
    $x5 = 0;
    global $x2;
    $x2 = 0;
    global $x1;
    $x1 = 0;
    foreach ($stack as $val) {
        if ($val == 500) {$x500++;}
        if ($val == 200) {$x200++;}
        if ($val == 100) {$x100++;}
        if ($val == 50) {$x50++;}
        if ($val == 20) {$x20++;}
        if ($val == 10) {$x10++;}
        if ($val == 5) {$x5++;}
        if ($val == 2) {$x2++;}
        if ($val == 1) {$x1++;}
    }
}
echo razmennik($m1);
?><hr>