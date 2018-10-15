function validate(){

var user = document.forms["registration"]["name"].value;
var email = document.forms["registration"]["email"].value;
var password = document.forms["registration"]["password"].value;
 var phno = document.forms["registration"]["phone number"].value;
var dob = document.forms["registration"]["dob"].value;
var letters = /^[A-Za-z]+$/;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


//---------------USER NAME VALIDATION---------------------
 if(user=="")
{
 text="field is empty" 
 document.getElementById("txt1").innerHTML = text;
 event.preventDefault(); 
}
else
{
	document.getElementById("txt1").innerHTML ="";
}
//--------------- EMAIL VALIDATION----------------------
if(email=="")
{
text="field is empty"
document.getElementById("txt2").innerHTML = text;
event.preventDefault();
}
else if(!mailformat.test(email))
{
	text="enter a valid email id"
	document.getElementById("txt2").innerHTML = text;
	event.preventDefault();
}
else
{
	document.getElementById("txt2").innerHTML = "";
}
//----------------PASSWORD VALIDATION----------------------
if(password=="")
{
 text="field is empty"
 document.getElementById("txt3").innerHTML = text;
 event.preventDefault();
}
else if( password.length < 5)
{
	text="password is weak"
    document.getElementById("txt3").innerHTML = text;
    event.preventDefault();
}
else
{
	document.getElementById("txt3").innerHTML ="";
}
//--------------- phone number VALIDATION----------------------
if(phno=="")
{
text="field is empty"
document.getElementById("txt4").innerHTML = text;
event.preventDefault();
}
else if(!phno.length==10)
{
	text="enter a valid phone number"
    document.getElementById("txt4").innerHTML = text;
    event.preventDefault();
}
else
{
	document.getElementById("txt4").innerHTML = "";
}
//------------------DOB VALIDATION----------------------------
if(dob=="")
{
text="enter a valid date of birth"
document.getElementById("txt5").innerHTML = text;
event.preventDefault();
}
else
{
	document.getElementById("txt5").innerHTML = "" ;
}

}