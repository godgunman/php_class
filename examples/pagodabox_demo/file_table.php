<?php
	require_once('utility.php');
	require_once('file.php');

	$files = File::getFiles();
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
					<th>type</th>
					<th>size</th>
				</tr>
			</thead>
			<tbody>
<?php
	foreach ($files as $file) {
		echo '<tr>';
		echo '<th>'.$file->fid.'</th>';
		echo '<th>'."<a href=\"$file->name\">$file->name</a>".'</th>';
		echo '<th>'.$file->type.'</th>';
		echo '<th>'.$file->size.'</th>';
		echo '</tr>';
	}
	/*
	while($row = mysql_fetch_array($result)) {
		echo '<tr>';
		echo '<th>'.$row['id'].'</th>';
		echo '<th>'.$row['name'].'</th>';
		echo '<th>'.$row['sex'].'</th>';
		echo '<th>'.$row['address'].'</th>';
		echo '<th>'.$row['school_name'].'</th>';
		echo '</tr>';
	}
	*/			
?>			
			</tbody>		

		</table>			
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>