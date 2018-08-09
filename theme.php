<?php
	header("Content-Type: text/css");

	if( isset($_GET["skin"]) ){
		$skin = $_GET["skin"];
	} else {
		$skin == "classic";
	}

	switch ($skin) {
		case 'rojo':
			$color = "#F00";
		break;

		case 'verde':
			$color = "#0F0";
		break;

		case 'azul':
			$color = "#00F";
		break;
		
		default:
			$color = "#0169b2";
		break;
	}
?>

.bottom-header {
	background-color: <?php echo $color ?> !important;
}