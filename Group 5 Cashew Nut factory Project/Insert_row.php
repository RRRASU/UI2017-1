<?php 
//Created by Group 5 			
			
			 //Group 5 ....Ranga rayudu
				//		pratap kotra
				//		abhiram mandalparthi --->
//Inserting the data into Database

//global variables for creating the connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cashewnut";

$result; //stores the result of the query
//build SELECT query
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$fpassword = $_POST['password'];

//Build query
$sql = "INSERT INTO user (firstname, lastname , email , password) VALUES('$firstname', '$lastname' , '$email' , '$fpassword');";

//Connect tp MySQL
//Create connection and connect to database

$connection = new mysqli($servername, $username, $password, $dbname);
//check connection
 if ($connection->errno) {
	 ("Connection Failed:" . $connection->connect-error); //if connection fails, display message
	 echo "DBMS Connection failed - errno:" . $connection->errno . PHP_EOL;
	 echo "hehe";
	 die("DBMS Connection failed - errno:" . $connection->error . PHP_EOL);
 }//end if

 try {
	 if($connection->query($sql)) {
		echo "SignUp succesful";
		$_POST[] = array();
	 }else {
		//die
		throw new Exception ("Email already exist.Signup with different Email");
	 }
 } catch (Exception $e) {
	die ("Error:" . $e->getMessage()); //error handling
  } //end try catch

$connection->close();

?>