
<?php 
session_start();
?>
<?php 
//Created by group 5
//Inserting the data into Database

//global variables for creating the connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cashewnut";

$result; //stores the result of the query
//build SELECT query

$email = $_POST['email'];
$fpassword = $_POST['password'];
$msg;

//Build query
$sql = "select email,password from user where email='$email'and password='$fpassword';";

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
		$_SESSION['username'] = $_POST['email'];  //new
		echo "Login succesful";
		$msg=$_SESSION['email'];
		echo "$msg";
		$_POST[] = array();
		
	 }else {
		//die
		throw new Exception ("Enter valid Login Details");
	 }
 } catch (Exception $e) {
	die ("Error:" . $e->getMessage()); //error handling
  } //end try catch

$connection->close();

?>