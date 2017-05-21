<html>
	<!-- This file shows how the progress bar is called using the PHP function -->
	<?php require("../progressbar.php"); ?>

	<link rel="stylesheet" href="../assets/css/skillbar.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../assets/js/skillbar.js"></script>
	
	<h3>Calling the function</h3>
	<div id="skillbars">
		<?php
		createSkillbar("HTML5", 95, "#e67e22");
		createSkillbar("CSS3", 85, "#563d7c");
		createSkillbar("jQuery", 90, "#2c3e50");
		createSkillbar("PHP", 95, "#4F5D95");
		createSkillbar("JavaScript", 95, "#f1e05a");
		createSkillbar("SQL", 85, "#dad8d8");
		createSkillbar("React", 85, "#4288d0");
		createSkillbar("React-Native", 80, "#4288d0");
		createSkillbar("C", 90, "#555555");
		createSkillbar("C#", 75, "#178600");
		createSkillbar("Objective-C", 75, "#6866FB");
		createSkillbar("Scheme", 80, "#22228f");
		createSkillbar("Python", 65, "#3572A5");
		createSkillbar("Java", 70, "#b07219");
		?>
	</div>
</html>
