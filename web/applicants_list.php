<!DOCTYPE html>  
<html lang="en">  
	<head>  
		<meta charset="utf-8">  
		<title>Application @ Fiusable Ltd</title>  
		<meta name="description" content="If we want to fetch all rows from the columns actor_id and first_name columns from the actor table the following PostgreSQL SELECT statement can be used.">  
	</head>  
	<body>  
		<h1>List all candidates</h1>  
		<?php 

		
		//$jobrefid = $_GET["jobrefid"];
		
		
		$host = 'ec2-54-75-249-162.eu-west-1.compute.amazonaws.com';
		$database = 'dea2li9qvvs6e4';
		$user = 'ucxhvwaujfziup';
		$port = '5432';
		$password = '23f43414d44152563df28db7b1787b2556c4b353780152fb6ff1eae536fe9dc2';
		$table = 'applicant';


		$db = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");  


		$result = pg_query($db,"SELECT * FROM $table ORDER BY id DESC");  
		echo "<table>\n";
			echo "<tr>\n";
				echo "<td align='center' width='50'><b>ID</b></td>\n";
				echo "<td align='center' width='50'><b>Jobref ID</b></td>\n";
				echo "<td align='center' width='150'><b>Firstname</b></td>\n";
				echo "<td align='center' width='150'><b>Lastname</b></td>\n";
				echo "<td align='center' width='150'><b>E-Mail</b></td>\n";
				echo "<td align='center' width='150'><b>Job Title</b></td>\n";
				echo "<td align='center' width='150'><b>Maturity</b></td>\n";
				echo "<td align='center' width='50'><b>Job experience</b></td>\n";
				echo "<td align='center' width='150'><b>HR Recommendation</b></td>\n";
				echo "<td align='center' width='50'><b>Passed DMN</b></td>\n";
				echo "<td align='center' width='50'><b>Passed 1st interview</b></td>\n";
				echo "<td align='center' width='150'><b>Line Recommendation</b></td>\n";
				echo "<td align='center' width='50'><b>Passed 2nd interview</b></td>\n";
				echo "<td align='center' width='50'><b>Hiring Prio</b></td>\n";

				echo"</tr>\n";
				while($row=pg_fetch_assoc($result)){echo "<tr>\n";  
					echo "<td align='center' width='50'>" . $row['id'] . "</td>\n";  
					echo "<td align='center' width='50'>" . $row['jobrefid'] . "</td>\n";  
					echo "<td align='center' width='150'>" . $row['firstname'] . "</td>\n";   
					echo "<td align='center' width='150'>" . $row['lastname'] . "</td>\n";  
					echo "<td align='center' width='150'>" . $row['email'] . "</td>\n"; 
					echo "<td align='center' width='150'>" . $row['jobtitle'] . "</td>\n";  
					echo "<td align='center' width='150'>" . $row['maturity'] . "</td>\n"; 
					echo "<td align='center' width='50'>" . $row['jobexperience'] . "</td>\n"; 
					echo "<td align='center' width='150'>" . $row['hrrecommendation'] . "</td>\n"; 
					echo "<td align='center' width='50'>" . $row['passed1dmn'] . "</td>\n"; 
					echo "<td align='center' width='50'>" . $row['passed1interview'] . "</td>\n"; 
					echo "<td align='center' width='150'>" . $row['linerecommendation'] . "</td>\n"; 
					echo "<td align='center' width='50'>" . $row['passed2interview'] . "</td>\n"; 
					echo "<td align='center' width='50'>" . $row['hiringprio'] . "</td>\n"; 
					echo "</tr>\n";
				}  
		echo "</table>\n";
		?> 
	</body>  
</html>  


