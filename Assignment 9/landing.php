<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["Address"];
$city = $_POST["City"];
$zip = $_POST["zip"];
$state = $_POST["state"];
$userInput = $_POST["userInput"];


$servername = "sql5.freemysqlhosting.net"; 
$database = "sql5668850";
$username = "sql5668850"; 
$password = "pQncbUaBKD";

$conn = mysqli_connect($servername,$username,$password,$database);

$sql= "
INSERT INTO PersonalInfo (first_name, last_name)
VALUES
    ($fname, $lname),

INSERT INTO ContactInfo (phone_number, email, address, city, zip_code, state)
VALUES
    ($phone, $email, $address, $city, $zip, $state),
"



?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Andersen Photography</title>
<link href="style.css" type="text/css" rel="stylesheet">
<!-- Heading 1 Cursive font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<img src="Photos/Logo2.PNG" width="338" height="197" alt=""/>	
		<nav>
			<a href="index.html" class="tab">Home</a>
			<a href="photos.html" class="tab">Photos</a>
			<a href="contact.html" class="tab">Contact</a>
		</nav>
	</header>
	<main>
		<h2>Thank you for your response</h2>
	  	<section class="aboutme">
			<p>Hello <?= $fname ?> <?= $lname ?>,<br><br>Thank you for requesting a <?= $userInput ?>. I will get in contact with you in the next 1-5 business days with a quote for the shoot.<br><br>From,<br>Ally Andersen</p>
		</section>
		<section class="alignright">
			<img src="Photos/Logo1.PNG" alt=""/>
		</section>
	</main>
	<footer>
	  <p>Andersen Photograph <a href="https://www.instagram.com/andersphoto_95/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" style="color: white">@andersphoto_95</a></p>
	</footer>
</body>
</html>
