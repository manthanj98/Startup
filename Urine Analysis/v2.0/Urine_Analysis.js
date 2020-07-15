const words = new URLSearchParams(window.location.search);



const name1=(words.get('Name1'));
let pathoName=(words.get('pathoName'));
const Age = (words.get('Age1'));
const RegNo  = (words.get('Reg_No1'));
const Date1  = (words.get('Date1'));
const ReferredBy  = (words.get('Referred12'));
const RBC = (words.get('RBC1'));

const Epithelial  = (words.get('epithelial1'));
const PUS  = (words.get('PUS1'));

const Casts  = (words.get('Casts1'));
const Crystals  = (words.get('Crystals1'));
const Bacteria  = (words.get('Bacteria1'));
const Color  = (words.get('Color1'));
const Quantity  = (words.get('Quantity1'));
const Apperance  = (words.get('Apperance1'));
const SG  = (words.get('SG1'));
const Sugar  = (words.get('Sugar1'));
const Blood  = (words.get('Blood1'));
const Proteins  = (words.get('Proteins1'));
const Reaction  = (words.get('Reaction1'));


console.log (name1);
const nameChange=document.getElementById('Name');
const AgeChange = document.getElementById("AgeSex");
const RegNoChange = document.getElementById("Reg_No");
const ReferredByChange = document.getElementById("Referred_By");
const DateChange = document.getElementById("Date");

const PUSChange = document.getElementById('PUS_Cells');
const pathoNameChange=document.getElementById('Name_Pathology_Lab');
const EpithelialChange = document.getElementById('Epithelial_Cells');
const ColorChange = document.getElementById('Color');
const QuantityChange = document.getElementById('Quantity');
const ApperanceChange = document.getElementById('Appearnace');
const SGChange = document.getElementById('Specific_Gravity');

const ReactionChange = document.getElementById('Reaction');
pathoNameChange.innerHTML=pathoName;
nameChange.innerHTML= name1;
AgeChange.innerHTML= Age;
RegNoChange.innerHTML= RegNo;
ReferredByChange.innerHTML= ReferredBy;
DateChange.innerHTML= Date1;
PUSChange.innerHTML= PUS;

EpithelialChange.innerHTML= Epithelial;
ColorChange.innerHTML= Color;
QuantityChange.innerHTML= Quantity;
ApperanceChange.innerHTML= Apperance;
SGChange.innerHTML= SG;
ReactionChange.innerHTML= Reaction;

let i=0,j=0;
var fid =new Array ( "ID1" , "ID2" ,"ID3","ID4","ID5","ID6","ID7","nonefound")
var nfid =new Array ( "ID1_b" , "ID2_b" ,"ID3_b","ID4_bz","ID5_by","ID6_bx","ID7_bw","nonefound")
if(RBC==="Absent")
{document.getElementById(nfid[i]).innerHTML="RBC";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="RBC";
j++;
}

if(Casts==="Absent")
{document.getElementById(nfid[i]).innerHTML="Casts";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="Casts";
j++;
}if(Crystals==="Absent")
{document.getElementById(nfid[i]).innerHTML="Crystals";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="Crystals";
j++;
}
if(Bacteria==="Absent")
{document.getElementById(nfid[i]).innerHTML="Bacteria";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="Bacteria";
j++;
}
if(Sugar==="Absent")
{document.getElementById(nfid[i]).innerHTML="Sugar";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="Sugar";
j++;
}if(Blood==="Absent")
{document.getElementById(nfid[i]).innerHTML="Blood";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="Blood";
j++;
}if(Proteins==="Absent")
{document.getElementById(nfid[i]).innerHTML="Proteins";
i++;
}
else 
{document.getElementById(fid[j]).innerHTML="Proteins";
j++;
}
if(j>0)
{document.getElementById(fid[7]).innerHTML=null;}
