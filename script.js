function ctab(obj)
{
var ar = document.getElementById('main').getElementsByTagName("div");
var td = document.getElementById('main').getElementsByTagName("p");

for(var i=0; i<ar.length; i++)
{
if(ar[i].className == "cntont") 
{
ar[i].className = "off";
}
}

for(var j=0; j<td.length; j++)
{
if(td[j].className == "h") 
{
td[j].className = "";
}
}

document.getElementById('cnt'+obj).className = "cntont";
document.getElementById('tbs'+obj).className = "h";
}


var vall = 'false';

function fls()
{
vall = 'false';
}


function fls1()
{
vall = 'true';
}



function ctab1(obj)
{

vall = 'true';
var ar = document.getElementById('main1').getElementsByTagName("div");
var td = document.getElementById('main1').getElementsByTagName("td");

for(var i=0; i<ar.length; i++)
{
if(ar[i].className == "on") 
{
ar[i].className = "off";
}
}

for(var j=0; j<td.length; j++)
{
if(td[j].className == "hgtb") 
{
td[j].className = "hgtb1";
}

}

document.getElementById('tabc'+obj).className = "on";
document.getElementById('tp'+obj).className = "hgtb";
//timedMsg();
}




function ctab4(obj, obj1, main)
{

vall = 'true';
var ar = document.getElementById(main).getElementsByTagName("div");
var td = document.getElementById(main).getElementsByTagName("p");

for(var i=0; i<ar.length; i++)
{
if(ar[i].className == "cnt44") 
{
ar[i].className = "off";
}
}

for(var j=0; j<td.length; j++)
{
if(td[j].className == "h") 
{
td[j].className = "";
}

}

document.getElementById(obj).className = "h";
document.getElementById(obj1).className = "cnt44";
//timedMsg();
}




function ctab2(obj)
{

var ar = document.getElementById('main1').getElementsByTagName("div");
var td = document.getElementById('main1').getElementsByTagName("td");

for(var i=0; i<ar.length; i++)
{
if(ar[i].className == "on") 
{
ar[i].className = "off";
}
}

for(var j=0; j<td.length; j++)
{
if(td[j].className == "hgtb") 
{
td[j].className = "hgtb1";
}

}

document.getElementById('tabc'+obj).className = "on";
document.getElementById('tp'+obj).className = "hgtb";
if(vall == 'false')
	{
timedMsg();
}
}




function ftlink(id)
{
document.getElementById(id).className="ftrlink open";
}



function ftlink1(id)
{
document.getElementById(id).className="ftrlink close";
}


var ii = 2;
function autorunn()
{

if(vall == 'false')
	{
if (ii < 5)
{
ctab2(ii);
ii++;
}


else
{
ii= 1;
ctab2(ii);
ii++;
}}

}

function timedMsg()
{
var t=setTimeout("autorunn()",1800);
}