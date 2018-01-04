function changeMeToNumber() {
	var x = 101;
	document.getElementById("firstVar").innerHTML = x;
}


// 
// var message = "Welcome to JavaScript Programming";

function getNewName() {
	var name = "Juan Dela Cruz";
	document.getElementById("secondVar").innerHTML = name;
}

function message() {
	var message = "Welcome to JavaScript Programming";
	document.getElementById("thirdVar").innerHTML = message;
}


// Expressions 

var result = 0;

// document.getElementById("var1").value = var1;
// document.getElementById("var2").value = var2;
document.getElementById("result").innerHTML = result;


function addThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result = var1 + var2;
	document.getElementById("result").innerHTML = result;
}

function subtractThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result = var1 - var2;
	document.getElementById("result").innerHTML = result;
}


function divideThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);	
	result = var1 / var2;
	document.getElementById("result").innerHTML = result;
}

function multiplyThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);	
	result = var1 * var2;
	document.getElementById("result").innerHTML = result;
}

function modulateThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);	
	result = var1 % var2;
	document.getElementById("result").innerHTML = result;
}