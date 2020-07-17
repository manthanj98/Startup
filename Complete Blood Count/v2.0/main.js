// Grab values from the submitted form in the URL
const words = new URLSearchParams(window.location.search);

const address =(words.get('address1'));
const pathoname=(words.get('pathoname1'));
const sex=(words.get('sex1'));
const doctorname=(words.get('doctorname1'));
const name1 = (words.get('name1'));
const patientid = (words.get('patientid1'));
const age1  = (words.get('age1'));
const age=`${age1}/${sex}`
const receivedate  = (words.get('receivedate'));
const printdate  = (words.get('printdate'));
const haemoglobin  = (words.get('haemoglobin'));
const platelet  = (words.get('platelet'));
const rbc  = (words.get('rbc'));
const tlc  = (words.get('tlc'));
const  pcv = (words.get('pvc'));
const  mcv = (words.get('mcv'));
const  neutrophils = (words.get('neutrophils'));
const   lymphocytes= (words.get('lymphocytes'));
const  mch = (words.get('mch'));
const  mchc = (words.get('mchc'));
const  rdwsd = (words.get('rdwsd'));
const  rdwcv = (words.get('rdwcv'));
const wbc = (words.get('wbc'));
const   monocytes= (words.get('monocytes'));
const eosinophils  = (words.get('eosinophils'));
const   basophil= (words.get('basophil'));
const  mpv = (words.get('mpv'));

var primaryr =new Array('Range_1','Range_2','Range_3','Range_4')
var primaryu =new Array('Unit_1','Unit_2','Unit_3','Unit_4')
var primaryv =new Array('Value_1','Value_2','Value_3','Value_4')
var primaryp =new Array('Parameter_1','Parameter_2','Parameter_3','Parameter_4' )

var dlcr =new Array('Range_5','Range_6','Range_7','Range_8')
var dlcv =new Array('Value_5','Value_6','Value_7','Value_8')
var dlcp =new Array('Parameter_5','Parameter_6','Parameter_7','Parameter_8')
var rbctabler =new Array('Range_9','Range_10','Range_11','Range_12')
var rbctablev =new Array('Value_9','Value_10','Value_11','Value_12')
var rbctablep =new Array('Parameter_9','Parameter_10','Parameter_11','Parameter_12')

var i=0;
var j=0;
var k=0;
var rbccheck=0;
var haemocheck=0;
var plateletscheck=0;
var wbccheck=0;
var neutrocheck=0;
var monocheck=0;
var lymphocheck=0;
var eosinocheck=0;
var pcvcheck=0;
var mchcheck=0;
var mchccheck=0;
var mcvcheck=0;
console.log(primaryr[i]);
console.log(dlcv[j]);

const doctornamechange = document.getElementById("Referred_By");
const namechange = document.getElementById("Name");
const patientidchange = document.getElementById("Reg_No");
const agesexchange = document.getElementById("AgeSex");
const printdatechange = document.getElementById("Date");
const pathonamechange = document.getElementById("Lab_Name");
const addresschange =document.getElementById("Address");


pathonamechange.innerHTML=pathoname;
addresschange.innerHTML=address;
doctornamechange.innerHTML =doctorname;
namechange.innerHTML = name1;
patientidchange.innerHTML = patientid ; 
agesexchange.innerHTML =age;
printdatechange.innerHTML = printdate;


