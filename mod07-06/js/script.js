

var sumOdd = 0;
var sumEven = 0;

var x = 0; //variable declatration
while(x<=50){ //condition
	if(x%2==0){
		sumEven += x;
	} else {
		sumOdd += x;
	}
		
		x++; // variable modification
}
alert("Even sum: "+sumEven+", Odd Sum: "+sumOdd);

// For Loops

for(var x=0; x<=50; x++){
	if(x%2==0){
		sumEven += x;
	} else {
		sumOdd += x;
	}
}
alert("Even sum: "+sumEven+", Odd Sum: "+sumOdd);


// 3 and 5 multiplier code exercise 



for(var x=0; x<=20; x++) {
	if(x % 3 === 0 && x % 5 === 0) {
		console.log(x + " is not a multiple of 3 and 5")
	} else if(x % 3 === 0 ){
		console.log(x + " is a multiple of 3 but not 5")
	} else if(x % 5 === 0 ){
		console.log(x + " is a multiple of 5 but not 3")
	} else {
		console.log (x + " is not a multiple of 5 or 3")
	}
}


for(var x=1;x<=5;x++){
	document.getElementById("loopDisplay").innerHTML += " *"
}