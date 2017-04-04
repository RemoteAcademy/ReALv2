<!DOCTYPE html>
<html>
	<head>

		<title> Remote Academy Laboratory Experiment</title>

		<div id = "largeHeader"> 
			<?php
				//Expecting: "Activity #: Experiment Title"
				$expNumber = "1";
				$expTitle = "Test Experiment";

				echo "Activity " . $expNumber . ": " . $expTitle;
			?>
		</div>

		<link href='experimentTemplate.css' rel='stylesheet'>


	</head>
<body>
	<div id = "wrapper">
		<div class = "CentralTextBox", id = "instructions">
			<div id = "header"> Introduction </div>
			<br> <b> Goal: </b>
				<?php
					$goal = "Get the goals somehow? fill in?";
					echo $goal;
				?>
			</br>
		
			<br> <b> Apparatus </b>
				<?php
					$equipment = array(
					//Should make it so that it pulls from a database eventually
							"Large Hadron Collider",
							"29.8 kg fish food",
							"Tesla coils",
							"Remote Academy website",
							"Gravity powered ramp"
						);

					foreach ($equipment as $selected) {
						echo "<li> " . $selected . " </li>";
					}
				?>
			</br>

			<br> <b> Procedure: </b>
				<?php
					$instructions = array(
					//Should make it so that it pulls from a database eventually
							"Don't die",
							"Build website",
							"?...",
							"Profit"
						);

					echo "<ol>";
					foreach ($instructions as $selected) {
						echo "<li> " . $selected . " </li>";
					}
					echo "</ol>";
				?>
			</br>

		</div>

		<div class = "CentralTextBox", id = "Questions">
			<div id = "header"> Questions </div>
			
			<?php
				//Note to self: subsection header then questions? TODO
				$questions = array(
				//Should make it so that it pulls from a database eventually
						"What is your name?",
						"What is your quest?",
						"What is the flight speed of an unladen swallow?"
					);

				foreach ($questions as $selected) {
					echo "<br>". $selected . "</br>";
					echo "<textarea class='box'>". "Input Answer Here" ."</textarea>"; //TODO format textarea
					//Also apparently text area size is editable? TODO
				}
			?>

		</div>

	</div>
	
	<div class = "rightSide">
		<div id = "videoFeed">
			<div id = "header"> Imagination powered video feed </div>
		</div>

		<div id = "Inputs">
			Inputs
		</div>
	</div>

</body>
</html>