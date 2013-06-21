<?php
	$link = mysql_connect('localhost', 
	'root', 'root');

	if(!$link) {
		echo '連線失敗';
	} else {
		echo '連線成功';
	}

	$sql = "SELECT * FROM `users`.`profile`";
	mysql_query('SET NAMES utf8');
	$result = mysql_query($sql, $link);	
	
	echo '<pre>';
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		print_r($row);
	}
	echo '</pre>';
?>