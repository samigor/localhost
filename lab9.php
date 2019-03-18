<?PHP
$visitCounter = 0;
$lastVisi=0;
if (isset($_COOKIE['lastVisit'])) {
	$visitCounter= $_COOKIE['visitCounter'];
	if (date('d-m-Y', $_COOKIE['lastVisit'])!= date('d-m-Y')) {
		++$visitCounter;
	}
	else{}
	setcookie('lastVisit', time());
	setcookie('visitCounter',$visitCounter);
}
else{
	setcookie('lastVisit', time());
	setcookie('visitCounter',$visitCounter);
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<p><h1>Лабораторная работа №9</h1></p>
 <h3>Задача 1. Создание и чтение Cookie</h3>
 <?PHP
if (isset($_COOKIE['visitCounter'])== 0) {
	echo "Вы здесь впервые";
} else {
	echo "Вы зашли $_COOKIE[visitCounter] раз! Дата последнего визита ". date('d-m-Y')  ;
}
?>
