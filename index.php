<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"> <!--<![endif]-->  

<head>
 
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
			<?PHP
					// Получаем текущий час в виде строки от 00 до 23 и приводим строку к целому числу от 0 до 23
					$hour = (int) strftime ('%H');
					$welcome = ''; //инициализируем переменную для приветствия
					 
					if ( 0 < $hour and $hour < 6){$welcome = "<b>Доброй ночи</b>";}
					elseif ( 7 < $hour and $hour < 13)  {$welcome = "<b>Доброе утро</b>";}
					elseif ( 12 < $hour and $hour < 16)  {$welcome = "<b>Добрый день</b>";}
					elseif ( 15 < $hour and $hour < 23) {$welcome = "<b>Доброй вечер</b>";	}
					else {$welcome = "Иди спать";	}				
					
					/*echo "$welcome , Гость";*/
					?>
     <? ob_start();
 $title = 'Лабораторная №7';
 $header = "$welcome, Гость!";
 $id = strtolower(strip_tags(trim($_GET['id'])));
 switch ($id) {
 	case 'lab1':
 		$title = 'лаба№1';
 		$header = "Лабораторная работа №1";
 		break;
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
        case 'lab81':
        $title = 'лаба№81';
        $header = "Лабораторная работа №81";
        break;
        case 'lab82':
        $title = 'лаба№82';
        $header = "Лабораторная работа №82";
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
     
   <div class="page-wrapper"><br> 
         <title><?php echo $title?></title> 
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">SAM</span><span class="text-bold">IGOR</span> <p><h1><?php echo $header?> </h1></p>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Тема для свободного творчества в лабораторных и домашних заданиях</p>
                    <p>Designed with <i class="fa fa-heart"></i> for developers</p>

<?
$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php?id=lab1'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'index.php?id=lab2'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'index.php?id=lab3'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'index.php?id=lab4'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'index.php?id=lab5'),
					'lab6' => array ('title'=>'Лаба6', 'href'=>'index.php?id=lab6'),
					'lab7' => array ('title'=>'Лаба7', 'href'=>'index.php?id=lab7'),
					'lab8' => array ('title'=>'Лаба8', 'href'=>'index.php?id=lab8'),
                    'lab81' => array ('title'=>'Лаба81', 'href'=>'index.php?id=lab81'),
                    'lab82' => array ('title'=>'Лаба82', 'href'=>'index.php?id=lab82'),
                    'lab83' => array ('title'=>'Лаба83', 'href'=>'lab83.php'),
					'lab9' => array ('title'=>'Лаба9', 'href'=>'lab9.php'),
					'lab10' => array ('title'=>'Лаба10', 'href'=>'index.php?id=lab10'),
					'lab11' => array ('title'=>'Лаба11', 'href'=>'index.php?id=lab11'),
					'calc' => array ('title'=>'calc', 'href'=>'calc.php'),
					'table' => array ('title'=>'table', 'href'=>'table.php'),
					'kramer' => array ('title'=>'kramer', 'href'=>'kramer.php'),
					'randompass' => array ('title'=>'randompass', 'href'=>'randompass.php'),
					'sravnitri' => array ('title'=>'sravnitri', 'href'=>'sravnitri.php'),
					'razmen' => array ('title'=>'razmen', 'href'=>'razmen.php'),
                    'test' => array ('title'=>'test', 'href'=>'./test/index.php'),
);
/*echo "<ul>";*/
foreach ($menu as $array){
	?>
	
	<a href = <?php echo $array['href'];?>>
	<?php echo $array['title'];?></a>
    
	
	<?PHP
}
/*echo "</ul>";*/
?>
                </div><!--//tagline-->

    
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Курсы PHP с WEZOM</h2>
                <div class="intro">
  <?php
 switch ($id) {
 	case 'lab1':
 		include 'lab1.php';
 		break;
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
 		include 'lab8.php';
 		break;
    case 'lab81':
        include 'lab81.php';
        break;
    case 'lab82':
        include 'lab82.php';
        break;
    case 'lab83':
        include 'lab83.php';
        break;
 	case 'lab9':
 		include 'lab9.php';
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
?>
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->

                   
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
           
            
        </div><!--//container-->
	
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html>