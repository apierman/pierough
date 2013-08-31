function startTime()
{
   var today=new Date();
   var h=today.getHours();
   var m=today.getMinutes();
   var s=today.getSeconds();
   if (h === 0) h = 12;  
   if (h > 12) h -= 12;  
   m = m < 10 ? "0" + m : m;
   s = s < 10 ? "0" + s : s;
   return h+":"+m+":"+s;
}

function displayClock() {
   var h = dt.getHours();
   var m = dt.getMinutes();
   var s = dt.getSeconds();
   var meridiem = h < 12 ? "am" : "pm";
   if (h === 0) h = 12;  
   h = h > 12 ? h -= 12 : h;
   m = m < 10 ? "0" + m : m;
   s = s < 10 ? "0" + s : s;
   var str =  h + ":" + m + ":" + s + merdiem;
//   document.write(str); 
//   document.getElementById("showClock").innerHTML=str;
//   setTimeout(function { displayClock(); }, 2000);
   return str;
}
