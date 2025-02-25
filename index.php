<?php

	$link = [
		"personalOpinion68" => ["/personalOpinion68", "personalOpinion68", "_blank"]
	];

	echo "<i><b>";
	echo "<ol>";
	foreach ($link as $key => $value) {
		echo "<li><h2><a href='{$value[0]}' alt='{$value[1]}' target='{$value[2]}'>{$value[1]}</a></h2></li>";
	}
	echo "</ol>";
	echo "</b></i>";

?>