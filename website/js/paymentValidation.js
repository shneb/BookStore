document.getElementById("btn").addEventListener("click", validateAll);
document.getElementById("cvvInput").addEventListener("change", cvvCheck);
document.getElementById("expiryYear").addEventListener("change", dateCheck);
document.getElementById("cardNumberInput").addEventListener("change", creditCardCheck);

dateGeneretor();

// this function is to make sure all the validations are right
function validateAll(e) {
	if (cvvCheck() == false || dateCheck() == false || creditCardCheck() == false) {
		document.getElementById("hidden").value = 1;
		e.preventDefault();
	} else {
		document.getElementById("hidden").value = -1;

	}
}

// this function is too check cvv
function cvvCheck() {
	const regExp = /^[0-9]{3,4}$/;
	const cvvInput = document.getElementById("cvvInput").value;


	if (regExp.test(cvvInput)) {
		return true;

	} else {
		document.getElementById("cvvError").innerHTML = "Cvv must be 3 or 4 digits!";
		document.getElementById("cvvError").style.background = "#dbad2c";

		return false;
	}
}

// this function is to check if the right card number is right for the right card
function creditCardCheck() {

	const amexRegExp = /^3[47][0-9]{13}$/;
	const visaRegExp = /^4[0-9]{12}(?:[0-9]{3})?$/;
	const masterRegExp = /^(5[1-5][0-9]{14}|2(22[1-9][0-9]{12}|2[3-9][0-9]{13}|[3-6][0-9]{14}|7[0-1][0-9]{13}|720[0-9]{12}))$/;
	const JCBRegExp = /^(?:2131|1800|35\d{3})\d{11}$/;
	const MaestroRegExp = /^(5018|5020|5038|6304|6759|6761|6763)[0-9]{8,15}$/;

	const cardType = document.getElementById("cardType").value;
	const paymentInput = document.getElementById("cardNumberInput").value;

	let cardRegExp;

	switch (cardType) {
		case "Visa card":
			cardRegExp = visaRegExp;
			break;
		case "Amex":
			cardRegExp = amexRegExp;
			break;
		case "Mastercard":
			cardRegExp = masterRegExp;
			break;
		case "JCB Card":
			cardRegExp = JCBRegExp;
			break;
		case "Maestro Card":
			cardRegExp = MaestroRegExp;
			break;
	}
	if (cardRegExp.test(paymentInput)) {
		document.getElementById("cardNumberError").innerHTML = "correct";
		document.getElementById("cardNumberError").style.background = "#199e7d";
		return true;
	} else {
		document.getElementById("cardNumberError").innerHTML = "This is not valid " + cardType + " number!";
		document.getElementById("cardNumberError").style.background = "#dbad2c";

		return false;
	}
}

// this function is to check the date
function dateCheck() {

	const expiryMonth = document.getElementById("expiryMonth").value;
	const expiryYear = document.getElementById("expiryYear").value;

	const today = new Date();
	let expiryDate = new Date();

	expiryDate.setFullYear(expiryYear, expiryMonth, 0);


	if (expiryDate < today) {
		document.getElementById("expiryError").innerHTML = "Your card must be up to date!";
		document.getElementById("expiryError").style.background = "#dbad2c";

		return false;
	} else {

		document.getElementById("expiryError").innerHTML = "correct";
		document.getElementById("expiryError").style.background = "#199e7d";

		return true;
	}
}

// this function is to generate the months and the years
function dateGeneretor() {

	let yearOption;
	let monthOption;
	let years;

	let d = new Date();
	let currentDate = d.getFullYear();
	// this loop to generate years
	for (let i = 1; i <= 12; i++) {
		years = ((currentDate - 1) + i);
		yearOption += ("<option" + " value=" + "'" + years + "'" + ">" + years + "</option>");
		document.getElementById("expiryYear").innerHTML = yearOption;
	}
	// this loop to generate months
	for (let i = 1; i <= 12; i++) {
		monthOption += ("<option>" + n(i) + "</option>");
		document.getElementById("expiryMonth").innerHTML = monthOption;
	}
}

// this function is to make sure the months are 2 digits
function n(n) {
	return n > 9 ? "" + n : "0" + n;
}