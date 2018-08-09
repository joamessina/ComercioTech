<?php
	include "header.php";

	//Validar la pagina/modulo
	if( isset( $_GET["p"] ) ) {
		$pagina = $_GET["p"] . ".php";
	} else {
		$pagina = "inicio.php";
	}

	//Validar el idioma
	if( isset( $_GET["l"] ) ){
		$idioma = $_GET["l"];
	} else {
		$idioma = "esp";
	}

?>
<div class="container">
	<section id="page">
	<?php
		if( file_exists( $pagina ) ){
			
			include $pagina;
		
		} else {
		
			echo "PAGINA NO ENCONTRADA :(";

		}

	?>

	</section>
</div>

<?php include "footer.php"; ?>