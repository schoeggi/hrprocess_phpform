<!DOCTYPE html>  
<html lang="en">  
	<head>  
		<meta charset="utf-8">  
		<title>Application @ Fiusable Ltd</title>  
		<meta name="description" content="If we want to fetch all rows from the columns actor_id and first_name columns from the actor table the following PostgreSQL SELECT statement can be used.">  
	</head>  
	<body>  
		<h1>Thank you <u> <?php 
		$firstname = $_POST["firstname"];
		echo "$firstname ";
		?>
		</u> for your application!<b><p> Our HR team will get in contact with you very soon!</h1>  
		
		<?php
		$jobrefid = $_POST["jobrefid"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$jobtitle = $_POST["jobTitle"];
		$maturity = $_POST["Maturity"];
		$education = $_POST["Education"];
		$jobexperience = $_POST["jobExperience"];
		$minworkload = $_POST["minWorkload"];
		$maxworkload = $_POST["maxWorkload"];
		$salary = $_POST["maxSalary"];
		$comment = $_POST["comment"];		
		if(isset($_POST['experienceBanking'])){$banking = (bool)$_POST['experienceBanking'];}
		else{$banking=0;}
		if(isset($_POST['experienceInsurance'])){$insurance = (bool)$_POST['experienceInsurance'];}
		else{$insurance=0;}
		if(isset($_POST['experienceTransportation'])){$transportation = (bool)$_POST['experienceTransportation'];}
		else{$transportation=0;}
		if(isset($_POST['knowledgeAgile'])){$agile = (bool)$_POST['knowledgeAgile'];}
		else{$agile=0;}
		if(isset($_POST['knowledgeWaterfall'])){$waterfall = (bool)$_POST['knowledgeWaterfall'];}
		else{$waterfall=0;}
		if(isset($_POST['knowledgeBananas'])){$bananas = (bool)$_POST['knowledgeBananas'];}
		else{$bananas=0;}
		if(isset($_POST['travel'])){$travel = (bool)$_POST['travel'];}
		else{$travel=0;}

		$host = 'ec2-54-243-252-91.compute-1.amazonaws.com';
		$database = 'd52imn0hvjaehu';
		$user = 'nzntlehjqwzxlp';
		$port = '5432';
		$password = '44e3e8ea3d41db6da2fb60164064fb876f8f462d09abebfe04cff98b67d1e3a0';
		$table = 'applicant';
		
		$db = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");  
		$result = pg_query($db, "SELECT MAX(id) FROM $table");
		$count_of_max_id = pg_num_rows($result);
				
		if ($count_of_max_id > 0) {
			$id = pg_fetch_row($result);
			$lastid = $id[0];
		} else {
			$lastid = 10000;
		}
		
		$newid = $lastid + 1;
		$insert = pg_query($db, "INSERT INTO $table values('$newid','$jobrefid','$firstname','$lastname','$email','$jobtitle','$maturity','$education','$jobexperience','$banking','$insurance','$transportation','$agile','$waterfall','$bananas','$minworkload','$maxworkload','$salary','$travel','$comment')");
		//echo $insert;
		
		// for Debug purposes
		//echo "INSERT INTO $table values('$newid','$jobrefid','$firstname','$lastname','$email','$jobtitle','$maturity','$education','$jobexperience','$banking','$insurance','$transportation','$agile','$waterfall','$bananas','$minworkload','$maxworkload','$salary','$travel','$comment')";
		
		// Start the Camunda Applicant Process
		$data_string = "{}";      																																										 
					$ch = curl_init('http://hrprocessnew.herokuapp.com/rest/engine/default/process-definition/key/ApplicationOverallProcess/start');                                                                      
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
					curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
						'Content-Type: application/json',                                                                                
						'Content-Length: ' . strlen($data_string))                                                                       
					);                                                                                                                   
																																		 
					$result = curl_exec($ch);
					// for Debug purposes
					//echo $result;
		?>
	</body>  
</html>  


