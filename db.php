<pre>
<?php
	$link = mysqli_connect('localhost', 'root', '', 'gbook');
	$sql = 'SELECT * FROM msgs ORDER BY id DESC';
	
	$res = mysqli_query($link, $sql) or die(mysqli_error($link));
	mysqli_close($link);
	while($row = mysqli_fetch_array($res)) {
		echo $row['name'].'<br>';
		print_r($row);
	}
	
?>