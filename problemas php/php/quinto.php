<!DOCTYPE html>
<html>
<body style="background-color:#F0CFFF;">
<center>
<table>
<tr>
<td BGCOLOR="pink"colspan="2">
Ordena alfabéticamente a tus compañeros por su nombre de pila y muestra al que ocupe el quinto lugar en la lista
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


echo $companero[4];

		

?>

<div id="r"	style="background-color:pink"></div>

<script>

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
if(true){
	document.getElementById('r').innerHTML=companero[4];
}

</script>
</center>
</body>
</html>