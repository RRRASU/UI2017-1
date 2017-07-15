<!DOCTYPE html>
<html>
	<head>
		<title> Cashew Nut Factory</title>
		<meta name="viewport" content="width=device-width">
		<meta charset="UTF-8"/>
		<script src="javascript.js" type="text/javascript"></script>
		<link rel="stylesheet" href="productupdated.css" type="text/css"/>
		<meta name="description" content="cashew nuts factory is one of the top most fastest growing factory in India. ">
		<meta name="keywords" content="best website for cashew nut, cashewnut factory, nut factory, nuts">
		
		<script src="javascript.js" type="text/javascript"></script>
	</head>
	<body>
	<div class="wrapper">
		<div class="layout">
			<div class="container">
				
						<div class="branding">
						<a href="home.html"><img src="logo.png" alt="logop"></a>
						</div>
						<div class="navigation_stuff">
						<nav> 
							<ul>
								<li><a href="home.html"> Home </a></li>
								<li><a href="aboutus.html#link2"> About Us </a></li>
								<li><a href="productsupdated.html"> Products </a></li>
								<li><a href="health.html#link4"> Health Advantages </a></li>
								<li><a href="quality.html#link5"> Quality and Quantity </a></li>
								<li><a href="contact.html#link6"> Contact Us </a></li>
							</ul>
						</nav>
						</div>
						<div class="shopping_details">
							<div class="login">
							<nav>
								<ul>
								<li><a href="Login.php#link6">Log In</a><li>
								<li>|</li>
								<li><a href="ieSignUp.php#link1">Sign Up</a></li>
								</ul>
								</nav>
							</div>				
							
							<div class="shopping_cart">
						<nav><ul><li><a href="productsupdated.html">Cart </a><li><ul> </nav>
							<img src="shopping-bag.png">
							</div>
						</div>				
				
					</div>
					
				<div class="info">
		
					<div class="info_right">
					
						<div class="images" style="margin-top:15px; margin-left:31px;">
						
							<div style="float: left;text-align: center;width: 20%;padding: 10px 5px;">
							<img src="cashews.png" style="height:150px;width:150px"/>
							<p>Roasted Cashew</p>
							<p>Qty:<input type="text" placeholder = "In lbs" name="quantity" id="q1"/> <button onclick = "addtoCart('Roasted Cashew','q1',20)" name="buy">Buy</button></p>
							
							</div>
							<div style="float: left;text-align: center;width: 20%;padding: 10px 5px;">
							<img src="dry-cashew-nut.jpg" style="height:150px;width:150px"/>
							<p>Dry Cashew nuts </p>
							<p>Qty:<input type="text" placeholder = "In lbs" name="quantity" id="q2"/> <button onclick = "addtoCart('Dry Cashew Nuts','q2',30)" name="buy">Buy</button></p>
							
							</div>
							<div style="float: left;text-align: center;width: 20%;padding: 10px 5px;">
							<img src="marudhar-mewa-cashew.jpg" style="height:150px;width:150px"/>
							<p>Marudhar Cashew </p>
							<p>Qty:<input type="text" placeholder = "In lbs" name="quantity" id="q3"/> <button onclick = "addtoCart('Marudhar Cashew','q3',40)" name="buy">Buy</button></p>
							
							</div>
							<div style="float: left;text-align: center;width: 20%;padding: 10px 5px;">
							<img src="cashew-nut-snack.jpg" style="height:150px;width:150px"/>
							<p>Cashew Nut Snack </p>
							<p>Qty:<input type="text" placeholder = "In lbs" name="quantity" id="q4"/> <button onclick = "addtoCart('Cashew Nut Snack','q4',50)" name="buy">Buy</button></p>
							
							</div>
							<div style="float: left;text-align: center;width: 20%;padding: 10px 5px;">
							<img src="raw-cashew-nuts.jpg" style="height:150px;width:150px"/>
							<p>Raw Cashew </p>
							<p>Qty:<input type="text" placeholder = "In lbs" name="quantity" id="q5"/> <button onclick = "addtoCart('Raw Cashew','q5',15)" name="buy">Buy</button></p>
							<br/>
							</div>
							<p id="checking" style="font-size:22px;color:red;"></p>
							<div class="addeditems" id="addeditems" style="float:left;margin-top: 63px;display:none;margin-left: 200px;">
							<h1 style="color:blue;">Your Cart</h1>
							<p>
							</p><table>
								<thead><tr><th>Item name</th><th>Quantity in lbs</th><th>Total Price</th></tr></thead>
								<tbody id="tableBody"></tbody>
							
							</table>
							</p>
							
							<p id="totalprice" style="padding-left:250px;"></p>
							<input style="width:100px;background-color:orange;text-align:center;padding:8px;float:left;" type="button" name="checkout" value="Check Out"/>
							<input style="width:100px;background-color:orange;text-align:center;padding:8px;float:left;" type="button" name="cancelcart" value="Cancel cart" onclick="cancelcart()"/>
							
							</div>
							<?php 
							if(isset($_POST['checkout'])){
								$servername = "localhost";
								$username = "root";
								$password = "";
								$dbname = "cashewnut";

								$result; //stores the result of the query
								//build SELECT query
								$firstname = $_POST['firstname'];
								$cashewnutquantity = $_POST['lastname'];
								$totalprice = $_POST['email'];
								

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
															}
							
							
							
							
							
							?>
							
							
							
							
							
							
							
							</div>					
							
						</div>
	
					</div>
				</div>
			
			    <footer>
				<div class="footer_content_1">
					<p> Cashewnut Factory Copyright, &copy; 2017: All rights reserved </p>
					
					<nav>
						<ul>
	                 	<li><a href="">Terms & Conditions </a></li>
							<li>|</li>
							<li><a href=""> Privacy Policy </a></li>
							<li>|</li>
							<li><a href=""> Our Disclaimer </a></li>
							<li>|</li>
					     <li><a href=""> Cancellation & Refund Policy </a></li>
						 <li>|</li>
							<li><a href=""> Shippping and Delivery Policy </a></li>
							<li>|</li>
							<li><a href=""> Site Map </a></li>					
							
						</ul>
					</nav>
				</div>
				</footer>
		
	</div>
</div>
	
</body>
</html>