<?php

	$time = time() + 5000;

	if (isset($_COOKIE["theme"])) {
			
	}
	if (isset($_GET['mode'])) {
		if ($_GET['mode'] === "sombre") {
			setcookie("theme", "sombre", $time);
		}
		elseif ($_GET['mode'] === "clair") {
			setcookie("theme", "clair", $time);
		}
	}
?>