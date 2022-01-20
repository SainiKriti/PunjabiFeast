<!doctype html>
<html lang="en">
	
	<head>
		<title>Punjabi Feast Enquiry Form</title>
		<meta charset="utf-8">
		<link href="css/css_style.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet"> 
		<link rel="icon"vtype="image/png" href="images/logo_name.png">
	</head>
	
	<body>
		
		<!--
			Student Name: Kriti Saini
			Student ID: A01220388
 		-->
 		
	 	
 		<!-- navigation bar replaced with nav.php file -->
		
		<?php
			include("nav.php");
		?>
		
		<!-- navigation bar replaced with nav.php file -->
 		
	 	<?php
			include("header.inc");
		?>
		
		
		<div id="content">
			<h2>Enquiry Form</h2>
			<br />
			<br />
			
			<form method="post" action="email_form.php">
			
				<label for="name">Name</label>
				<input 	type="text" 
						id="name"
						name="name"
						placeholder="Enter Your Name"
						size="30" />
				<br /><br />
				
				<label for="email">Email</label>
				<input 	type="text" 
						id="email"
						name="email"
						placeholder="Enter Your Email ID"
						size="30" />
				<br /><br />
				
				<label for="phone">Phone Number</label>
				<input 	type="number" 
						id="phone"
						name="phone"
						placeholder="Enter Your Phone Number"
						size="30" />
				<br /><br />
				
				
				<label for="message">Message</label>
				<textarea name="message" id="message" rows="3" placeholder="
				
								

Write your Message..."></textarea>
				<br />
				
				
				<br /><br />
				<input  id="submit" type="submit" name="submit" value="Submit Enquiry" />	
				<br /><br/ >
			
			</form>
		
		</div>
 			
 			
 				
 		<!-- navigation bar replaced with nav.php file -->
 		
	 	<?php
			include("footer.inc");
		?>
 		
 		
	</body>
	
	
	
</html>