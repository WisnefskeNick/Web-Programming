function myFunction() {
	//first name____________________________________________________________________________________________________________________________________________________
	var fname=document.getElementById("fname");
	var fnamelbl=document.getElementById("fnamelbl");
	//last name_____________________________________________________________________________________________________________________________________________________
	var lname=document.getElementById("lname");
	var lnamelbl=document.getElementById("lnamelbl");
	//street________________________________________________________________________________________________________________________________________________________
	var street=document.getElementById("Address");
	var streetlbl=document.getElementById("Addresslbl");
	//city__________________________________________________________________________________________________________________________________________________________
	var city=document.getElementById("City");
	var citylbl=document.getElementById("Citylbl");
	//state_________________________________________________________________________________________________________________________________________________________
	var states=document.getElementById("state");
	var stateslbl=document.getElementById("statelbl");
	//zip___________________________________________________________________________________________________________________________________________________________
	var zip=document.getElementById("Zip");
	var ziplbl=document.getElementById("Ziplbl");
	//phone_________________________________________________________________________________________________________________________________________________________
	var phone=document.getElementById("phone");
	var phonelbl=document.getElementById("phonelbl");
	//Email_________________________________________________________________________________________________________________________________________________________
	var email=document.getElementById("email");
	var emaillbl=document.getElementById("emaillbl");
	
	var userInput=document.getElementById("userInput");
	var userInputlbl=document.getElementById("userInputlbl");
	//order form____________________________________________________________________________________________________________________________________________________
	var contactForm = document.forms["contactForm"];
	
	//first name____________________________________________________________________________________________________________________________________________________
	if (fname.value) {
		fnamelbl.style.color = "black";
	}
	else if (!fname.value) {
		fnamelbl.style.color = "red";
	}
	
	//last name_____________________________________________________________________________________________________________________________________________________
	if (lname.value) {
		lnamelbl.style.color = "black";
	}
	else if (!lname.value) {
		lnamelbl.style.color = "red";
	}
	
	//street________________________________________________________________________________________________________________________________________________________
	if (street.value) {
		streetlbl.style.color = "black";
	}
	else if (!street.value) {
		streetlbl.style.color = "red";
	}
	
	//city__________________________________________________________________________________________________________________________________________________________
	if (city.value) {
		citylbl.style.color = "black";
	}
	else if (!city.value) {
		citylbl.style.color = "red";
	}
	
	//state_________________________________________________________________________________________________________________________________________________________
	if (states.value) {
		stateslbl.style.color = "black";
	}
	else if (!states.value) {
		stateslbl.style.color = "red";
	}
	
	//zip___________________________________________________________________________________________________________________________________________________________
	if (zip.value) {
		ziplbl.style.color = "black";
	}
	else if (!zip.value){
		ziplbl.style.color = "red";
	}
	
	//phone_________________________________________________________________________________________________________________________________________________________
	if (phone.value) {
		phonelbl.style.color = "black";
	}
	else if (!phone.value) {
		phonelbl.style.color = "red";
	}
	//Email_________________________________________________________________________________________________________________________________________________________
	if (email.value) {
		emaillbl.style.color = "black";
	}
	else if (!email.value) {
		emaillbl.style.color = "red";
	}
	
	if (userInput.value) {
		userInputlbl.style.color = "black";
	}
	else if (!userInput.value) {
		userInputlbl.style.color = "red";
	}
	//order form____________________________________________________________________________________________________________________________________________________
	if (fname.value && lname.value && street.value && city.value && states.value && zip.value && phone.value && email.value && userInput.value) {	
		if (confirm("Submit?")) {
			contactForm.submit();
		}
	}
}