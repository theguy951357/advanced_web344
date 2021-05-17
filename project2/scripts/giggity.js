function init(){
console.log("external file is being accessed.");
//gotten from w3schools.

	var d = new Date();
	var date1 = document.getElementById('theDate');
	
	console.log('theDate returns ' + date1);
	
	document.getElementById("theDate").innerHTML = d.toUTCString();
	//console.log("init() finished successfully");
	
}           

function bigify(){
	console.log("bigify is being accessed.");
	var faicon = document.getElementById('icon');
	console.log("found " + faicon);
	
	faicon.style.height = "100px";
	faicon.style.fontSize = "40px";	
}

function normalfy(){
	console.log("normalfy is being accessed.");
	var faicon = document.getElementById('icon');
	console.log("found " + faicon);
	
	faicon.style.height = "30px";
	faicon.style.fontSize = "30px";
	var formdiv = document.getElementById('formdiv');
	console.log("found " + formdiv);
	var head = document.createElement("li");
	var title = document.createTextNode("heres a new element");
	var nextline = document.createElement("br");
	head.appendChild(title);
	formdiv.appendChild(head);
	formdiv.appendChild(nextline);
	
}

function formProcess(){
	var formObj = document.getElementById('form');
	if(validate(formObj)){
		var age = formObj.age.value;
		var num = formObj.number.value;
		alert("Your age times the number you entered is " + (age*num));
	}else{
		alert("please enter a valid email address");
	}
}

function validate(formObj){
	var email = formObj.email.value;
	var p = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
	if(p==0){
		console.log("email is valid");
		return true;
		
	}else{
		console.log("email is invalid");
		return false;
	}
	
}