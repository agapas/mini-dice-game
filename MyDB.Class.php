<?php 
	/*
		MyDB.Class
		TE20_C_FSD - Workshop 12: mySQL Databases III | the Dice Game

		- description:
			the program cooperates with the 'my_db' database:
				table: correct_guesses,
				fields: 
					- user_id
					- answer
					- correct_guesses_count
					- guessed_on

		- class data:
			$dbConn;			// database connection
			$dbQuery;			// database query
			$conn_error;		// connection error

		- class methods:
			__construct()		// a constructor, sets variables & connection to database
			getConnError()		// returns connection error
			getTable()			// displays database's output as a table
			saveToDb()			// saves current guesses in database
			resetScores()		// delete all records from correct_guesses table

		Rev.1

		Date 17.05.2015
		@author Agnieszka Pas
	*/


	error_reporting(0);		// turn off reporting of mySQL errors


	class MyDB {

		private $dbConn;
		private $dbQuery;
		private $conn_error;

		public function __construct($host, $userName, $password, $dbName) {
			$this->dbConn = mysqli_connect($host, $userName, $password, $dbName) or die("Error...".mysqli_connect_error($this->dbConn));
		}

		// get connection error
		public function getConnError() {
			return $this->conn_error = "Error...".mysqli_error($this->dbConn);
		}

		// save scores to database
		public function saveToDb($guess, $guessesCount) {
			$guessed_on = date("Y-m-d");

			$this->dbQuery = "INSERT INTO correct_guesses(answer, correct_guesses_count, guessed_on) VALUES ('".$guess."',"."'".$guessesCount."',"."'".$guessed_on."')";

			$result = $this->dbConn->query($this->dbQuery) or die($this->getConnError());
		}

		// delete all records from correct_guesses table
		public function resetScores() {
			$this->dbQuery = "TRUNCATE TABLE correct_guesses";
			$result = $this->dbConn->query($this->dbQuery) or die($this->getConnError());
		}

		// display scores as a table
		public function getTable() {
			// create the query to retrieve all data
			$this->dbQuery = "SELECT * FROM correct_guesses";

			// execute the query
			$result = $this->dbConn->query($this->dbQuery) or die($this->getConnError());

			echo "----------------------------------------------------------";
			echo "<h3>Your Score:</h3>";

			echo "<table cellpadding='4'>";
			
			echo "<tr id='tableTitle'>";
			echo "<th>round<br>number</th>";
			echo "<th>value<br>of the dice</th>";
			echo "<th>correct guesses count<br>per round</th>";
			echo "<th>guessed<br>on</th>";
			echo "</tr>";

			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>".$row["user_id"]."</td>";
				echo "<td>".$row["answer"]."</td>";
				echo "<td>".$row["correct_guesses_count"]."</td>";
				echo "<td>".$row["guessed_on"]."</td>";
				echo "</tr>";
			}
			echo "</table>";

			// free memory associated with result
			mysqli_free_result($result);
		}
	}
?>