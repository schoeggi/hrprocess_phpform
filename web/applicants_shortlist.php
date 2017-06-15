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

		
		//$jobtitle = $_GET["JobTitle"];
		$jobrefid = $_GET["jobrefid"];
		
		
		$host = 'ec2-54-243-252-91.compute-1.amazonaws.com';
		$database = 'd52imn0hvjaehu';
		$user = 'nzntlehjqwzxlp';
		$port = '5432';
		$password = '44e3e8ea3d41db6da2fb60164064fb876f8f462d09abebfe04cff98b67d1e3a0';
		$table = 'applicant';


		$db = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");  

		//$insert = pg_query($db, "INSERT INTO $table values('$newid','$jobrefid','$firstname','$lastname','$email','$jobtitle','$maturity','$education','$jobexperience','$banking','$insurance','$transportation','$agile','$waterfall','$bananas','$minworkload','$maxworkload','$salary','$travel','$comment')");

		$result = pg_query($db,"SELECT * FROM $table WHERE PASSED1DMN=True AND PASSED1INTERVIEW=True AND PASSED2INTERVIEW=True AND JOBREFID=$jobrefid");  
		echo "<table>";
			echo "<tr>";
				echo "<td align='center' width='50'><b>ID</b></td>";
				echo "<td align='center' width='50'><b>Jobref ID</b></td>";
				echo "<td align='center' width='150'><b>Firstname</b></td>";
				echo "<td align='center' width='150'><b>Lastname</b></td>";
				echo "<td align='center' width='150'><b>E-Mail</b></td>";
				echo "<td align='center' width='150'><b>Job Title</b></td>";
				echo "<td align='center' width='150'><b>Maturity</b></td>";
				echo "<td align='center' width='50'><b>Job experience</b></td>";
				echo "<td align='center' width='150'><b>HR Recommendation</b></td>";
				echo "<td align='center' width='50'><b>Passed DMN</b></td>";
				echo "<td align='center' width='50'><b>Passed 1st interview</b></td>";
				echo "<td align='center' width='150'><b>Line Recommendation</b></td>";
				echo "<td align='center' width='50'><b>Passed 2nd interview</b></td>";
				echo "<td align='center' width='150'><b>Hiring Prio</b></td>";

				echo"</tr>";
				while($row=pg_fetch_assoc($result)){echo "<tr>";  
					echo "<td align='center' width='50'>" . $row['id'] . "</td>";  
					echo "<td align='center' width='50'>" . $row['jobrefid'] . "</td>";  
					echo "<td align='center' width='150'>" . $row['firstname'] . "</td>";   
					echo "<td align='center' width='150'>" . $row['lastname'] . "</td>";  
					echo "<td align='center' width='150'>" . $row['email'] . "</td>"; 
					echo "<td align='center' width='150'>" . $row['jobtitle'] . "</td>";  
					echo "<td align='center' width='150'>" . $row['maturity'] . "</td>"; 
					echo "<td align='center' width='50'>" . $row['jobexperience'] . "</td>"; 
					echo "<td align='center' width='150'>" . $row['hrrecommendation'] . "</td>"; 
					echo "<td align='center' width='50'>" . $row['passed1dmn'] . "</td>"; 
					echo "<td align='center' width='50'>" . $row['passed1interview'] . "</td>"; 
					echo "<td align='center' width='150'>" . $row['linerecommendation'] . "</td>"; 
					echo "<td align='center' width='50'>" . $row['passed2interview'] . "</td>"; 
					echo "<td align='center' width='50'>" . $row['hiringprio'] . "</td>"; 

					echo "</tr>";
				}  
		echo "</table>";
		?> 
	</body>  
</html>  


