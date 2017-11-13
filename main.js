var attempt = 3; // Variable to count number of attempts.

// Below function Executes on click of login button.
function validate_login(){
	var email = document.getElementById("emailL").value;
	var password = document.getElementById("passwordL").value;
	if ( email == null || email == ""){
		alert ("Please enter the email.");
		return false;
	}
	if ( password == null || password == ""){
		alert ("Please enter the password.");
		return false;
	}
}

// Below function Executes on click of register button.
function validate_register(){
	var name = document.getElementById("nameR").value;
	var address = document.getElementById("addressR").value;
	var email = document.getElementById("emailR").value;
	var password = document.getElementById("passwordR").value;
	if ( name == null || name == ""){
		alert ("Please enter your Name.");
		return false;
	}
	if ( address == null || address == ""){
		alert ("Please enter your Address.");
		return false;
	}
	if ( email == null || email == ""){
		alert ("Please enter the email.");
		return false;
	}
	if ( password == null || password == ""){
		alert ("Please enter the password.");
		return false;
	}
}