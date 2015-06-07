<?php 
	/*
		NumberGenerator.Class
		TE20_C_FSD - Workshop 12: mySQL Databases III | the Dice Game

		- description:
			the program generates random numbers from 1 to 6 for the Game.Class.php usage

		- class method:
			makeAGuess()		// makes a guess number from 1 to 6

		Rev.1

		Date 13.05.2015
		@author Agnieszka Pas
	*/


	class NumberGenerator {

		public function makeAGuess() {
			return rand(1, 6);	// 1 & 6 are inclusive values
		}

	}
?>