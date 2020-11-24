<?php
//Controller
require_once "models/film-model.php";
require_once "lib/validation-fncs.php";

// We need default values for the different form controls so we don't get error messages when the page first loads
$title="";
$titleErrMsg="";
$year="";
$yearErrMsg="";
$duration="";
$durationErrMsg="";
$certId="";
$certErrMsg="";

if(isset($_POST['submitBtn'])){ //they've submitted the form

	$title=$_POST['title'];
	$year=$_POST['year'];
	$duration=$_POST['duration'];

	$validForm=true; //assume the form is valid

	if(!isComplete($title)){ // call isComplete() from lib/validation-fncs.php
		$validForm=false; //failed the test set $validForm to false
		$titleErrMsg="You must enter a title for the film.";
	}
	if(!isValidYear($year)){ // call isValidYear() from lib/validation-fncs.php
		$validForm=false;
		$yearErrMsg="You must enter a valid year for the film. This must be after 1895 and not greater than next year. ";
	}
	if(!isInteger($duration)){ // call isInteger() from lib/validation-fncs.php
		$validForm=false;
		$durationErrMsg="You must enter a number for the duration for the film.";
	}

	if(isset($_POST["certificate"])) //certificate is a radio button
	{
		$certId = $_POST["certificate"];
	}else{
		$certErrMsg="You must select a certificate.";
	}


	if($validForm){ //user input has been validated, attempt to insert into database
		$msg="";
		if(saveFilm($title,$year,$duration,$certId)){
		    $msg="Successfully added the details for ".$title;
		}else{
		    $msg="There was a problem inserting the data.";
		}
		require "views/save-view.php";
	}else{ //user input is invalid, show the form again
		require "views/create-view.php";
	}
}else{ //they haven't submitted the form yet, so show the form
	require "views/create-view.php";
}

?>
