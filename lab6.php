<br> <p><h1>Лабораторная работа №6</h1></p>
<h2>

 </h2>

 <?php
echo "<h2>Задача 'Ханойские башни'</h2><br>";
$i = 1;                                              
function hanoi($plates, $from, $to) {            
    global $i;                                             
        while($plates > 0) {
        $i++;
        $using = 6 - ($from + $to);     
        hanoi(--$plates, $from, $using);          
        print "Перенести  кольцо с $from на $to; <br>";
        $from = $using;
     }
}
 
hanoi(5, 1, 3); 
print " Количество шагов: $i";
    
?>
<?PHP

?>

            </div><!--//container-->
        </section><!--//cards-section-->
    </div><!--//page-wrapper-->
     <?PHP
$menu = array (
					'lab1' => array ('title'=>'Лаба1', 'href'=>'index.php'),
					'lab2' => array ('title'=>'Лаба2', 'href'=>'lab2.php'),
					'lab3' => array ('title'=>'Лаба3', 'href'=>'lab3.php'),
					'lab4' => array ('title'=>'Лаба4', 'href'=>'lab4.php'),
					'lab5' => array ('title'=>'Лаба5', 'href'=>'lab5.php'),
					'lab6' => array ('title'=>'Лаба6', 'href'=>'lab6.php'),
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
