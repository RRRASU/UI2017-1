<?php 

//Validation Functions
	function validateString($string){
			if(!empty($string) && !ctype_space($string) and ctype_alpha($string)) {
				//ctype_alpha check only for alphabets. other characyers returns false.
				return true;
			}else{
				return false;
			}//end string validation
	}//end validateString
	
	function validateEmail($email){
			if (empty($email)) {
				$emailErr = "Email is required";
				echo "$emailErr";

			} else {
				$email = test_input($email);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
				echo "$emailErr";
				}
				else {
					return true;
				}
			}
	}//end validateNumber
	
	function validateAlphanumeric($string){
		if(!empty($string) && !ctype_space($string) and ctype_alnum($string)) {
			//ctype_alnum check only for alphanumeric. other characyers returns false.
			return true;
		}else {
			return false;
		}//end string validation
	}//end validateAlphanumeric
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	}
	
?>