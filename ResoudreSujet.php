<?PHP
include "../controller/SujetCore.php";
$sujetC= new SujetCore();
if (isset($_GET["idtoresoudre"]) ){
	$sujetC->resoudreSujet($_GET["idtoresoudre"]);
	header("Location: aziza.php");
}

?>
