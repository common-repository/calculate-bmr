/**
	 * My custom Javasctipr code 
	 */
function getbmrvalue(){
			
	// for Male: BMR = 10W + 6.25H - 5A + 5

	// BMR for Female: = 10W + 6.25H - 5A - 161
	
	let weight = document.getElementById('weight').value;
	let height = document.getElementById('height').value;
	let age = document.getElementById('age').value;
	let male = document.getElementById('male').value;
	let female = document.getElementById('female').value;

	if(document.getElementById('male').checked)
	{
		bmr_male = (10 * weight) + (6.25*height) - (5*age) + 5;

		// newBmiValue = newBmiValue.toFixed(2); //fixed the decimal to only two digits

		document.getElementById("bmr-value").value = bmr_male + ' Calories/day';

	}
	else
	{
		bmr_female = (10 * weight) + (6.25*height) - (5*age) -161;

		// newBmiValue = newBmiValue.toFixed(2); //fixed the decimal to only two digits

		document.getElementById("bmr-value").value = bmr_female + ' Calories/day';

	}
}