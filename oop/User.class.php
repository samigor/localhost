<?php class User extends AUser{
	
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
	public static $loversCount = 0;
	function __construct (){
		++self::$loversCount;
	}
	static function welcome (){
		echo "Добро пожаловать в клуб любителей печенек!";
	}

}
?>