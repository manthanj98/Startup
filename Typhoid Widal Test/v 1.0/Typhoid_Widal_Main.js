/*
Personal Information
1. Name
2. Age
3. Sex
4. Reg No
5. Referred By
6. Date

Input
1. Result
2. S. Typhi "H"/S_Typhi_H
3. S. Typhi "O"/S_Typhi_O
4. S. Typhi "AH"/S_Typhi_AH
5. S. Typhi "BH"/S_Typhi_BH

	<form id="valform" action="Typhoid_Widal.html" method="GET">
	<table action="Typhoid_Widal.html" class="table" width="100%">
	<script type="text/javascript" src='./Typhoid_Widal_Main.js' defer></script>
*/

// Grab values from the submitted form in the URL

const words = new URLSearchParams(window.location.search);


const name1=(words.get('Name'));
const Age = (words.get('Age'));
const Sex = (words.get('Sex'));

const RegNo  = (words.get('Reg_No'));

const Date  = (words.get('Date1'));
const Result  = (words.get('Result'));
const ReferredBy  = (words.get('Referred'));
const h  = (words.get('h'));
const o  = (words.get('o'));
const ah  = (words.get('ah'));
const bh  = (words.get('bh'));
console.log (bh);
const nameChange=document.getElementById('Enter_Name');
const AgeChange = document.getElementById("Enter_Age");

const RegNoChange = document.getElementById("Enter_Reg_No");
const ReferredByChange = document.getElementById("Enter_Referred_By");
const DateChange = document.getElementById("Enter_Date");
const ResultChange = document.getElementById("Result");
const STyphiHChange = document.getElementById('H');
const STyphiOChange = document.getElementById('O');
const STyphiAHChange = document.getElementById('AH');
const STyphiBHChange = document.getElementById('BH');

nameChange.innerHTML= name1;
AgeChange.innerHTML=Age;
DateChange.innerHTML=Date;
RegNoChange.innerHTML =RegNo;
ReferredByChange.innerHTML =ReferredBy;
ResultChange.innerHTML =Result;
STyphiHChange.innerHTML =h;
STyphiOChange.innerHTML =o;
STyphiAHChange.innerHTML =ah;
STyphiBHChange.innerHTML =bh;

if(Result==='Negative')
{
	document.getElementById("Rectangle_6").style.fill= "green" ;
	document.getElementById("Rectangle_6").style.fillOpacity=0.25;

}
else
{document.getElementById("Rectangle_6").style.fill= "red" ;
document.getElementById("Rectangle_6").style.fillOpacity=0.25;
}