if(sex==='F' || sex==='f' || sex==='female'||sex==='Female')
{
  if(rbc>5.8 || rbc<3.8)
  {
    rbccheck=1;
    document.getElementById(primaryr[i]).innerHTML="3.8-5.8";
    document.getElementById(primaryu[i]).innerHTML="mili/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=rbc;
    document.getElementById(primaryv[i]).style.color="red";
    document.getElementById(primaryp[i]).innerHTML="RBC";
    i++;
  }
  if(haemoglobin>16 || rbc<12)
  {
    
    document.getElementById(primaryr[i]).innerHTML="12-16";
    document.getElementById(primaryu[i]).innerHTML="g/dl";
    document.getElementById(primaryv[i]).innerHTML=haemoglobin;
    document.getElementById(primaryv[i]).style.color="red";
    
    document.getElementById(primaryp[i]).innerHTML="Haemoglobin";
    i++;
    haemocheck=1;
  }
  
  if(platelet<1.5)
  {
    
    document.getElementById(primaryr[i]).innerHTML="1.5-4.5";
    document.getElementById(primaryu[i]).innerHTML="lakhs/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=platelet;
    document.getElementById(primaryv[i]).style.color="red";
    
    document.getElementById(primaryp[i]).innerHTML="Platelet";
    i++;
    plateletscheck=1;
  }
  if(wbc<4000||wbc>11000)
  {
    
    document.getElementById(primaryr[i]).innerHTML="4000-11000";
    document.getElementById(primaryu[i]).innerHTML="/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=wbc;
    document.getElementById(primaryv[i]).style.color="red";
    document.getElementById(primaryp[i]).innerHTML="WBC";
    i++;
    wbccheck=1;
  }
  if(rbccheck===0)
  {
  
    document.getElementById(primaryr[i]).innerHTML="3.8-5.8";
    document.getElementById(primaryu[i]).innerHTML="mili/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=rbc;
    document.getElementById(primaryp[i]).innerHTML="RBC";
    i++;
  }
  if(haemocheck===0)
  {
    
    document.getElementById(primaryr[i]).innerHTML="12-16";
    document.getElementById(primaryu[i]).innerHTML="g/dl";
    document.getElementById(primaryv[i]).innerHTML=haemoglobin;
    document.getElementById(primaryp[i]).innerHTML="Haemoglobin";
    i++;
    
  }
  
  if(plateletscheck===0)
  {
    
    document.getElementById(primaryr[i]).innerHTML="1.5-4.5";
    document.getElementById(primaryu[i]).innerHTML="lakhs/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=platelet;
    document.getElementById(primaryp[i]).innerHTML="Platelet";
    i++;
  
  }
  if(wbccheck===0)
  {
    
    document.getElementById(primaryr[i]).innerHTML="4000-11000";
    document.getElementById(primaryu[i]).innerHTML="/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=wbc;
    document.getElementById(primaryp[i]).innerHTML="WBC";
    i++;
  }




  if(neutrophils>65 || neutrophils<40)
  {
    neutrocheck=1;
    document.getElementById(dlcr[j]).innerHTML="40-65";
    document.getElementById(dlcv[j]).innerHTML=neutrophils;
    document.getElementById(dlcv[j]).style.color="red";
    
    document.getElementById(dlcp[j]).innerHTML="NEUTROPHILS";
    j++;
  }
  if(lymphocytes>45 || lymphocytes<20)
  {
    lymphocheck=1;
    document.getElementById(dlcr[j]).innerHTML="20-45";
    document.getElementById(dlcv[j]).innerHTML=lymphocytes;
    document.getElementById(dlcv[j]).style.color="red";

    document.getElementById(dlcp[j]).innerHTML="LYMPHOCYTES";
    j++;
  }
  if(monocytes>6 || monocytes<0)
  {
    monocheck=1;
    document.getElementById(dlcr[j]).innerHTML="0-6";
    document.getElementById(dlcv[j]).innerHTML=monocytes;
    document.getElementById(dlcv[j]).style.color="red";
    document.getElementById(dlcp[j]).innerHTML="MONOCYTES";
    j++;
  }
  if(eosinophils>5 || eosinophils<0)
  {
    eosinocheck=1;
    document.getElementById(dlcr[j]).innerHTML="0-5";
    document.getElementById(dlcv[j]).innerHTML=eosinophils;
    document.getElementById(dlcv[j]).style.color="red";
    document.getElementById(dlcp[j]).innerHTML="EOSINOPHILS";
    j++;
  }
  if(neutrocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="3.8-5.8";
    document.getElementById(dlcv[j]).innerHTML=neutrophils;
    document.getElementById(dlcp[j]).innerHTML="NEUTROPHILS";
    j++;
  }
  if(lymphocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="20-25";
    document.getElementById(dlcv[j]).innerHTML=lymphocytes;
    document.getElementById(dlcp[j]).innerHTML="LYMPHOCYTES";
    j++;
  }
  if(monocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="0-6";
    document.getElementById(dlcv[j]).innerHTML=monocytes;
    document.getElementById(dlcp[j]).innerHTML="MONOCYTES";
    j++;
  }
  if(eosinocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="0-5";
    document.getElementById(dlcv[j]).innerHTML=eosinophils;
    document.getElementById(dlcp[j]).innerHTML="EOSINOPHILS";
    j++;
  }
  



  if(pcv>47 || pcv<35)
  {
    pcvcheck=1;
    document.getElementById(rbctabler[k]).innerHTML="35-47";
    document.getElementById(rbctablev[k]).innerHTML=pcv;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="PCV";
    k++;
  }
  
  
  if(mcv>96 || mcv<76)
  {
    mcvcheck=1;
    document.getElementById(rbctabler[k]).innerHTML="76-96";
    document.getElementById(rbctablev[k]).innerHTML=mcv;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="MCV";
    k++;
  }
  
  if(mch>32 || mch<27)
  {
    mchcheck=1;
    document.getElementById(rbctabler[k]).innerHTML="27-32";
    document.getElementById(rbctablev[k]).innerHTML=mch;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="MCH";
    k++;
  }
  
  if(mchc>36 || mchc<32)
  {
    mchccheck=1;
    document.getElementById(rbctabler[k]).innerHTML="32-36";
    document.getElementById(rbctablev[k]).innerHTML=mchc;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="MCHC";
    k++;
  }
  
  if(pcvcheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="35-47";
    document.getElementById(rbctablev[k]).innerHTML=pcv;
    document.getElementById(rbctablep[k]).innerHTML="PCV";
    k++;
  }
  
  
  if(mcvcheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="76-96";
    document.getElementById(rbctablev[k]).innerHTML=mcv;
    document.getElementById(rbctablep[k]).innerHTML="MCV";
    k++;
  }
  
  if(mchcheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="27-32";
    document.getElementById(rbctablev[k]).innerHTML=mch;
    document.getElementById(rbctablep[k]).innerHTML="MCH";
    k++;
  }
  
  if(mchccheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="32-36";
    document.getElementById(rbctablev[k]).innerHTML=mchc;
    document.getElementById(rbctablep[k]).innerHTML="MCHC";
    k++;
  }
  
var optsrbc = {
  angle: -0.09,
  lineWidth: 0.3,
  limitMax: 'true',
  strokeColor: 'red',
  radiusScale: 1,
  generateGradient: true,
    pointer: {
    length: 0.5, // // Relative to gauge radius
    strokeWidth: 0.03, // The thickness
    color: '#07a2ea' // Fill color
  },
  staticLabels: {
  font: "90% sans-serif",  // Specifies font
  labels: [],  // Print labels at these values
  color: "black",  // Optional: Label text color
  fractionDigits: 2  // Optional: Numerical precision. 0=round off.
},  // just experiment with them
  strokeColor: 'red',   // to see which ones work best for you
  staticZones: [
   {strokeStyle: "yellow", min: 0, max: 33}, // Yellow
   {strokeStyle: "green", min: 33, max: 67}, // Green
   {strokeStyle: "red", min: 67, max: 100}, // Yellow
],
  generateGradient: true
};
var target = document.getElementById('rbc_chart'); // your canvas element
var gauge = new Gauge(target).setOptions(optsrbc); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.animationSpeed = 32; // set animation speed (32 is default value)
if(rbc<4 )
gauge.set(rbc*33/4);
else if (rbc>5.8)
gauge.set(67+(rbc-5.8)*34/8)
else 
gauge.set(33+(rbc-3.8)*34/2)



var opts = {
  angle: -0.09,
  lineWidth: 0.3,
  limitMax: 'true',
  strokeColor: 'red',
  radiusScale: 1,
  generateGradient: true,
   pointer: {
   length: 0.5, // // Relative to gauge radius
   strokeWidth: 0.03, // The thickness
   color: '#07a2ea' // Fill color
  },
  staticLabels: {
  font: "90% sans-serif",  // Specifies font
  labels: [],  // Print labels at these values
  color: "black",  // Optional: Label text color
  fractionDigits: 2  // Optional: Numerical precision. 0=round off.
  },  // just experiment with them
  strokeColor: 'red',   // to see which ones work best for you
  staticZones: [
  {strokeStyle: "yellow", min: 0, max:33 }, // Yellow
  {strokeStyle: "green", min: 33, max: 66}, // Green
  {strokeStyle: "red", min: 66, max: 100}, // Yellow
  ],
  generateGradient: true
  };
  var target = document.getElementById('hem_chart'); // your canvas element
  var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
  gauge.maxValue = 100; // set max gauge value
  gauge.animationSpeed = 32; // set animation speed (32 is default value)
  if (haemoglobin<12)
  
  gauge.set(haemoglobin*33/12);
  else if (haemoglobin>16)
  gauge.set(66+ (haemoglobin-16)*34/12);
  else 
  gauge.set(33+(haemoglobin-12)*33/4);
  
}



