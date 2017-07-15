function recipies(){ //to block diplaying content and show recipies
	console.log("hello");
d1=document.getElementById("info_right_content");
d2=document.getElementById("recipies");
d3=document.getElementById("newsevent");
d4=document.getElementById("accredations");


      d1.style.display = "none";      
	  d3.style.display = "none";
	  d4.style.display = "none";
	  d2.style.display = "block";
	  
   
  
}

function newsevents(){ //to block diplaying content and show newsevents
	
	d1=document.getElementById("info_right_content");
d2=document.getElementById("recipies");
d3=document.getElementById("newsevent");
d4=document.getElementById("accredations");
	
 
      d1.style.display = "none";  
	  d2.style.display = "none";
	  d4.style.display = "none";
	  d3.style.display = "block";
	  
   
	
	
}


function accredation(){//to block diplaying content and show accredations
	
d1=document.getElementById("info_right_content");
d2=document.getElementById("recipies");
d3=document.getElementById("newsevent");
d4=document.getElementById("accredations");

      d1.style.display = "none";      
	  d2.style.display = "none";
	  d3.style.display = "none";
	  d4.style.display = "block";
	
}
 myPriceArray=[];//to store the total of each product added
 myQuantity=[];//to store the quatity each time a buy button is pressed
 total=0;
 quantity=0;
 temp = 0;		//tried to uses to insert in db
function addtoCart(type,qt,x ){
	
	var productname=type;
	var qnt=qt;
	var numb=x;
	 var p1=document.getElementById(qnt).value;
	var price=p1*numb;
	if(((parseInt(p1))>0) &&(!isNaN(p1))){
	//document.getElementById("checking").innerHTML=  productname+"  "+"is"+" "+"$"+ price;
	
	
	//adding the table
	var tbody=document.getElementById("tableBody");
	var trow=document.createElement("tr");
	var prodname=document.createElement("td");
	var itemquant=document.createElement("td");
	var itemprice=document.createElement("td");
	
	
	
	prodname.innerHTML=productname;
	itemquant.innerHTML=p1;
	itemprice.innerHTML=price;
	trow.appendChild(prodname);
	trow.appendChild(itemquant);
	trow.appendChild(itemprice);
	tbody.appendChild(trow);
	
	myPriceArray.push(price);
	 myQuantity.push(parseInt(p1));
	
	
	
	document.getElementById("addeditems").style.display="block";
	document.getElementById("checking").style.display="none";
	
	for(var i in myPriceArray) { total += myPriceArray[i]; }
	document.getElementById("totalprice").innerHTML = "Your Total :$ "+total;
	document.getElementById("purchasetotal").value = total;
	temp2 = total;
	total = 0;
	
	
	for(var i in myQuantity) { quantity +=  myQuantity[i]; }
	document.getElementById("totalquantity").value = quantity;
	
	temp = quantity;  
	quantity = 0;
	
	}
	else{
		document.getElementById("checking").style.display="block";
		document.getElementById("checking").innerHTML="Enter a valid quantity greater than 0";
	}
	
}


//to clear the shopping cart
function cancelcart(){
	console.log("hrll");
	
	document.getElementById("tableBody").innerHTML="";//apending table
	document.getElementById("totalprice").innerHTML = "Your Total :$ 0" ;
	 myPriceArray.length=0;
	 myQuantity.length=0;
	 document.getElementById("totalquantity").value = 0;
	 document.getElementById("purchasetotal").value = 0;;
	 for(var i in myPriceArray) { total += myPriceArray[i]; }
	document.getElementById("totalprice").innerHTML = "Your Total :$ "+total;//displaying total
	 
}





