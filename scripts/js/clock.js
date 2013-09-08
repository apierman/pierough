function displayTime(sElementId, iFormat) {
	var sTimeDate;
	var today=new Date();
	var d=today.getDate();
	var mo=today.getMonth() + 1;
	var y=today.getFullYear();
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();
	var merdiem = h >= 12 ? "pm" : "am";
	if (h === 0) h = 12;  
	if (h > 12) h -= 12;
	if (m < 10) m = "0" + m;
	if (s < 10) s = "0" + s;
	switch(iFormat)
	{
		case 1:
			sTimeDate=h+":"+m+":"+s+" "+merdiem;
			break;
		case 2:
			sTimeDate=mo+"/"+d+"/"+y+" "+h+":"+m+":"+s+" "+merdiem;
			break;
		case 3:
			sTimeDate=today.toLocaleTimeString();
			break;
		case 4:
			sTimeDate=today.toLocaleString();
			break;
		case 5:
			sTimeDate=today.toDateString() + " " + today.toLocaleTimeString();
			break;
	}
	document.getElementById(sElementId).innerHTML=sTimeDate;
	   //var t=setTimeout(function(){displayTime(sElementID, iFormat)},1000);
}

function runClock(sElementId, iFormat)
{
	if (sElementId === undefined) sElementId = "showClock";
	if (iFormat === undefined) iFormat = 3;
	var varClock=setInterval(function() {displayTime(sElementId, iFormat)}, 1000);
}
