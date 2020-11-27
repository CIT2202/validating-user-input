<?php
// Controller
include "models/film-model.php";
include "lib/validation-fncs.php";

$title="";
$titleErrMsg="";

if(isset($_POST['submitBtn'])){ //they've submitted the form

	$title=$_POST['title'];
	$year=$_POST['year'];
	$duration=$_POST['duration'];
	$certId=$_POST['certificate'];


	$validForm=true;
	if(!isComplete($title)){ //call isComplete from lib/validation-fncs.php
		$validForm=false;
		$titleErrMsg="You must enter a title for the film.";
	}

	if($validForm){ //user input has been validated, attempt to insert into database
		$msg="";
		if(saveFilm($title,$year,$duration,$certId)){
		    $msg="Successfully added the details for {$title}";
		}else{
		    $msg="There was a problem inserting the data.";
		}
		include "views/save-view.php";
	}else{ //user input is invalid, show the form again
		include "views/create-view.php";
	}
}else{ //they haven't submitted the form yet
	include "views/create-view.php";
}






?>
