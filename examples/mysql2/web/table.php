<?php
	$link = mysql_connect('localhost', 
	'root', 'root');

	$sql = "SELECT p.*, s.name as school_name FROM `users`.`profile` p, `users`.`school` s WHERE s.sid = p.school";
	mysql_query('SET NAMES utf8');
	$result = mysql_query($sql, $link);	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>sex</th>
					<th>address</th>
					<th>school</th>
				</tr>
			</thead>
			<tbody>
<?php
	while($row = mysql_fetch_array($result)) {
		echo '<tr>';
		echo '<th>'.$row['id'].'</th>';
		echo '<th>'.$row['name'].'</th>';
		echo '<th>'.$row['sex'].'</th>';
		echo '<th>'.$row['address'].'</th>';
		echo '<th>'.$row['school_name'].'</th>';
		echo '</tr>';
	}				
?>			
			</tbody>		

		</table>			
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>