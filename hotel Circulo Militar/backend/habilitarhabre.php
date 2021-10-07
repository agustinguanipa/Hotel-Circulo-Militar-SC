<?php 
include 'conexion.php'; 

$cod=$_GET["cod"];

$sql="UPDATE `habitacion` SET `sta_hab` = 'A' WHERE `habitacion`.`id` = $cod;";
$sql2="UPDATE `ocupada` SET `sta_ocu` = 'D' WHERE `ocupada`.`fky_hab`=$cod";
$cr=mysqli_query($cone,$sql);
$b=mysqli_query($cone,$sql2);

if ($cr) {
		echo "<script>location.href='../fronentd/recep/verhab.php?cod=$cod';</script>";
	}

else
{
	echo "<script>
	alert('No se habilito la habitacion');
	location.href='../fronentd/recep/opccla.php?cod=$cod';
	</script>";
}
?>