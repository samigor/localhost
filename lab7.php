
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?     
   //Инициализация заголовков страницы
 $title = 'Лабораторная №7';
 $header = "$welcome, Гость!";
 $id = strtolower(strip_tags(trim($_GET['id'])));
 switch ($id) {
 	case 'lab2':
 		$title = 'лаба№2';
 		$header = "Лабораторная работа №2";
 		break;
  	case 'lab3':
 		$title = 'лаба№3';
 		$header = "Лабораторная работа №3";
 		break;
 	 	case 'lab4':
 		$title = 'лаба№4';
 		$header = "Лабораторная работа №4";
 		break;
 	 	case 'lab5':
 		$title = 'лаба№5';
 		$header = "Лабораторная работа №5";
 		break;
 	 	case 'lab6':
 		$title = 'лаба№6';
 		$header = "Лабораторная работа №6";
 		break;
 	 	case 'lab7':
 		$title = 'лаба№7';
 		$header = "Лабораторная работа №7";
 		break;
 	 	case 'lab8':
 		$title = 'лаба№8';
 		$header = "Лабораторная работа №8";
 		break;
 	 	case 'lab9':
 		$title = 'лаба№9';
 		$header = "Лабораторная работа №9";
 		break;
 	 	case 'lab10':
 		$title = 'лаба№10';
 		$header = "Лабораторная работа №10";
 		break;
 	 	case 'lab11':
 		$title = 'лаба№11';
 		$header = "Лабораторная работа №11";
 		break;
 		
 	 }  
    
?>
<head>
    <title><?php echo $title?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head> 

<body class="landing-page">   

    <div class="page-wrapper"><br> <p><h1><?php echo $header?> </h1></p>
<h2>Лабораторная работа №7
Передача параметров на сервер.
 </h2>

 <?php
 switch ($id) {
 	case 'lab2':
 		include 'lab2.php';
 		break;
 	case 'lab3':
 		include 'lab3.php';
 		break;
 	 	case 'lab4':
 		include 'lab4.php';
 		break;
 	 	case 'lab5':
 		include 'lab5.php';
 		break;
 	 	case 'lab6':
 		include 'lab6.php';
 		break;
 	 	case 'lab7':
 		include 'lab7.php';
 		break;
 	 	case 'lab8':
 		include 'calc.php';
 		break;
 	 	case 'lab9':
 		include 'table.php';
 		break;
  	case 'lab10':
 		include 'lab10.php';
 		break;
 	 	case 'lab11':
 		include 'lab11.php';
 		break;
 		 	
 	/*default:
 		include 'index.php';
 		break;*/
 }

$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'lab7.php?id=lab2'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'lab7.php?id=lab3'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'lab7.php?id=lab4'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'lab7.php?id=lab5'),
					'lab6' => array ('title'=>'Лаба6', 'href'=>'lab7.php?id=lab6'),
					'lab7' => array ('title'=>'Лаба7', 'href'=>'lab7.php?id=lab7'),
					'lab8' => array ('title'=>'Лаба8', 'href'=>'lab7.php?id=lab8'),
					'lab9' => array ('title'=>'Лаба9', 'href'=>'lab7.php?id=lab9'),
					'lab10' => array ('title'=>'Лаба10', 'href'=>'lab7.php?id=lab10'),
					'lab11' => array ('title'=>'Лаба11', 'href'=>'lab7.php?id=lab11'),
);
echo "<ul>";
foreach ($menu as $array){
	?>
	<li>
	<a href = <?php echo $array['href'];?>>
	<?php echo $array['title'];?></a>
    
	
	<?PHP
}
echo "</ul>";
?>
<h3>Упражнение 4. Допиливаем таблицу умножения.
 </h3>

<?
include 'table.php';
?>
