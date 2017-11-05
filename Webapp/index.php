<!DOCTYPE html>
<html>
	<head>

		<title> Remote Academy Laboratory </title>

		<link href='index.css' rel='stylesheet'>

		<div id = "login">
			<a href=?login=true> Login </a> <!-- TODO: swap to RCS identification for credit -->
		</div>

	</head>
<body>

	<!-- First, going to put a list of links to different experiments.
			In the future we could put a log in page thing on top, then change which
			experiments loaded based on student ID/classes? sub lists for different classes
	-->

	<div id = "ExperimentsList">
		<?php
			//echo "<br> PHP Info: <br>";
			//phpinfo();

			//TODO: In the future, might put all this in a for loop to iterate between classes

			//Make a header for the relevant class
			$className = "Remote Laboratory Academy Sample Class";
			echo '<div id = classHeader>' . $className . '</div>';

				// In reality, this is two methods of doing the same thing
			//This method of listing things preferred, allow to import a list based on user, section by class?
			$experiments = array(
			//Should make it so that it pulls from a data base, based on user make different experiments available
					"Experiment 1: Gravity Exists" => "http://localhost:8000/Webapp/experimentTemplate.php",
					"Experiment 2: Accelerating Things" => "404 Error probably 2"
				);

			echo "<ol>";
			foreach ($experiments as $key => $value) {
				echo "<li> <a href=" . $value . ">" . $key . "</a> </li>";//TODO: We could add something about due dates
			}
			echo "</ol>";
/*
			$files = scandir('./Experiments');
			foreach($files as $title => $link){ //Note that this basically goes through all the html files, won't adjust to user
			   echo'<p><a href="/Experiments/'.$link.'">'.$title.'</a>';
			}*/
		?>
	</div>

	<!-- TODO: Need a bottom banner thingy for navigation? like back to top level list from experiments
				or to move back to an open/newest experiment?
	 -->

</body>
</html>