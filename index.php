<?php 
	/*
		index
		TE20_C_FSD - Workshop 12: mySQL Databases III | the Dice Game
		
		Rev.1

		Date 13.05.2015
		@author Agnieszka Pas
	*/
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>TE20_C_FSD Workshop 12 - mySQL Databases III | the Dice Game </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div id="container">	
			<header>
				<?php
					// add random images to 'welcome' heading
					$logoSrcArray = array("images/roll1.jpg", "images/roll2.jpg", "images/roll3.jpg");

					// cast images from array
					$castImgSrc1 = $logoSrcArray[rand(0, sizeOf($logoSrcArray)-1)];		// cast source of the left image
					$castImgSrc2 = $logoSrcArray[rand(0, sizeOf($logoSrcArray)-1)];		// cast source of the right image

					// add the style to casted images
					$img1 = "<img class='headerImg' src=".$castImgSrc1." alt='logo1' >";
					$img2 = "<img class='headerImg' src=".$castImgSrc2." alt='logo2' >";

					// add images into heading
					echo "<h1>" . $img1 . " Welcome to the Dice guessing program " . $img2 . "</h1>";
				
				?>
			</header>

			<form action="index.php" method="POST">
				<input type="submit" name="guess" id="guessBtn" value="Make your guess">
			</form>


			<?php 
				include ('NumberGenerator.Class.php');
				include ('Dice.Class.php');
				include ('Game.Class.php');
				include ('MyDB.Class.php');

				/*
				// OR instead of lines above:
				function __autoload($class_name) {	// it's a good practice for complex apps
					require "./".$class_name.".Class.php";
				}
				*/

				// start the game
				if(isset($_POST['guess'])) {
					echo "<h3>Thanks for the guesses, lets see the result...<br/></h3>";
					$myGame = new Game();
					$myGame->play();
				}

				// reset the score table (delete all records in 'correct_guesses' table)
				echo "<br><form action='index.php' method='POST'>
					<input type='submit' name='resetTable' id='resetBtn' value='Reset All Scores & Start New Game'>
				</form>";

				if(isset($_POST['resetTable'])) {
					$db = new MyDB("localhost", "root", "", "my_db");
					$db->resetScores();
				}
			?>
		</div>
		<footer >TE20_C_FSD, Workshop 12 | Made by @ Agnieszka Pas, 2015</footer>
	</body>
</html>