else
{
  if(rbc>6.5 || rbc<4.5)
  {
    rbccheck=1;
    document.getElementById(primaryr[i]).innerHTML="4.5-6.5";
    document.getElementById(primaryu[i]).innerHTML="mili/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=rbc;
    document.getElementById(primaryv[i]).style.color="red";
    document.getElementById(primaryp[i]).innerHTML="RBC";
    i++;
  }
  if(haemoglobin>18 || rbc<14)
  {
    
    document.getElementById(primaryr[i]).innerHTML="14-18";
    document.getElementById(primaryu[i]).innerHTML="g/dl";
    document.getElementById(primaryv[i]).innerHTML=haemoglobin;
    document.getElementById(primaryv[i]).style.color="red";
    
    document.getElementById(primaryp[i]).innerHTML="Haemoglobin";
    i++;
    haemocheck=1;
  }
  
  if(platelet<1.5)
  {
    
    document.getElementById(primaryr[i]).innerHTML="1.5-4.5";
    document.getElementById(primaryu[i]).innerHTML="lakhs/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=platelet;
    document.getElementById(primaryv[i]).style.color="red";
    
    document.getElementById(primaryp[i]).innerHTML="Platelet";
    i++;
    plateletscheck=1;
  }
  if(wbc<4000||wbc>11000)
  {
    
    document.getElementById(primaryr[i]).innerHTML="4000-11000";
    document.getElementById(primaryu[i]).innerHTML="/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=wbc;
    document.getElementById(primaryv[i]).style.color="red";
    document.getElementById(primaryp[i]).innerHTML="WBC";
    i++;
    wbccheck=1;
  }
  if(rbccheck===0)
  {
  
    document.getElementById(primaryr[i]).innerHTML="4.5-6.5";
    document.getElementById(primaryu[i]).innerHTML="mili/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=rbc;
    document.getElementById(primaryp[i]).innerHTML="RBC";
    i++;
  }
  if(haemocheck===0)
  {
    
    document.getElementById(primaryr[i]).innerHTML="14-18";
    document.getElementById(primaryu[i]).innerHTML="g/dl";
    document.getElementById(primaryv[i]).innerHTML=haemoglobin;
    document.getElementById(primaryp[i]).innerHTML="Haemoglobin";
    i++;
    
  }
  
  if(plateletscheck===0)
  {
    
    document.getElementById(primaryr[i]).innerHTML="1.5-4.5";
    document.getElementById(primaryu[i]).innerHTML="lakhs/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=platelet;
    document.getElementById(primaryp[i]).innerHTML="Platelet";
    i++;
  
  }
  if(wbccheck===0)
  {
    
    document.getElementById(primaryr[i]).innerHTML="4000-11000";
    document.getElementById(primaryu[i]).innerHTML="/cu.mm";
    document.getElementById(primaryv[i]).innerHTML=wbc;
    document.getElementById(primaryp[i]).innerHTML="WBC";
    i++;
  }




  if(neutrophils>65 || neutrophils<40)
  {
    neutrocheck=1;
    document.getElementById(dlcr[j]).innerHTML="40-65";
    document.getElementById(dlcv[j]).innerHTML=neutrophils;
    document.getElementById(dlcv[j]).style.color="red";
    
    document.getElementById(dlcp[j]).innerHTML="NEUTROPHILS";
    j++;
  }
  if(lymphocytes>45 || lymphocytes<20)
  {
    lymphocheck=1;
    document.getElementById(dlcr[j]).innerHTML="20-45";
    document.getElementById(dlcv[j]).innerHTML=lymphocytes;
    document.getElementById(dlcv[j]).style.color="red";

    document.getElementById(dlcp[j]).innerHTML="LYMPHOCYTES";
    j++;
  }
  if(monocytes>6 || monocytes<0)
  {
    monocheck=1;
    document.getElementById(dlcr[j]).innerHTML="0-6";
    document.getElementById(dlcv[j]).innerHTML=monocytes;
    document.getElementById(dlcv[j]).style.color="red";
    document.getElementById(dlcp[j]).innerHTML="MONOCYTES";
    j++;
  }
  if(eosinophils>5 || eosinophils<0)
  {
    eosinocheck=1;
    document.getElementById(dlcr[j]).innerHTML="0-5";
    document.getElementById(dlcv[j]).innerHTML=eosinophils;
    document.getElementById(dlcv[j]).style.color="red";
    document.getElementById(dlcp[j]).innerHTML="EOSINOPHILS";
    j++;
  }
  if(neutrocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="3.8-5.8";
    document.getElementById(dlcv[j]).innerHTML=neutrophils;
    document.getElementById(dlcp[j]).innerHTML="NEUTROPHILS";
    j++;
  }
  if(lymphocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="20-25";
    document.getElementById(dlcv[j]).innerHTML=lymphocytes;
    document.getElementById(dlcp[j]).innerHTML="LYMPHOCYTES";
    j++;
  }
  if(monocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="0-6";
    document.getElementById(dlcv[j]).innerHTML=monocytes;
    document.getElementById(dlcp[j]).innerHTML="MONOCYTES";
    j++;
  }
  if(eosinocheck===0)
  {
    
    document.getElementById(dlcr[j]).innerHTML="0-5";
    document.getElementById(dlcv[j]).innerHTML=eosinophils;
    document.getElementById(dlcp[j]).innerHTML="EOSINOPHILS";
    j++;
  }
  



  if(pcv>54 || pcv<40)
  {
    pcvcheck=1;
    document.getElementById(rbctabler[k]).innerHTML="40-54";
    document.getElementById(rbctablev[k]).innerHTML=pcv;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="PCV";
    k++;
  }
  
  
  if(mcv>96 || mcv<76)
  {
    mcvcheck=1;
    document.getElementById(rbctabler[k]).innerHTML="76-96";
    document.getElementById(rbctablev[k]).innerHTML=mcv;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="MCV";
    k++;
  }
  
  if(mch>32 || mch<27)
  {
    mchcheck=1;
    document.getElementById(rbctabler[k]).innerHTML="27-32";
    document.getElementById(rbctablev[k]).innerHTML=mch;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="MCH";
    k++;
  }
  
  if(mchc>36 || mchc<32)
  {
    mchccheck=1;
    document.getElementById(rbctabler[k]).innerHTML="32-36";
    document.getElementById(rbctablev[k]).innerHTML=mchc;
    document.getElementById(rbctablev[k]).style.color="red";
    document.getElementById(rbctablep[k]).innerHTML="MCHC";
    k++;
  }
  
  if(pcvcheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="40-54";
    document.getElementById(rbctablev[k]).innerHTML=pcv;
    document.getElementById(rbctablep[k]).innerHTML="PCV";
    k++;
  }
  
  
  if(mcvcheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="76-96";
    document.getElementById(rbctablev[k]).innerHTML=mcv;
    document.getElementById(rbctablep[k]).innerHTML="MCV";
    k++;
  }
  
  if(mchcheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="27-32";
    document.getElementById(rbctablev[k]).innerHTML=mch;
    document.getElementById(rbctablep[k]).innerHTML="MCH";
    k++;
  }
  
  if(mchccheck===0)
  {
    
    document.getElementById(rbctabler[k]).innerHTML="32-36";
    document.getElementById(rbctablev[k]).innerHTML=mchc;
    document.getElementById(rbctablep[k]).innerHTML="MCHC";
    k++;
  }
  
var optsrbc = {
  angle: -0.09,
  lineWidth: 0.3,
  limitMax: 'true',
  strokeColor: 'red',
  radiusScale: 1,
  generateGradient: true,
    pointer: {
    length: 0.5, // // Relative to gauge radius
    strokeWidth: 0.03, // The thickness
    color: '#07a2ea' // Fill color
  },
  staticLabels: {
  font: "90% sans-serif",  // Specifies font
  labels: [],  // Print labels at these values
  color: "black",  // Optional: Label text color
  fractionDigits: 2  // Optional: Numerical precision. 0=round off.
},  // just experiment with them
  strokeColor: 'red',   // to see which ones work best for you
  staticZones: [
   {strokeStyle: "yellow", min: 0, max: 33}, // Yellow
   {strokeStyle: "green", min: 33, max: 67}, // Green
   {strokeStyle: "red", min: 67, max: 100}, // Yellow
],
  generateGradient: true
};
var target = document.getElementById('rbc_chart'); // your canvas element
var gauge = new Gauge(target).setOptions(optsrbc); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.animationSpeed = 32; // set animation speed (32 is default value)
if(rbc<4.5 )
gauge.set(rbc*33/4.5);
else if (rbc>6.5)
gauge.set(67+(rbc-6.5)*34/8)
else 
gauge.set(33+(rbc-4.5)*34/2)




var opts = {
  angle: -0.09,
  lineWidth: 0.3,
  limitMax: 'true',
  strokeColor: 'red',
  radiusScale: 1,
  generateGradient: true,
   pointer: {
   length: 0.5, // // Relative to gauge radius
   strokeWidth: 0.03, // The thickness
   color: '#07a2ea' // Fill color
  },
  staticLabels: {
  font: "90% sans-serif",  // Specifies font
  labels: [],  // Print labels at these values
  color: "black",  // Optional: Label text color
  fractionDigits: 2  // Optional: Numerical precision. 0=round off.
  },  // just experiment with them
  strokeColor: 'red',   // to see which ones work best for you
  staticZones: [
  {strokeStyle: "yellow", min: 0, max:33 }, // Yellow
  {strokeStyle: "green", min: 33, max: 66}, // Green
  {strokeStyle: "red", min: 66, max: 100}, // Yellow
  ],
  generateGradient: true
  };
  var target = document.getElementById('hem_chart'); // your canvas element
  var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
  gauge.maxValue = 100; // set max gauge value
  gauge.animationSpeed = 32; // set animation speed (32 is default value)
  if (haemoglobin<14)
  
  gauge.set(haemoglobin*33/14);
  else if (haemoglobin>18)
  gauge.set(66+ (haemoglobin-18)*34/12);
  else 
  gauge.set(33+(haemoglobin-14)*33/4);
  
}








