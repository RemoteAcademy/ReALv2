<!DOCTYPE html>
<html>
	<head>

		<title> Remote Academy Laboratory Experiment</title>

		<div class = "navbar navbar navbar-fixed-top", id = "largeHeader">
			<?php
				//Expecting: "Activity #: Experiment Title"
				$expNumber = "1";
				$expTitle = "Test Experiment";

				echo "Activity " . $expNumber . ": " . $expTitle;
			?>
		</div>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
			crossorigin="anonymous">
		<link href='experimentTemplate.css' rel='stylesheet'>


	</head>
<body>
	<div id = "row">
		<div class = "col-md-8">
			<div class = "CentralPositioning">
			<!--<div id = "header"> Introduction </div>-->
			<h3> Introduction </h3>
			<div class = "CentralTextBox", id = "instructions">
				<b> Goal: </b>
					<?php
						$goal = "Get the goals somehow? fill in?";
						echo $goal;
					?>

			
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

				<b> Procedure: </b>
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


			</div>
		</div>

		<button type="button" class="btn btn-lg btn-default"> Input or something </button>

		<div class = "CentralPositioning">
			<h3> Questions </h3>
			<div class = "CentralTextBox", id = "Questions">
				
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
						echo "<textarea class='AnswerBox'>". "Input Answer Here" ."</textarea>"; //TODO format textarea
						//Also apparently text area size is editable? TODO
					}
				?>

			</div>
			</div>
		</div>

		<div class = "col-md-4">
		<div class = "rightSide">
			<div class = "rightSideBox", id = "videoFeed">
				<div id = "header"> Imagination powered video feed </div>
			</div>

			<div class = "rightSideBox", id = "inputs">
				<div id = "header"> Input </div>
				Inputs
			</div>
		</div>
		</div>
	</div>

</body>
</html>