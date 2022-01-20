<?php

if($_POST["submit"]) {
    $recipient="kriti.saini44@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\nPhone: $phone\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}


// 
// 
// 			<label for="name">Name</label>
// 			<input 	type="text" 
// 					id="name"
// 					name="name"
// 					value=""
// 					placeholder="Enter Your Name"
// 					size="30" />
// 			<br />
// 			
// 			<label for="email">Email</label>
// 			<input 	type="email" 
// 					id="email"
// 					name="email"
// 					value=""
// 					placeholder="Enter Your Email ID"
// 					size="30" />
// 			<br />
// 			
// 			<label for="Phone">Phone Number</label>
// 			<input 	type="phone" 
// 					id="phone"
// 					name="studentnumber"
// 					value=""
// 					placeholder="Enter Your Phone Number"
// 					size="30" />
// 			<br />
// 			<label for="message">Message</label>
// 			<textarea name="message" id="message" rows="3" placeholder="Write your Message..."></textarea>
// 			<br />