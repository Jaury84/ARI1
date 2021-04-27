<?php

include('datos.php');
$sup=[];
foreach ($provincias as $p){
	 echo  $p['provincia'];
	 echo count($p['autonomia']);
	 echo '<br>'; 

}
	

?>