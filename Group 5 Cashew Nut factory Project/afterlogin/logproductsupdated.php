	<!DOCTYPE html>
<html>
	<head>
	<!-- Project products  page
			
			 Group 5 ...by .Ranga Rayudu
						pratap kotra
						abhiram mandalparthi --->
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
								<li><a href="loghome.php"> Home </a></li>
								<li><a href="logaboutus.php#link2"> About Us </a></li>
								<li><a href="logproductsupdated.php"> Products </a></li>
								<li><a href="loghealth.php#link4"> Health Advantages </a></li>
								<li><a href="logquality.php#link5"> Quality and Quantity </a></li>
								<li><a href="logcontact.php#link6"> Contact Us </a></li>
							</ul>
						</nav>
						</div>
						<div class="shopping_details">
						<div class="login">
							<nav>
								<ul>
								<li><a onclick="window.location.href='logout.php'">Log Out</a></li>
								</ul>
							</nav>
						</div>				
							
							<div class="shopping_cart">
						
							<a href="logproductsupdated.php"><img src="shopping-bag.png"></a>
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
							
							<div style="float: left;text-align: center;width: 17%;padding: 20px 3px;margin-top:8px;background-color:yellow;">
							<p><b>Prices</b></p>
							<ul>
								<li>Raw cashew      : $15/lb </li>
								<li>Roasted Cashew  : $20/lb</li>
								<li>Dry Cashew Nuts : $30/lb</li>
								<li>Marudhar Cashew : $40/lb</li>
								<li>Cashew Nut Snack:$50/lb</li>					
							
							
							</ul>
							</div>
							
							
							<p id="checking" style="font-size:22px;color:red;"></p>
							<div class="addeditems" id="addeditems" style="float:left;margin-top: 46px;display:none;margin-left: 150px;margin-bottom:40px;">
							<h1 style="color:blue;">Your Cart</h1>
							<p>
							</p><table>
								<thead><tr><th>Item name</th><th>Quantity in lbs</th><th>Total Price</th></tr></thead>
								<tbody id="tableBody"></tbody>
							
							</table>
							</p>
							
							<p id="totalprice" style="padding-left:250px;"></p>
							<form method="POST" action="thnq.html">
							<div id="inserttextareas">
								<label>Qnt in lbs</label><input type="textarea" name="totalquantity" id="totalquantity" />
								<label>Total Price $</label><input type="textarea" name="totalprice" id="purchasetotal" />
								
							</div>
							<input style="width:100px;background-color:orange;text-align:center;padding:8px;float:left;" type="button" name="checkout"  value="Check Out" onclick="window.location.href='thnq.php'" />
							</form>
							<input style="width:100px;background-color:orange;text-align:center;padding:8px;float:left;" type="button" name="cancelcart" value="Cancel cart" onclick="cancelcart()"/>
							
							</div>
							
							
							
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