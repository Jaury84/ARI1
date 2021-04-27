3<?php
if(!isset($_GET['companero']))
$_GET['companero']=1;

?>

<!DOCTYPE html>
<html>
<body style="background-color:#F0CFFF;">
<center>
<table>
<tr>
<td BGCOLOR="pink"colspan="2">
Crea un desplegable con los nombres de tus compañeros y, como resultado de la selección, obtendrás en qué puesto se sienta
</td>
</tr>
</table>

<h1>Posicion Compañeros</h1>

<img src="sitios.jpg" alt="" width="300px" height="300px"/>


<?php
// arrays

$companero = [
	'1'=>'Andres',
	'2'=>'Sergio',
	'3'=>'Andres',
	'4'=>'Ivan',
	'5'=>'Pablo',
	'6'=>'Alberto',
	'7'=>'Hector',
	'8'=>'Eduardo',
	'9'=>'Pablo',
	'10'=>'Jaury',
	'11'=>'Pablo',
	'12'=>'Sergio',
	'13'=>'Valentin',
	'14'=>'Fran',
];

$txt='<form>';
$txt.='<select id="x" name="companero" onclick="calcular()">';
foreach($companero as $mesa=>$nombre){
$txt.='<option value="'.$mesa.'">'
.$nombre.'</option>';
$txt.='value="'.$mesa.'"';

}
$txt.='</select>';
$txt.='<button>enviar</button>';
$txt.='</form>';
echo $txt;
echo $_GET['companero'];


?>
<br> 
</br> 
</form>
<div id="r"	style="background-color:pink">
1</div>
<script>

function calcular(){
mesa=document.getElementById("x").value;
document.getElementById('r').innerHTML =Math.round(mesa);
}

calcular();
</script>
</center>
</body>
</html>

