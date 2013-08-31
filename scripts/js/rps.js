// pads right
String.prototype.rpad = function(padString, length) {
    var str = this;
    while (str.length < length)
        str += padString;
    return str;
};

function playRPS() {
   var choices = ["rock", "paper", "scissors"];
   var userChoice = "start value", computerChoice = 0;
   var str;

   computerChoice = Math.floor((Math.random() * 3));

   while (isNaN(userChoice)) {
       userChoice = prompt("Do you choose 0. rock, 1. paper or 2. scissors?",
                     "enter 0, 1 or 2");
       /*if cancel pressed the exit; */
       if(userChoice === "" || userChoice === null) return 0;
   }


   userChoice %= 3; // Just to be sure!
   /* console.log("Computer\tPerson"); */
//   str = "Computer: " + choices[computerChoice] + "\n";
//   str += "Person:   " + choices[userChoice] + "\n";

   if (userChoice === computerChoice) {
       str = "It is a Tie!";
   } else if (((userChoice + 1) % 3) === (computerChoice)) {
       str = "Computer (" + choices[computerChoice] + ") wins!";
   } else {
       str = "Person (" + choices[userChoice] + ") wins!";
   }
//      alert(str);
   alert("========== Results============\n" +
         "Computer: " + choices[computerChoice] + 
	 "\nPerson: " + choices[userChoice] + 
         "\n --- " + str + " ---");

}
