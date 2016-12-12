var numodd = false;
var number = 0;
var counter = 1;

function check1() {
	var part1 = number.length == 16;
	var part2 = number.length == 13;
	var part3 = number.substring(0, 1) == "4";

	if ((part1 || part2) && part3) {
		document.getElementById('display').innerHTML = "visa";
	}
}

function check2() {
	if (number.length == 16 && (number.substring(0, 2) == "51" ||
			number.substring(0, 2) == "52" || number.substring(0, 2) == "53" ||
			number.substring(0, 2) == "54" || number.substring(0, 2) == "55")) {
		document.getElementById('display').innerHTML = "mastercard";
	}
}

function check3() {
	if (number.length == 15 && (number.substring(0, 2) == "34" || number.substring(0, 2) == "37")) {
		document.getElementById('display').innerHTML = "American Express";
	}
}

function check4() {
	if (number.length == 16 && number.substring(0, 4) == "6011") {
		document.getElementById('display').innerHTML = "Discover";
	}
}

function isodd(num) {
	if (counter % 2 == 0) {
		numodd = false;
	}
	else {
		numodd = true;
	}
}

function isValidCard() {
	var card = number;
	var sum = 0;
	var i = 1;
	if (number.length >= 13) {
		while (card > 0) {
			isodd();
			if (numodd == true) {
				sum = sum + parseInt(card.substring(card.length - 2, card.length - 1));
				//card /= 10;
				card = card.substring(0, card.length - 1)
				i++;
			}
			else {
				//var j = card % 10;									alert("card "+card);
				var j = card.substring(card.length - 2, card.length - 1)

				if (j * 2 >= 10) {
					sum = sum + ((j * 2) - 9);

					//card /= 10;
					card = card.substring(0, card.length - 1)

					i++;
				}
				else {
					sum = sum + (2 * j);

					//card /= 10;
					card = card.substring(0, card.length - 1)
					i++;
				}
			}
			counter++;
		}
		document.getElementById('display2').innerHTML = "valid";

		if (sum % 10 == 0) {
			document.getElementById('display2').innerHTML = "not valid";
		}
		else {
			//document.getElementById('display2').innerHTML = sum;	
		}
	}
	else {
		document.getElementById('display2').innerHTML = "not valid";
	}
}

function start() {
	document.getElementById('display').innerHTML = "";
	document.getElementById('display2').innerHTML = "";

	number = document.getElementById("num").value;
	check1();
	check2();
	check3();
	check4();
	counter = 1;
	isValidCard();
	//document.getElementById('display2').innerHTML = 6011009781389403/10;	
}
