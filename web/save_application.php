<!DOCTYPE html>  
<html lang="en">  
	<head>  
		<meta charset="utf-8">  
		<title>PostreSQL SELECT Example</title>  
		<meta name="description" content="If we want to fetch all rows from the columns actor_id and first_name columns from the actor table the following PostgreSQL SELECT statement can be used.">  
	</head>  
	<body>  
		<h1>Sucecssfully added applicant</h1>  
		<h1>List of applicant at the moment:</h1>  
		<?php 

		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$jobtitle = $_POST["JobTitle"];
		$maturity = $_POST["Maturity"];
		$education = $_POST["Education"];
		$banking = $_POST["experienceBanking"];		
				
		if(isset($_POST['experienceBanking'])){$banking = $_POST['experienceBanking'];}
		else{$banking=0;}

		if(isset($_POST['experienceInsurance'])){$insurance = $_POST['experienceInsurance'];}
		else{$insurance=0;}

		if(isset($_POST['experienceTransportation'])){$transportation = $_POST['experienceTransportation'];}
		else{$transportation=0;}

		if(isset($_POST['knowledgeAgile'])){$agile = $_POST['knowledgeAgile'];}
		else{$agile=0;}

		if(isset($_POST['knowledgeWaterfall'])){$waterfall = $_POST['knowledgeWaterfall'];}
		else{$waterfall=0;}

		if(isset($_POST['knowledgeBananas'])){$bananas = $_POST['knowledgeBananas'];}
		else{$bananas=0;
		}
		$minworkload = $_POST["minWorkload"];
		$maxworkload = $_POST["maxWorkload"];
		$salary = $_POST["maxSalary"];

		if(isset($_POST['travel'])){$travel = $_POST['travel'];}
		else{$travel=0;}

		$comment = $_POST["comment"];

		/** Connection Details GMX Heroku PHP App
		$host = 'ec2-54-243-252-91.compute-1.amazonaws.com';
		$database = 'd52imn0hvjaehu';
		$user = 'nzntlehjqwzxlp';
		$port = '5432';
		$password = '44e3e8ea3d41db6da2fb60164064fb876f8f462d09abebfe04cff98b67d1e3a0';
		$table = 'applicant';
		**/

		$host = 'ec2-54-75-249-162.eu-west-1.compute.amazonaws.com';
		$database = 'dea2li9qvvs6e4';
		$user = 'ucxhvwaujfziup';
		$port = '5432';
		$password = '23f43414d44152563df28db7b1787b2556c4b353780152fb6ff1eae536fe9dc2';
		$table = 'applicant';


		$db = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");  

		$baseid = 0;
		$result = pg_query($db, "SELECT MAX(id) FROM $table");
		$id = pg_fetch_row($result);
		$lastid = $id[0];
		$newid = $lastid  + $baseid + 1;
		$jobrefid = 0;

		$insert = pg_query($db, "INSERT INTO $table values('$newid','$jobrefid','$firstname','$lastname','$email','$jobtitle','$maturity','$education','$banking','$insurance','$transportation','$agile','$waterfall','$bananas','$minworkload','$maxworkload','$salary','$travel','$comment')");


		$result = pg_query($db,"SELECT id, firstname, lastname, email, jobtitle, maturity FROM $table");  
		echo "<table>";
			echo "<tr>";
				echo "<td align='center' width='150'><b>ID</b></td>";
				echo "<td align='center' width='150'><b>Firstname</b></td>";
				echo "<td align='center' width='150'><b>Lastname</b></td>";
				echo "<td align='center' width='150'><b>E-Mail</b></td>";
				echo "<td align='center' width='150'><b>Job Title</b></td>";
				echo "<td align='center' width='150'><b>Maturity</b></td>";
			echo"</tr>";
			while($row=pg_fetch_assoc($result)){echo "<tr>";  
			echo "<td align='center' width='150'>" . $row['id'] . "</td>";  
			echo "<td align='center' width='150'>" . $row['firstname'] . "</td>";   
			echo "<td align='center' width='150'>" . $row['lastname'] . "</td>";  
			echo "<td align='center' width='150'>" . $row['email'] . "</td>"; 
			echo "<td align='center' width='150'>" . $row['jobtitle'] . "</td>";  
			echo "<td align='center' width='150'>" . $row['maturity'] . "</td>"; 
			echo "</tr>";}  
		echo "</table>";


		// Start the Camunda Applicant Process
		$data_string = "{}";      																																										 
					$ch = curl_init('http://hrprocessnew.herokuapp.com/rest/engine/default/process-definition/key/OverallProcess/start');                                                                      
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
					curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
						'Content-Type: application/json',                                                                                
						'Content-Length: ' . strlen($data_string))                                                                       
					);                                                                                                                   
																																		 
					$result = curl_exec($ch);
		?> 
	</body>  
</html>  


