<?php

//have to use $_POST or $_GET to use data from a form
//data will be an array

$emailInfo = $_POST;

foreach($emailInfo as $key => $value) {
	if ($key != 'password') {
		$new[] = $value;
	}
}

var_dump($new);