<?php
require_once "models/film-model.php";
require_once "lib/validation-fncs.php";

$title="";
$titleErrMsg="";
$year="";
$yearErrMsg="";
$duration="";
$durationErrMsg="";

if(isset($_POST['submitBtn'])){ //they've submitted the form

	$title=$_POST['title'];
	$year=$_POST['year'];
	$duration=$_POST['duration'];


	$validForm=true;
	if(!isComplete($title)){ // call isComplete() from lib/validation-fncs.php
		$validForm=false;
		$titleErrMsg="You must enter a title for the film.";
	}
	if(!isValidYear($year)){
		$validForm=false;
		$yearErrMsg="You must enter a valid year for the film.";
	}
	if(!isInteger($duration)){
		$validForm=false;
		$durationErrMsg="You must enter a valid duration for the film.";
	}
	if($validForm){ //user input has been validated, attempt to insert into database
		$msg="";
		if(saveFilm($title,$year,$duration)){
		    $msg="Successfully added the details for ".$title;
		}else{
		    $msg="There was a problem inserting the data.";
		}
		require "views/save-view.php";
	}else{ //user input is invalid, show the form again
		require "views/create-view.php";
	}
}else{ //they haven't submitted the form yet
	require "views/create-view.php";
}

?>
