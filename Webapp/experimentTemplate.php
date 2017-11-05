<!DOCTYPE html>
<html>
	<head>

		<title> Remote Academy Laboratory Experiment</title>

		<!-- The header at the top of the page listing experiment info. -->
		<div class = "navbar navbar navbar-fixed-top", id = "largeHeader">
			<?php
				//Expecting: "Activity #: Experiment Title"
				$expNumber = "1";
				$expTitle = "Test Experiment";

				echo "Activity " . $expNumber . ": " . $expTitle;
			?>
		</div>

		<!-- Gets style sheets; the first one is for bootstrapper -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
			crossorigin="anonymous">
		<link href='experimentTemplate.css' rel='stylesheet'>


	</head>
<body>
	<div id = "row">
		<div class = "col-md-8">
			<!--<div id = "header"> Introduction </div>-->
			<h3> Introduction </h3>
			<div class = "CentralTextBox", id = "instructions">
				<!-- Fill out the instruction: goal, apparatus requirements, 
						and experiment procedure -->
				<b> Goal: </b>
					<?php
						$goal = "Science";
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

			<center> <!-- The button for finishing the experiment -->
			<button type="button" class="btn btn-lg btn-default"> Finish Experiment </button>
			</center>

			<h3> Questions </h3>
			<div class = "CentralTextBox", id = "Questions">

				<?php //Section for listing the questions

					//Note to self: subsection header then questions? TODO
					$questions = array(
							//Should make it so that it pulls from a database eventually
							"What is your name?",
							"What is your quest?",
							"What is the flight speed of an unladen swallow?"
						);

					//Just iterate through the collected experiment questions
					foreach ($questions as $selected) {
						echo "<p>". $selected . "</p>";
						echo "<textarea class='AnswerBox'>". "Input Answer Here" ."</textarea>";
					}
					//Note: Pressing finish experiment should submit these?
					// TODO add warning in case empty. The button is above
					//	 the questions (based off of f2016 coffeescript version), so design warning/issue?
				?>

			</div>

		</div>
		
		<div class = "col-md-4"> <!-- The right column: focused on the remote lab/data -->
			<h3> Imagination powered video feed </h3> <!-- For the user to see whats going on -->
			<div class = "rightSideBox", id = "videoFeed">
				<?php
					//TODO: Place php to open video feed here
				?>
			</div>

			<h3> Inputs </h3>
			<!-- The slider is just an example doodad, other things based off of 
					data from database on specific experiment may be necessary. -->
			<div class = "rightSideBox", id = "inputs">
				
				<p>
					<a class="btn btn-primary btn-lg" href="#" role="button"> Run Experiment </a>
				</p>

				<div id = "inputsSubsection"> <p>
					Ramp Angle: <span id="inputSliderRange">0</span>˚
					<input type="range" min="0" max="90" value="0" onchange="showValue(this.value)" />
					<script type="text/javascript">
						function showValue(newValue)
						{
							document.getElementById("inputSliderRange").innerHTML=newValue;
						}
					</script>
				</p> </div>

				<p> <!-- Applies the changes to the apparatus -->
					<a class="btn btn-default" href="#" role="button"> Apply Settings </a>
				</p>
			</div>

			<h3> Data Collected </h3> <!-- The student will be using the data we collectd.
											TODO: Consider moving for ease of access during questions -->
			<div class = "rightSideBox">
				<?php
					//TODO some way to collect data from pi?
				?>
			</div>

		</div>
	</div>

</body>
</html>