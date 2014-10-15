<?php

var_dump($_GET);
var_dump($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>
	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Name</label>
        <input id="username" name="username" placeholder="placeholder" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" placeholder="placeholder"type="password">
    </p>
    <p>
    	<button type="submit"> Submit </button>
    </p>
</form>
<h2> Compose An Email</h2>
<form method="POST" action="">
	<p>
		<label for="emailto">Send the Email To Who?</label>
		<input id="emailto" name="emailto" type="text">
	</p>
	<p>
		<label for="emailfrom">Your Email?</label>
		<input id="emailfrom" name="emailfrom" type="text">
	</p>
	<p>
		<label for="subject">Subject</label>
		<input id="subject" name="subject" type="text" placeholder="Enter your subject here">
	</p>
	<p>Would you like to save a copy of this email?</p>
		<label> 
		<input id="saveacopy" name="saveCopy" type="radio" value="Yes"> Yes
		</label>

		<label> 
		<input id="saveacopy" name="saveCopy" type="radio" value="No"> No
		</label>
	<p>
		<label for="messagebody">Message Body</label>
		<textarea id="messagebody" placeholder="Enter the message body here..." name="message" rows="8" cols="8"></textarea>
	</p>
	
</form>

<h2>Multiple Choice Test</h2>
<form method="POST" action="">
	<p>What do you value most?</p>
	<label>
		<input id="q1" name="q1" type="radio" value="money">Money
	</label>
	<label>
		<input id="q1" name="q1" type="radio" value="health">Health
	</label>
	<label>
		<input id="q1" name="q1" type="radio" value="family">Family
	</label>
	<label>
		<input id="q1" name="q1" type="radio" value="love">Love
	</label>

	<p>How are you?</p>
	<label>
		<input id="q2" name="q2" type="radio">Fine
	</label>
	<label>
		<input id="q2" name="q2" type="radio">Could be Better
	</label>
	<input type="submit" name="send">
</form>
</body>
</html>
