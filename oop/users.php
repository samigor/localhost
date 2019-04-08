<?php
header('Content-Type: text/html; charset=utf-8');


 function __autoload ($class_name){
 	require $class_name. '.class.php';
 }

$user1 = new User();
$user1 -> newIni(Oleg, oleg_login, Oleg_password);
$user2 = new User();
$user2 -> newIni(Kyrylo, Kyrylo_login, Kyrylo_password);
$user3 = new User();
$user3 -> newIni(Mykyta, Mykyta_login, Mykyta_password);
$user4 = new User();
$user4 = clone $user3;
print("Оригинальный объект:\n");
print_r($user3);
echo '<br/>';
print("Клонированный объект:\n");
print_r($user4);
echo '<br/>';
/*$user1->name = 'Ivan';
$user1->login = 'Ivan_login';
$user1->password = 'Ivan_password';
$user2->name = 'Petro';
$user2->login = 'Petro_login';
$user2->password = 'Petro_password';
$user3->name = 'Vasyl';
$user3->login = 'Vasyl_login';
$user3->password = 'Vasyl_password';*/
echo $user1 -> showInfo();
echo '<br/>';
echo $user2 -> showInfo();
echo '<br/>';
echo $user3 -> showInfo();
echo '<br/>';
echo $user3 -> delUser();
echo '<hr>';
//echo $user1 -> name;

$user = new SuperUser();
foreach($user as $key => $value) {
    print "$key => $value\n";
}
echo "\n";
echo '<hr>';
echo $user -> getInfo(q,w,e);

echo '<hr>';
$user->role = 'admin';
$user -> newIni(administrator, adm_login, adm_password);
echo $user -> showInfo();
echo '<hr>';
echo $user -> roleInfo(admin1);
echo '<br/>';
echo '<hr>';
foreach ($user as $key => $value) {
           print "key = $key, value =  $value \n";
       }
 echo '<hr>';
 echo 'Текущее количество любителей печенек: ' . User::$loversCount;
 echo '<br/>';
 echo User::welcome();
?>