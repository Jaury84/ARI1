<?php

include('datos.php');
$sup=[];
foreach ($provincias as $p){
	 echo  $p['provincia'];
	 echo strlen($p['provincia']);
	 echo '<br>'; 

}
	

?>