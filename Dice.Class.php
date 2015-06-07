<?php 
	/*
		Dice.Class
		TE20_C_FSD - Workshop 12: mySQL Databases III | the Dice Game

		- description:
			the program generates a number to guess for the Game.Class.php usage

		- class data:
			NUMBER_OF_SIDES		// number of sides of the dice
			$faceValue			// current value of the dice

		- class methods:
			throwDice()			// $faceValue setter
			getFaceValue()		// $faceValue getter


		Rev.1

		Date 13.05.2015
		@author Agnieszka Pas
	*/

	class Dice {
		const NUMBER_OF_SIDES = 6;
		private $faceValue;

		public function throwDice() {
			$this->faceValue = rand(1, self::NUMBER_OF_SIDES);	// 1 & NUMBER_OF_SIDES are inclusive values
		}

		public function getFaceValue() {
			return $this->faceValue;
		}
	}
	
?>