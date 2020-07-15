// Grab values from the submitted form in the URL
const words = new URLSearchParams(window.location.search);


const doctorname=(words.get('doctorname'));
const name = (words.get('name'));
const patientid = (words.get('patientid'));
const agesex  = (words.get('agesex'));
const receivedate  = (words.get('receivedate'));
const printdate  = (words.get('printdate'));
const haemoglobin  = (words.get('haemoglobin'));
const platelet  = (words.get('platelet'));
const rbc  = (words.get('rbc'));
const tlc  = (words.get('tlc'));
const  pvc = (words.get('pvc'));
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


const doctornamechange = document.getElementById("Enter_Doctor_Name");
const namechange = document.getElementById("Enter_Name");
const patientidchange = document.getElementById("Enter_Reg_No");
const agesexchange = document.getElementById("Enter_AgeSex");
const printdatechange = document.getElementById("Enter_Date");
const haemoglobinchartchange = document.getElementById("Enter_Haemoglobin_Chart");
const haemoglobinchange = document.getElementById("Enter_Haemoglobin");
const plateletchartchange = document.getElementById("Enter_Platelt_Chart");

const plateletchange = document.getElementById("Enter_Platelet");

const rbcchartchange = document.getElementById("Enter_RBC_Chart");
const rbcchange = document.getElementById("Enter_RBC");
const pvcchange = document.getElementById("Enter_PCV");
const mchcchange = document.getElementById("Enter_MCHC");
const mchchange = document.getElementById("Enter_MCH");
const wbcchartchange = document.getElementById("Enter_WBC_Chart");

const wbcchange = document.getElementById("Enter_WBC");
const lymphocyteschange = document.getElementById("Enter_Lymphocyte");
const neutrophilschange = document.getElementById("Enter_Neuturophils");
const monocyteschange = document.getElementById("Enter_Monocyte");
const eosinophilschange = document.getElementById("Enter_Eosinophils");
const mcvchange = document.getElementById("Enter_MCV");

doctornamechange.innerHTML =doctorname;
namechange.innerHTML = name ;
patientidchange.innerHTML = patientid ; 
agesexchange.innerHTML =agesex;
 printdatechange.innerHTML = printdate;
 haemoglobinchartchange.innerHTML =haemoglobin; 
 haemoglobinchange.innerHTML =haemoglobin; 
 plateletchartchange.innerHTML =platelet; 
 
 plateletchange.innerHTML =platelet; 
 rbcchange.innerHTML =rbc ;
 rbcchartchange.innerHTML =rbc ;
 pvcchange.innerHTML =pvc;
 mchchange.innerHTML = mch;
 mchcchange.innerHTML = mchc;
 wbcchartchange.innerHTML = wbc;

 wbcchange.innerHTML = wbc;
 lymphocyteschange.innerHTML = lymphocytes;
 neutrophilschange.innerHTML =neutrophils;
 monocyteschange.innerHTML = monocytes;
 eosinophilschange.innerHTML =eosinophils;
mcvchange.innerHTML = mcv;

console.log(name);






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
   {strokeStyle: "yellow", min: 0, max: 25}, // Yellow
   {strokeStyle: "green", min: 25, max: 75}, // Green
   {strokeStyle: "red", min: 75, max: 100}, // Yellow
],
  generateGradient: true
};
var target = document.getElementById('plateletss'); // your canvas element
var gauge = new Gauge(target).setOptions(optsplatelets); // create sexy gauge!
gauge.maxValue = 100; // set max gauge value
gauge.animationSpeed = 32; // set animation speed (32 is default value)

gauge.set(platelet*100/6);

gauge.setTextField(document.getElementById("gauge1-txt"));
    




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
     {strokeStyle: "green", min: 33, max: 66}, // Green
     {strokeStyle: "red", min: 66, max: 100}, // Yellow
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
 gauge.set(66+(rbc-5.8)*34/8)
 else 
 gauge.set(33+(rbc-3.8)*34/2)

  
  
  gauge.setTextField(document.getElementById("gauge1-txt"));






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

gauge.setTextField(document.getElementById("gauge1-txt"));




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


gauge.setTextField(document.getElementById("gauge1-txt"));



  