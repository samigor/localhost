<?php
header('Content-Type: text/html; charset=utf-8');

//---------------------------------------------

class User extends AUser{
	
	public $name;
	public $login;
	public $password;
	
	public function showInfo()
	{
		echo "Привет $this->name, твой логин - $this->login, пароль - $this->password, твоя роль - $this->role";
	}
	
	public function newIni($name, $login, $password){
			$this ->name = $name;
			$this ->login = $login;
			$this ->password = $password;
	}
	
	public function delUser(){
		echo "Пользователь $this->login удален";
	}
	
	public function __clone() {
echo "Клонируем user3 в user4 <br>";
	}
}


//---------------------------------------------
class SuperUser extends User implements ISuperUser {
	
	public $role;
	
	public function roleInfo ($role)

	{
		$this ->role = $role;
	//	echo "<br>Твой статус: $this->role";
		 User::showInfo($role);
		
	}
	public function getInfo ($name,$login,$password) {
	
		foreach ($this as $key => $value) {
           print "$key => $value\n";
       }
	}
}
//---------------------------------------------

	

//---------------------------------------------
abstract class AUser 
		{
		abstract function ShowInfo ();
		}

//---------------------------------------------
interface ISuperUser
	{
		function getInfo ($name,$login,$password);
	}

//---------------------------------------------
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

?>