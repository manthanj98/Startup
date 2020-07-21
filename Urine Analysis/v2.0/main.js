// Grab Values from the search bar
const words = new URLSearchParams(window.location.search);

// Personal Infomration
document.getElementById('Name').innerHTML = (words.get('name'));
document.getElementById("AgeSex").innerHTML = (words.get('age')); + '/' + (words.get('sex'));
document.getElementById("Reg_No").innerHTML = (words.get('reg_no'));
document.getElementById("Referred_By").innerHTML = (words.get('referred_by'));
document.getElementById("Date").innerHTML = (words.get('date'));

// Pathology Contact Details
document.getElementById("lab_name").innerHTML = (words.get('lab_name'));
document.getElementById("address").innerHTML = (words.get('address'));
document.getElementById("phone_number").innerHTML = (words.get('phone_number'));

// Microscopic Examination
document.getElementById("Epithelial_Cells").innerHTML = (words.get('epithelial'));
document.getElementById("PUS_Cells").innerHTML = (words.get('PUS'));

// Physical Examination
document.getElementById("Color").innerHTML = (words.get('color'));
document.getElementById("Quantity").innerHTML = (words.get('quantity'));
document.getElementById("Appearnace").innerHTML = (words.get('apperance'));
document.getElementById("Specific_Gravity").innerHTML = (words.get('sg'));
document.getElementById("Reaction").innerHTML = (words.get('reaction'));

// Chemical Examination
const RBC = (words.get('rbc'));
const Crystals  = (words.get('crystals'));
const Bacteria  = (words.get('bacteria'));
const Sugar  = (words.get('sugar'));
const Blood  = (words.get('blood'));
const Proteins  = (words.get('proteins'));

console.log(Crystals);

var i,j=0,k=0;
var parameter = [RBC, Crystals, Bacteria, Sugar, Blood, Proteins];
var parameter_name = ["RBC", "Crystal", "Bacteria", "Sugar", "Blood", "Proteins"];
var found = ["ID1" , "ID2" ,"ID3","ID4","ID5","ID6","ID7"];
var not_found = ["ID8" , "ID9" ,"ID10","ID11","ID12","ID13","ID14"];

for(i = 0; i<parameter.length; i++){
    if(parameter[i] == "Absent"){
        document.getElementById(not_found[j]).innerHTML = parameter_name[i]
        j++;
    }else{
        document.getElementById(found[k]).innerHTML = parameter_name[i]
        k++;
    }
}

if(k == 0){
    document.getElementById("nonefound").innerHTML = "None of the chemicals were found";
}   