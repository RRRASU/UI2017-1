<!DOCTYPE html>

<html>
	<head>
				<!-- Project signup page
			
			 Group 5 ....Ranga rayudu
						pratap kotra
						abhiram mandalparthi --->
		<meta charset='utf-8'/>

		<title>SigUp Page</title>
		<style type="text/css">
			body{font-family: sans-serif;
				background-color: lightyellow;
				margin: 50px;}
		
		</style>
	</head>
	
	<body>
		<h1>Sing Up Form</h1>
		
		<form method="POST" action="#">
			<table>
				<tr><td>First Name</td><td><input type="text" name="firstname" value="<?php if(isset($_POST['signup'])) {echo $_POST['firstname'];} ?>"/></td></tr>
				<tr><td>Last Name</td><td><input type="text" name="lastname" value="<?php if(isset($_POST['signup'])) {echo $_POST['lastname'];}?>"/></td></tr>
				<tr><td>Email</td><td><input type="email" name="email" value="<?php if(isset($_POST['signup'])) {echo $_POST['email'];}?>"/></td></tr>
				<tr><td>Password</td><td><input type="text" name="password" value="<?php if(isset($_POST['signup'])) {echo $_POST['password'];}?>"/></td></tr>
				<tr><td colspan = "2" style = "text-align:right"><input type="submit" value="Sign Up" name="signup"/>
				</td></tr>
			</table>
		</form>
		
		<?php
			//if submit button is set:
			if(isset($_POST['signup'])){
				print_r($_POST);
				include('validate.php');
				if(validateString($_POST['firstname'])) {
					$firstname = $_POST['firstname'];
					if(validateString($_POST['lastname'])) {
						$lastname = $_POST['lastname'];
						if(validateEmail($_POST['email'])) {
							$email = $_POST['email'];
							if(validateAlphanumeric($_POST['password'])) {
								$password = $_POST['password'];
		
											//include file to insert into database.
										include('Insert_row.php');
							}
								else {
									echo "Password is invalid";
								}//end if password
						}else{
							echo "Email is 123"; 
							}//end if email 
					}else {
						echo "Last Name is Invalid";
						}//end if last name
				}else {
					echo "First Name is Invalid";
					} //end if First Name
			}//end if
		?>
	</body>

</html>
	