var optsplatelets = {
  angle: -0.09,
  lineWidth: 0.3,
  limitMax: 'true',
  strokeColor: 'red',
  radiusScale: 1,
  generateGradient: true,
    pointer: {
    length: 0.5, // // Relative to gauge radius
    strokeWidth: 0.03, // The thickness
    color: '#07a2ea' // Fill color
  },
  staticLabels: {
  font: "90% sans-serif",  // Specifies font
  labels: [],  // Print labels at these values
  color: "black",  // Optional: Label text color
  fractionDigits: 2  // Optional: Numerical precision. 0=round off.
},  // just experiment with them
  strokeColor: 'red',   // to see which ones work best for you
  staticZones: [
   {strokeStyle: "red", min: 0, max: 25}, // Yellow
   {strokeStyle: "green", min: 25, max: 75}, // Green
   {strokeStyle: "yellow", min: 75, max: 100}, // Yellow
],
  generateGradient: true
};
var target = document.getElementById('plateletss'); // your canvas element
var gauge = new Gauge(target).setOptions(optsplatelets); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.animationSpeed = 32; // set animation speed (32 is default value)

gauge.set(platelet*100/6);



    




  
  
  






  var optswbc = {
 angle: -0.09,
 lineWidth: 0.3,
 limitMax: 'true',
 strokeColor: 'red',
 radiusScale: 1,
 generateGradient: true,
   pointer: {
   length: 0.5, // // Relative to gauge radius
   strokeWidth: 0.03, // The thickness
   color: '#07a2ea' // Fill color
 },
 staticLabels: {
 font: "90% sans-serif",  // Specifies font
 labels: [],  // Print labels at these values
 color: "black",  // Optional: Label text color
 fractionDigits: 2  // Optional: Numerical precision. 0=round off.
},  // just experiment with them
 strokeColor: 'red',   // to see which ones work best for you
 staticZones: [
  {strokeStyle: "yellow", min: 0, max: 26}, // Yellow
  {strokeStyle: "green", min: 26, max: 73}, // Green
  {strokeStyle: "red", min: 73, max: 100}, // Yellow
],
 generateGradient: true
};
var target = document.getElementById('wbc__chart'); // your canvas element
var gauge = new Gauge(target).setOptions(optswbc); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.animationSpeed = 32; // set animation speed (32 is default value)

gauge.set(wbc*100/15000);










  