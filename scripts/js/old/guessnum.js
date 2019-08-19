function RandNumber(max, guesses) {
	this.number = Math.round(Math.random() * max);
	this.guess = -1;
	this.max = max;
	this.min = 0;
	this.guesses = 1;
	this.maxGuesses = guesses;
	this.message = "";
	this.finished = false;
}

	// Get input from the user
	RandNumber.prototype.getGuess = function () { 
		this.guess = parseInt(prompt(this.message + "[" + this.guesses + "/" + this.maxGuesses + "] " +
			"Enter a number between " + this.min + " and " + this.max));
		if (this.guess === null || this.guess === "" || isNaN(this.guess))  {
			this.finished = true;
			return 0;
		} 
		if (this.guess > this.max || this.guess < this.min) {
			this.message = "Invalid Guess: " + this.guess + "\n";
			this.getGuess();
		}
	};

	// Check the validity of the guess 
	RandNumber.prototype.checkGuess = function () { 
		// check if found number
		if (this.number == this.guess) {
			alert("CONGRADULATIONS You found it: " + this.number + " in " + this.guesses + " guesses!");
			this.finished = true;
			return 1;
		}
		// check if exceeded guesses
		if (this.guesses >= this.maxGuesses) {
			alert("You did NOT find it.  The number was " + this.number + ".  You used  " + this.guesses + " guesses.");
			this.finished = true;
			return 0;
		} // guess was higher or lower than the number.
		this.guesses++;
		if (this.guess > this.number) {
			this.message = "HINT: The number is LOWER!\n";
			this.max = this.guess;
		} else {
			this.message = "HINT: The number is HIGHER!\n";
			this.min = this.guess;
		}		
	};

function playGuess (max, guesses) {
    var numbers = new RandNumber(max, guesses);

    //alert("The number is: " + numbers.number);

    while (numbers.finished != true) {
         numbers.getGuess();
         numbers.checkGuess();
    }
}