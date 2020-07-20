// Grab values from the submitted form in the URL

const words = new URLSearchParams(window.location.search);

/* Personal Information
1. name
2. agesex
3. reg_no
4. referred_by
5. date
*/

document.getElementById('enter_name').innerHTML = words.get('name') ;

// Age/Sex
const age = words.get('age') ;
const sex = words.get('sex') ;
document.getElementById("enter_agesex").innerHTML = age + '/' + sex ;

document.getElementById("enter_reg_no").innerHTML = words.get('reg_no') ;
document.getElementById("enter_referred_by").innerHTML = words.get('referred_by') ;
//Date
var today = new Date();
var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
document.getElementById("enter_date").innerHTML = date;

// Parameters
document.getElementById("O").innerHTML = words.get('o') ;
document.getElementById("H").innerHTML = words.get('h') ;
document.getElementById("AH").innerHTML = words.get('ah') ;
document.getElementById("BH").innerHTML = words.get('bh') ;

// Result
const result  = (words.get('Result'));
if((result == "Negative"))
{
	document.getElementById("result_typhoid_value").innerHTML = "Widal " +  result ;

}
else 
{
	document.getElementById("Rectangle_5").style.fill= "red" ;
	document.getElementById("result_typhoid_value").innerHTML = "Widal " + result ;
}

// Bilirbin
const total_bilirubin  = (words.get('total_bilirubin'));
if(total_bilirubin !== "-1"){

	document.getElementById("Biochemistry").innerHTML = "BIOCHEMISTRY" ;
	document.getElementById("Serum_Bilirubin").innerHTML = "Serum bilirubin" ;
	document.getElementById("Rectangle_8").style.opacity = 0.25;
	document.getElementById("Total_Bilirubin").innerHTML = "total bilirubin" ;
	document.getElementById("Result").innerHTML = total_bilirubin + ' mg%' ;
	document.getElementById("Range").innerHTML = "0-10" ;	

}

// Blood Sugar Random
const blood_sugar_random  = (words.get('blood_sugar_random'));
if((blood_sugar_random !== "-1")){

	document.getElementById("biochemistry_bilirubin").innerHTML = "BIOCHEMISTRY" ;
	document.getElementById("Blood_Sugar_Random").innerHTML = "Blood sugar Random" ;
	document.getElementById("RBS_Result").innerHTML = "RBS Result" ;
	document.getElementById("Result_").innerHTML = blood_sugar_random + ' mg%';
	document.getElementById("Range_").innerHTML = "70-150" ;	
	document.getElementById("Rectangle_7").style.opacity = 0.25;

}

//Contact Details
document.getElementById("lab_name").innerHTML = words.get('lab_name') ;
document.getElementById("address").innerHTML = words.get('address') ;


console.log(500);

