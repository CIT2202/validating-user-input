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




?>