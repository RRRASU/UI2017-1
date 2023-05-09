<!DOCTYPE html>
<html>
	<head>
		<title> Cashew Nut Factory</title>
		
					<!-- Project Login page
			
			 Group 5 ....Ranga rayudu Rayapudi
		<meta name="viewport" content="width=device-width">
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="ieSignUp.css" type="text/css"/>
		<meta name="description" content="cashew nuts factory is one of the top most fastest growing factory in India. ">
		<meta name="keywords" content="best website for cashew nut, cashewnut factory, nut factory, nuts">
		<script src="javascript.js" type="text/javascript"></script>
	</head>
	<body>
	<div class="wrapper">
		<div class="layout">
			<div class="container">
				
						<div class="branding">
						<img src="logo.png" alt="logop">
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
								<li style="display:none;padding-top:5px;padding-bottom:5px;"><a  href="#">Log In</a><li>
								<!--<li>|</li>-->
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
				
				<div class="Message_on_image">
						<div class="writeup_img">
						<img src="cashew.jpg" alt="writeup_img">
						</div>
						<div class="writeup">
						<h1> Worlds Best Cashew Nut Factory </h1>
						<p>Cashew Nut Industries Private Limited are the renowned name involved in<br/> wholesaling, exporting, supplying, trading and importing a range of fast-moving consumer goods (FMCG) foods.<br/> Being a leading exporter, we are growing day by day.</p>
						</div>
				</div>	
						
					<a name="link6"></a>
				<div class="subscription">
				
							<h1> Subscribe to Our News Letter</h1>
							<form action="#"> 
								<input type="email" placeholder="Enter Email...">
								<button type="submit" class="subscribe_button"> Subscribe </button>
							</form>
				</div>
					
				<div class="info">
					<div class="info_left">
						<img src="recipies.gif" onclick="recipies()" />
					
						<img src="news-events.gif"  onclick="newsevents()"/>
					
						
						<img src="Accreditations_image.png" onclick="accredation()">
						
						
					</div>
					<div class="info_right">
					<div id="info_right_content" class="info_right_content">
					<div id="SignUpForm" class="SignUpForm">
					<h1>Hi!.. CashewNut Factory Member</h1>
					
						<form method="POST" action="afterlogin/loghome.php">
			
				
				<input type="email"  placeholder="Enter Email..." name="email" value="<?php if(isset($_POST['login'])) {echo $_POST['email'];}?>"/><br/>
				<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['login'])) {echo $_POST['password'];}?>"/><br/>
					<button type="submit" class="signUp_button" name="login"><b>Log In</b></button>
					
					<p style="margin-top:10px">Not a member? Please <a href="ieSignUp.php#link1">Sign Up</a></p>
		           </form>
				   
				   
				   
				   <?php
			//if submit button is set:
			session_start();
			
			if(isset($_POST['login'])){
				//print_r($_POST);
				include('validate.php');
				
						if(validateEmail($_POST['email'])) {
							$email = $_POST['email'];
							if(validateAlphanumeric($_POST['password'])) {
								$password = $_POST['password'];
		
											//include file to insert into database.
										include('selectlogin.php');

							}
								else {
									echo "Password is invalid";
								}//end if password
						}else{
							echo "Enter a Valid Email"; 
							}
			}//end if
		?>
						<h1 id="SignUpMSG"></h1>
					</div>
					</div>
					<div id="recipies" class="recipies">
								<h1>Todays Recipies* </h1>
							<p>	

								<h1><b>Cashew Nut Curry or Kaju Curry<b></h1>
							<b>Ingredients:</b><br/></br>

							Kaju -  1/2 cup</br>
							Potato - 1 (peeled and cut)</br>
							Onion  - 2 big (chopped)</br>
							Coconut   - 1/4 (grated)</br>
							Red chilly powder -  1/2 tsp</br>
							Garam masala powder  - 1/4 tsp</br>
							Turmeric powder   - 1/4 tsp</br>
							Coriander leaves    - 1/2 tbsp</br>
							Oil -1 tbsp</br>
							Salt</br>		<br/>		 
							<h3><b>Method</b></h3>
							Soak kaju in hot water for 15-20 min.</br>
							Heat oil  in a pan and saute  half of the chopped onion till brown.</br>
							Add grated coconut and also fry it till golden.</br>
							Allow it to cool abnd grind  to a  fine paste in mixture with little water.</br>
							Heat oil and fry  the remining onion till transperent.</br>
							Seperate each kaju and add in onion fry again.</br>
							Now add potato pieces,red chilly powder,garam masala powder,turmeric powder and salt.</br>
							Cook for 5-6 min with 1 cup of water on low flame till the potato gets cooked</br>
							Add grind coconut and bring it to boil.</br>		
								
								</p>
					</div>
					
					<div id="newsevent" class="newsevent">
						<h1>Upcomig Events ** </h1>
						<img src="discount-flyer.jpg" alt="Discountcoupan"/>
						<img src="anniversary.jpg" alt="anniversary"/>
						</div>
						
						<div id="accredations" class="accredations">
						
						<h1>Membership and Certifications</h1>
							<h2>We are holder of quality management systems certification according to IS/ISO 9001: 2000</h2><br/><br/>
							<ul>
							
								<li>. IS-15000: 1998 (HACCP) issued by the Bureau Of Indian Standards.</li>
								<li>. In recognition of the organization as a leading exporter of the organization is also a registered member of the<br/> (Cashew Export Promotion Council of India)</li>
								<li>. Member  Federation Of Indian Exporters Organization.</li>
								<li>. Member of AFI (Association Of Food Industry), and also the FDA, U S A (Food And Drug Administration)</li>
								
							</ul>
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
