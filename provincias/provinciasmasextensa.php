
<?php
include('datos.php');
$autonomias='';
$as=[];
$sup=[];
foreach ($provincias as $p){
	$a=$p['autonomia'];
	$sup[$a]=0;
}
foreach ($provincias as $p){
	$a=$p['autonomia'];
	$sup[$a]+=$p['superficie'];
}
foreach ($sup as $a=>$s){
	if ($s==max($sup))
	echo $a;
}
echo max($sup)

?>

