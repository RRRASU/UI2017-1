<?php 
//Created by Group 5 :
//Inserting the data into Database

//global variables for creating the connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cashewnut";

$result; //stores the result of the query
//build SELECT query

$q = $_REQUEST["q"];
echo "Helloo I am neww";
echo "<script>console.log($q);</script>";
$tqty = $_POST['totalquantity'];
$tprice = $_POST['totalprice'];

//Build query
$sql = "INSERT INTO purchase (cashewquantity, totalprice) VALUES('$tqty', '$tprice');";

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
		echo "Transaction Updated";
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