<?php

$mes=date("n");
$any=date("Y");
$diaActual=date("j");
 

$diaSetmana=date("w",mktime(0,0,0,$mes,1,$any))+7;

$ultimDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$any)-1));
 
$mesos=array(1=>"Enero", "Febero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
?>

 

<!DOCTYPE html>

<div align="center">
<br>

<html lang="es">

<head>

	<meta charset="utf-8">

	<style>
		#calendario {
			font-family:Arial;
			font-size:12px;
		}
		#calendario caption {
			text-align:left;
			padding:5px 10px;
			background-color:#fd3a3a;
			color:#fff;
			font-weight:bold;
			border: 1px solid black;
		}
		#calendario th {
			background-color: 	#8B0000;
			color:#fff;
			width:40px;
			border: 1px solid black;
		}
		#calendario td {
			padding:4px 10px;
			background-color: 	#FFE4C4;
			border: 1px solid black;
		}
		#calendario .hoy {
			background-color:red;
		}
	</style>

</head>

 

<body>


<table id="calendario">

	<caption><?php echo $mesos[$mes]." ".$any?></caption>

	<tr>
		<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
	</tr>

	<tr bgcolor="silver">

		<?php
		$ultimaCelda=$diaSetmana+$ultimDiaMes;
		for($i=1;$i<=42;$i++){
			if($i==$diaSetmana){
				$dia=1;
			}
			if($i<$diaSetmana || $i>=$ultimaCelda){
				echo "<td>&nbsp;</td>";
			}else{
				if($dia==$diaActual)
					echo "<td class='hoy'>$dia</td>";
				else
					echo "<td>$dia</td>";
				$dia++;
			}
			if($i%7==0){
				echo "</tr><tr>\n";
			}
		}
	?>

	</tr>
</table>
</body>
</br>
</div>
</html>