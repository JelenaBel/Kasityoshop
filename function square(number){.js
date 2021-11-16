function square(number){
	numberRes = number*number;
	return numberRes;
}

function halve(number){
	numberHal = number/2;
	return numberHal;
}

var loop = function ( counter, number, name){
	if (counter<1){
		return console.log("There has to be at least 1 loop!");
	} else{
	
	var result = number;
	if (name == halve){
		
		var i = 1;
		while (i<=counter){
			result = halve(result);
			i = i+1;
		}
		return result;
		} else if (name == square){
			
			var j = 1;
		while (j<=counter){
			result = square(result);
			j = j+1;
		}
			return result;
		}
		
}
return result;
}
		
