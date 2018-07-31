<?php
$nm=$eml=$mb=$msgs="";
$nm_error=$eml_error=$mb_error=$msgs_error="";
//---- form is submitted with post method
if(isset($_POST["submit"])){
	if(empty($_POST["nm"])){
		$nm_error ="name is required";
	}
	else
	{
		$nm=test_input($_POST["nm"]);
		  if(!preg_match("/^[a-zA-Z]/", $_POST['nm'])) 
		{
			$nm_error="only latters and white spaces allowed";
		}
	}
	//---email
	if(empty($_POST["eml"])){
		$eml_error="email  is required";
	}
	else
	{
		$eml=test_input($_POST["eml"]);
		if(!filter_var($eml,FILTER_VALIDATE_EMAIL)){
			$eml_error="Invalid email format";
		}
	}
	//--phone
	if(empty($_POST["mb"])){
		$mb_error="mobile is required";
		}
		else
		{
			$mb=test_input($_POST["mb"]);
			$patt= "/[0-9]{10}/";
			if(!preg_match($patt,$mb)){
				$mb_error="invalid phone  number";
			}
		}
		//--message
		if(empty($_POST["msgs"])){
			$msgs="";
		}
		else{
			$msgs=test_input($_POST["msgs"]);
		}
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}


?>