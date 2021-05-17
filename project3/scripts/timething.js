var request = null;
var count = 1;
function getCurrentTime(){
	console.log("getCurrentTime is being accessed");
	request = new XMLHttpRequest();
	var url = "https://www.cs.unca.edu/~cblaha/project3/common/time.php";
	request.open("GET", url, true);
	request.onreadystatechange = updatePage;
	request.send(null);
}
function updatePage(){
	if(request.readyState == 4){
		var dateDisplay = document.getElementById("datetime");
		var timelist = document.getElementById("timelist");
		var time = request.responseText;
		dateDisplay.innerHTML = time;
		var head = document.createElement("li");
		var title = document.createTextNode("The page has been updated " + count + " times with:\r\n");
		var nextline = document.createElement("br");
		var timenode = document.createTextNode(time);
		head.appendChild(title);
		head.appendChild(timenode);
		timelist.appendChild(head);
		timelist.appendChild(nextline);
		count++;
	}
}


getCurrentTime();
setInterval('getCurrentTime()', 30000);
