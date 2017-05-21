<html>
<link rel="stylesheet" href="assets/css/skillbar.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/skillbar.js"></script>
<?php
// createSkillbar(val, percent, colour) prints out a new skillbar with the desired elements. For added customization,
//     the user can edit the $colour on line 10 which would change the skillbar-title to the provided colour. Bys default, the
//     skillbar-title is a shade darker than the rest of the skillbar.
	function createSkillbar($val, $percent, $colour) {
		echo "<div class='skillbar clearfix' data-percent='" . $percent . "%'>
	    <div class='skillbar-title' style='background: " . $colour . ";'><span>" . $val . "</span></div>
	    <div class='skillbar-bar' style='background: " . $colour . ";'></div>
	    <div class='skill-bar-percent'>" . $percent . "%</div>
	  </div>";
	}
?>
</html>
