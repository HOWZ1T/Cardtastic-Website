//REGEX FOR MATCHING EMAILS BASED ON THE EMAIL STRUCTURE DETAIL AT: https://en.wikipedia.org/wiki/Email_address
let emailRegex = /^[^.][a-zA-Z0-9!#$%&'*+-/=?^_`{|}~.]{1,64}@{1}[a-zA-Z0-9-.]{1,255}.[a-zA-Z0-9-.]{1,63}\.[a-zA-Z0-9]{1,63}$/;
let nameRegex = /^[a-zA-Z .,'-]+$/;
let addressRegex = /^[a-zA-Z0-9 .,'-/\n]+$/;
let phoneRegex = /^(\+614|[(]04[)]|04)[ ][0-9]{3,3}[ ][0-9]{3,3}[ ][0-9]{2,2}$/;
let creditCardRegex = /^[^ ][ 0-9]{12,19}$/;
let visaRegex = /^4[ 0-9]{13,18}$/;
let masterCardRegex = /^5[0-5]([ 0-9]){12,21}$/;

function nameUpdate()
{
	let nameElement = document.getElementById("name");
	let labelElement = document.getElementById("lblName");
	let name = nameElement.value;
	let matches = nameRegex.test(name);
	
	if(matches == true)
	{
		nameElement.style.backgroundImage = "url(\'../img/yes.png\')";
		labelElement.removeAttribute("class");
		labelElement.removeAttribute("tip");
		return true;
	}
	else
	{
		nameElement.style.backgroundImage = "url(\'../img/no.png\')";
		labelElement.setAttribute("class", "tooltip");
		labelElement.setAttribute("tip", "Invalid input! Valid characters are: A-Z .,\'-");
		return false;
	}
}

function emailUpdate()
{
	let emailElement = document.getElementById("email");
	let labelElement = document.getElementById("lblEmail");
	let email = emailElement.value;
	let matches = emailRegex.test(email);
	
	if(matches == true)
	{
		emailElement.style.backgroundImage = "url(\'../img/yes.png\')";
		labelElement.removeAttribute("class");
		labelElement.removeAttribute("tip");
		return true;
	}
	else
	{
		emailElement.style.backgroundImage = "url(\'../img/no.png\')";
		labelElement.setAttribute("class", "tooltip");
		labelElement.setAttribute("tip", "Invalid email address!");
		return false;
	}
}


function addressUpdate()
{
	let addressElement = document.getElementById("address");
	let labelElement = document.getElementById("lblAddress");
	let address = addressElement.value;
	let matches = addressRegex.test(address);
	
	if(matches == true)
	{
		addressElement.style.backgroundImage = "url(\'../img/yes.png\')";
		labelElement.removeAttribute("class");
		labelElement.removeAttribute("tip");
		return true;
	}
	else
	{
		addressElement.style.backgroundImage = "url(\'../img/no.png\')";
		labelElement.setAttribute("class", "tooltip");
		labelElement.setAttribute("tip", "Invalid input! Valid characters are: A-Z .,\'-/");
		return false;
	}
}

function phoneUpdate()
{
	let phoneElement = document.getElementById("phone");
	let labelElement = document.getElementById("lblPhone");
	let phone = phoneElement.value;
	let matches = phoneRegex.test(phone);
	
	if(matches == true)
	{
		phoneElement.style.backgroundImage = "url(\'../img/yes.png\')";
		labelElement.removeAttribute("class");
		labelElement.removeAttribute("tip");
		return true;
	}
	else
	{
		phoneElement.style.backgroundImage = "url(\'../img/no.png\')";
		labelElement.setAttribute("class", "tooltip");
		labelElement.setAttribute("tip", "Invalid input! Valid Formats: 04 123 456 78 [OR] (04) 123 456 78 [OR] +614 123 456 78");
		return false;
	}
}

function creditCardUpdate()
{
	let creditCardElement = document.getElementById("creditCard");
	let labelElement = document.getElementById("lblCreditCard");
	let creditCard = creditCardElement.value;
	let matches = creditCardRegex.test(creditCard);
	
	if(matches == true)
	{
		//Check if visa
		if(visaRegex.test(creditCard) == true)
		{
			creditCardElement.style.backgroundImage = "url(\'../img/visa.png\')";
		}
		else if(masterCardRegex.test(creditCard) == true) //check if master card
		{
			creditCardElement.style.backgroundImage = "url(\'../img/mastercard.png\')";
		}
		else
		{
			creditCardElement.style.backgroundImage = "url(\'../img/yes.png\')";
		}
		labelElement.removeAttribute("class");
		labelElement.removeAttribute("tip");
		return true;
	}
	else
	{
		creditCardElement.style.backgroundImage = "url(\'../img/no.png\')";
		labelElement.setAttribute("class", "tooltip");
		labelElement.setAttribute("tip", "Invalid input! Valid Characters: 0-9 Example: 1234 1234 1234");
		return false;
	}
}

function monthDiff(dateA, dateB)
{
	let months;
	months = (dateB.getFullYear() - dateA.getFullYear())*12;
	months -= dateA.getMonth() + 1;
	months += dateB.getMonth();
	
	return months <= 0 ? 0 : months; // makes sure to return a positive value
}

function expiryDateUpdate()
{
	let expiryDateElement = document.getElementById("expiryDate");
	let labelElement = document.getElementById("lblExpiryDate");
	let expiryDate = new Date(expiryDateElement.value);
	let curDate = new Date();
	let diff = monthDiff(curDate, expiryDate);
	let matches = diff >= 1 ? true : false;
	
	if(matches == true)
	{
		expiryDateElement.style.backgroundImage = "url(\'../img/yes.png\')";
		labelElement.removeAttribute("class");
		labelElement.removeAttribute("tip");
		return true;
	}
	else
	{
		expiryDateElement.style.backgroundImage = "url(\'../img/no.png\')";
		labelElement.setAttribute("class", "tooltip");
		labelElement.setAttribute("tip", "Invalid input! The card cannot expire within 1 month of purchase!");
		return false;
	}
}

function validate()
{
	if(nameUpdate() == true && emailUpdate() == true && addressUpdate() == true && phoneUpdate() == true && creditCardUpdate() == true && expiryDateUpdate() == true)
	{
		return true;
	}
	else
	{
		alert("One or more required fields have not been correctly filled out!");
		return false;
	}
}