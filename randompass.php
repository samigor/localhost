<form method="POST">
    Введи длину пароля: <input type="text" name="count">
    <input type="submit" >
</form>
<?php
unset ($c);
unset ($a);
unset ($b);

foreach ($_POST as $key => $item) {
    if ($key == "count") {
        $c = $item;
    }
}

$random = function ($a, $b) {
    return (
    substr(str_shuffle(('\\`)/|@' .
        password_hash(mt_rand(0, 999999),
            PASSWORD_DEFAULT) . '!*^&~(')),
        $a, $b)
    );
};
echo "Пароль: ";
echo($random(0, $c));
?>