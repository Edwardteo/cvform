<link rel="stylesheet" href="css.css">
<?php
$sec="portada";
if(isset($_GET['sec'])){
	$sec=$_GET['sec'];
}
if(!empty($_POST)){
	include "acciones.php";
}
include "header.html";
if(file_exists($sec.".html")){
	include "portada.html";
}elseif(file_exists($sec.".php")){
	include "portada.php";
}else{
	echo "<div class='msg404'>404 Not Found</div>";
}
include "footer.html";
?>
