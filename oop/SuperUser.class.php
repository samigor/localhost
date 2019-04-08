<? class SuperUser extends User implements ISuperUser {
	
	public $role;
	
	public function roleInfo ($role)

	{
		$this ->role = $role;
	//	echo "<br>Твой статус: $this->role";
		 User::showInfo($role);
		
	}
	public function getInfo ($name,$login,$password) {
	
		foreach ($name as $key => $value) {
           print "key = $key, value =  $value \n";
       }
	}
}
?>