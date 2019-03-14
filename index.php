<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for documentations</title>
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
     
     
    <div class="page-wrapper">
        
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">SAM</span><span class="text-bold">IGOR</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>Тема для свободного творчества в лабораторных и домашних заданиях</p>
                    <p>Designed with <i class="fa fa-heart"></i> for developers</p>
                </div><!--//tagline-->
                   <?PHP
$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'index.php'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'index.php'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'lab4.php'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'lab5.php'),
					'lab6' => array ('title'=>'Лаба6', 'href'=>'lab6.php'),
					'lab7' => array ('title'=>'Лаба7', 'href'=>'lab7.php'),
					'calc' => array ('title'=>'calc', 'href'=>'calc.php'),
					'table' => array ('title'=>'table', 'href'=>'table.php'),
					'kramer' => array ('title'=>'kramer', 'href'=>'kramer.php'),
					'randompass' => array ('title'=>'randompass', 'href'=>'randompass.php'),
					'sravnitri' => array ('title'=>'sravnitri', 'href'=>'sravnitri.php'),
					'razmen' => array ('razmen'=>'Лаба11', 'href'=>'razmen.php'),
);
echo "";
foreach ($menu as $array){
	?>
	
	<a href = <?php echo $array['href'];?>>
	<?php echo $array['title'];?></a>
	
	<?PHP
}
echo "";

?>
            </div><!--//container-->
        </header><!--//header-->
        
        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Курсы PHP с WEZOM</h2>
                <div class="intro">
<?
include ("lab1.php");
include ("lab3.php");
include ("lab4.php");
include ("lab5.php");
include ("lab6.php");
include ("lab7.php");
//include ("table.php");
include ("calc.php");

?>
   <h3 class="title"> Сделать решение матрицы Крамера.</h3>
	<?include 'kramer.php'; ?>			
	 <h3 class="title"> Случайный пароль</h3>
	 	<?include 'randompass.php'; ?>	
	  <h3 class="title">Сравнение цифер первых трех и последних</h3>
	  	<?include 'sravnitri.php'; ?>	
	   <h3 class="title">Разменный аппарат.</h3>
	   	<?include 'razmen.php'; ?>	
            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->


    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
            
        </div><!--//container-->
	
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>                                                                     
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 

