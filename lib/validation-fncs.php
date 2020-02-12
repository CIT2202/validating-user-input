<?php
function isComplete($value){
	if(trim($value)===""){
		return false;
	}
	return true;
}

function isInteger($value){
	if(filter_var($value, FILTER_VALIDATE_INT)){
		return true;
	}else{
		return false;
	}
}
function isValidYear($value){
	$maxYear = date("Y")+1; //get the current year and add one
	if($value>$maxYear || $value<1895 || !isInteger($value)){
		return false;
	}
	return true;
}





?>
