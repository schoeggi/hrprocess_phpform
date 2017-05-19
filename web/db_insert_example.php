<!DOCTYPE html>  
<html lang="en">  
	<head>  
		<meta charset="utf-8">  
		<title>PostreSQL INSERT Example</title>  
		<meta name="description" content="If we want to fetch all rows from the columns actor_id and first_name columns from the actor table the following PostgreSQL SELECT statement can be used.">  
	</head>  
	<body>  
		<h1>List of all actors in the table</h1>  
		<?php 
		$host = 'ec2-54-243-252-91.compute-1.amazonaws.com';
		$database = 'd52imn0hvjaehu';
		$user = 'nzntlehjqwzxlp';
		$port = '5432';
		$password = '44e3e8ea3d41db6da2fb60164064fb876f8f462d09abebfe04cff98b67d1e3a0';

		$db = pg_connect("host=$host port=$port dbname=$database user=$user password=$password"); 
		$insert = pg_query($db, "INSERT INTO test_table values ('99','Alan')");
		$result = pg_query($db,"SELECT * FROM test_table");  
		echo "<table>";while($row=pg_fetch_assoc($result)){echo "<tr>";  
		echo "<td align='center' width='200'>" . $row['id'] . "</td>";  
		echo "<td align='center' width='200'>" . $row['name'] . "</td>";   
		echo "</tr>";}  
		echo "</table>";
		?> 
		</div>  
	</body>  
</html>  





