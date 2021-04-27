<?php
include('datos.php');
$autonomias='';
$as=[];
$sup=[];
foreach ($provincias as $p){
	$a=$p['provincia'];
	$sup[$a]+=$p['autonomia'];
}
foreach ($sup as $a=>$s){
	if ($s== max($sup)){
		echo $a;
	}
}

?>