<html>
<?php
require("../progressbar.php");
?>
<div id="skillbars">
	<ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">Languages</li>
		<li class="tab-link" data-tab="tab-2">IDEs</li>
		<li class="tab-link" data-tab="tab-3">Frameworks/etc</li>
	</ul>
	<div id="tab-1" class="tab-content current">
		<?php
		createSkillbar("HTML5", 95, "#e67e22");
		createSkillbar("CSS3", 85, "#563d7c");
		createSkillbar("PHP", 95, "#4F5D95");
		createSkillbar("JavaScript", 95, "#f1e05a");
		createSkillbar("SQL", 85, "#dad8d8");
		createSkillbar("C", 90, "#555555");
		createSkillbar("C#", 75, "#178600");
		createSkillbar("Objective-C", 75, "#6866FB");
		createSkillbar("Scheme", 80, "#22228f");
		createSkillbar("Python", 65, "#3572A5");
		createSkillbar("Java", 70, "#b07219");
		?>
	</div>
	<div id="tab-2" class="tab-content">
		<?php
		createSkillbar("X-Code", 85, "#3572A5");
		createSkillbar("Android Studio", 80, "#178600");
		createSkillbar("Mono-Develop", 95, "#f1e05a");
		createSkillbar("SeaShell", 100, "#555555");
		createSkillbar("Visual Studio", 75, "#563d7c");
		?>
	</div>
	<div id="tab-3" class="tab-content">
		<?php
		createSkillbar("jQuery", 90, "#2c3e50");
		createSkillbar("React", 85, "#f1e05a");
		createSkillbar("React-Native", 80, "#dad8d8");
		createSkillbar("node.js", 85, "#555555");
		createSkillbar("AngularJS", 75, "#4288d0");
		?>
	</div>

</div>
</html>
