<!DOCTYPE html>  
<html lang="en">  
	<head>  
		<meta charset="utf-8">  
		<title>Application @ Fiusable Ltd</title>  
		<meta name="description" content="DOBP for Life">  
	</head>  
	<body>  
		<h1>Applicant information</h1>  
		<?php 

		$id = $_GET["id"];

		$host = 'ec2-54-243-252-91.compute-1.amazonaws.com';
		$database = 'd52imn0hvjaehu';
		$user = 'nzntlehjqwzxlp';
		$port = '5432';
		$password = '44e3e8ea3d41db6da2fb60164064fb876f8f462d09abebfe04cff98b67d1e3a0';
		$table = 'applicant';

		$db = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");  

		

		//$result = pg_query($db,"SELECT id, firstname, lastname, email, jobtitle, maturity, jobexperience FROM $table where ID=$id"); 
		$result = pg_query($db,"SELECT * FROM $table where ID=$id");  
		
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
				echo "<td align='center' width='50'><b>Hiring Prio</b></td>";

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


