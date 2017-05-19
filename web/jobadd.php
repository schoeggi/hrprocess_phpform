<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Job Application Form</title>
      <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">    
      <link rel="stylesheet" type="text/css" href="/stylesheets/myStyle.css" />
	</head>   
    <body>	
		<form class="pure-form pure-form-aligned" action="save_application.php" method="post">
		<h1>Job Application Form</h1>
		    		<!--<?php
					$job = $_GET['job'];
					$maturity = $_GET['maturity'];
					$jobrefid = $_GET['jobrefid'];
					echo "Applying for open position: $maturity $job $jobrefid";
					?>	-->
			<fieldset>	
				<div class="pure-control-group">
		        	<label for="lastname">Job Reference</label>
		        	<input class="form-control mytext" type="text" readonly id="jobrefid" name="jobrefid" placeholder="Job Reference ID" value="<?php echo $jobrefid; ?>"/>
		    	</div>	
				<div class="pure-control-group">
		        	<label for="lastname">Job Title</label>
		        	<input class="form-control mytext" type="text" readonly id="jobTitle" name="jobTitle" placeholder="Job Title" value="<?php echo $job; ?>"/>
		    	</div>	
				<div class="pure-control-group">
		        	<label for="lastname">Maturity</label>
		        	<input class="form-control mytext" type="text" readonly id="Maturity" name="Maturity" placeholder="Maturity" value="<?php echo $maturity; ?>"/>
		    	</div>	
				<div class="pure-control-group">
		        	<label for="firstname">Firstname</label>
		        	<input class="form-control mytext" type="text" required id="firstname" name="firstname" placeholder="Firstname"/>
		    	</div>	
				<div class="pure-control-group">
		        	<label for="lastname">Lastname</label>
		        	<input class="form-control mytext" type="text" required id="lastname" name="lastname" placeholder="Lastname"/>
		    	</div>	
				<div class="pure-control-group">
		        	<label for="email">Email</label>
		        	<input class="form-control mytext" type="text" required id="email" name="email" placeholder="Email"/>
		    	</div>					
				
				<div class="pure-control-group">
		        	<label for="Education">Min Education</label>
		        	<select  id="Education" name="Education">
		            	<option>BSc</option>
		            	<option>MSc</option>
		            	<option>Dr</option> 
		            	<option>other</option>   
		        	</select>
		    	</div>
		    	<div class="pure-control-group">
					<table>
						<tr>
							<td><label for="experienceBanking">Industry experience</label></td>
							<td><input class="form-control" type="checkbox" name="experienceBanking" id="experienceBanking"/></td>
							<td class="tabledata">&nbsp;Banking</td>
						</tr>
						<tr>
							<td><label for="experienceInsurance">&nbsp;</label></td>
							<td><input class="form-control" type="checkbox" name="experienceInsurance" id="experienceInsurance"/></td>
							<td class="tabledata">&nbsp;Insurance</td>

						</tr>
						<tr>
							<td><label for="experienceTransportation">&nbsp;</label></td>
							<td><input class="form-control" type="checkbox" name="experienceTransportation" id="experienceTransportation"/></td>
							<td class="tabledata">&nbsp;Transportation</td>
						</tr>
					</table>
					<table>
						<tr>
							<td><label for="knowledgeAgile">Knowlegdge</label></td>
							<td><input class="form-control" type="checkbox" name="knowledgeAgile" id="knowledgeAgile"/></td>
							<td class="tabledata">&nbsp;Agile</td>
						</tr>
						<tr>
							<td><label for="knowledgeWaterfall">&nbsp;</label></td>
							<td><input class="form-control" type="checkbox" name="knowledgeWaterfall" id="knowledgeWaterfall"/></td>
							<td class="tabledata">&nbsp;Waterfall</td>

						</tr>
						<tr>
							<td><label for="knowledgeBananas">&nbsp;</label></td>
							<td><input class="form-control" type="checkbox" name="knowledgeBananas" id="knowledgeBananas"/></td>
							<td class="tabledata">&nbsp;Picking Bananas</td>
						</tr>
					</table>

				</div>
		    	<div class="pure-control-group">
		        	<label for="minWorkload">Min Workload %</label>
		        	<input class="form-control mytext" type="number" required min="10" max="100" step="10" id="minWorkload" name="minWorkload" placeholder="Between 10 and 100%"/>
		    	</div>		    	
				<div class="pure-control-group">
		        	<label for="maxWorkload">Max Workload %</label>
		        	<input class="form-control mytext" type="number" required min="10" max="100" step="10" id="maxWorkload" name="maxWorkload" placeholder="Between 10 and 100%"/>
		    	</div>
		    	<div class="pure-control-group">
		        	<label for="maxSalary">Max Salary</label>
		        	<input class="form-control mytext" type="number" required min="80000" max="200000" step="1000" id="maxSalary" name="maxSalary" placeholder="Between 80'000 and 200'000 CHF"/>
		    	</div>
				<div class="pure-control-group">
		        	<label for="travel">Willingness to travel</label>
		        	<input class="form-control" type="checkbox" id="travel" name="travel"/>
		    	</div>
		    	<div class="pure-control-group">
		        	<label for="comment">Comment</label>
		        	<textarea class="form-control mytext" required id="comment" name="comment" placeholder="Type your comment for budget approval here..."></textarea>
		    	</div>

		    </fieldset>
			<input type="Submit" value="Submit" />
		</form>
		<?php
			//echo date("d.m.Y H:i:s");
		?>
	</body>
</html>

<!--style="width: 350px;"-->


