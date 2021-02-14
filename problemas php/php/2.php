<!DOCTYPE html>
<html>
<body style="background-color:#F0CFFF;">
<center>
<table>
<tr>
<td BGCOLOR="pink"colspan="2">
Crea un array de compañeros, otro de destinos turísticos y asígnalos aleatoriamente mostrando el resultado
</td>
</tr>
</table>
<?php


$companero=[
	'Andres',
	'Sergio',
	'Andres',
	'Ivan',
	'Pablo',
	'Alberto',
	'Hector',
	'Eduardo',
	'Pablo',
	'Jaury',
	'Pablo',
	'Sergio',
	'Valentin',
	'Fran',
];
sort($companero);




$sitio=[
	'Madagascar',
	'Marruecos',
	'Letonia',
	'Bogota',
	'El cairo',
	'New york',
	'Texas',
	'Estambul',
	'Hungria',
	'Letonia',
	'Madrid',
	'Berlin',

];

sort($sitio);

$companero;
$sitio;
foreach($companero as $c)  {
echo '<div>';
echo $c;
echo '-';
echo $sitio[round(rand(0,count($sitio)-1))];
echo '</div>';
}
?>
<div id="r"	style="background-color:pink"></div>
<script>
function calcular(){
companero = [
	'Andres',
	'Sergio',
	'Andres',
	'Ivan',
	'Pablo',
	'Alberto',
	'Hector',
	'Eduardo',
	'Pablo',
	'Jaury',
	'Pablo',
	'Sergio',
	'Valentin',
	'Fran',
];
companero.sort();
sitio=[
	'Madagascar',
	'Marruecos',
	'Letonia',
	'Bogota',
	'El cairo',
	'New york',
	'Texas',
	'Estambul',
	'Hungria',
	'Letonia',
	'Madrid',
	'Berlin',

];
sitio.sort();
if(true){
	txt="";
	for(i in companero){
		txt+='<div>'+companero[i];
		d= Math. random()*(sitio.length-1);
		d= Math. round(d);
		txt+=sitio[d]+'</div>';
	}
	document.getElementById("r").innerHTML=txt;
	}
}
calcular();
</script>
</center>
</body>
</html>

	
