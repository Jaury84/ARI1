<?php
if(!isset($_GET['A']))
$_GET['A']=1;
if(!isset($_GET['D']))
$_GET['D']=4;
?>

<img src="fuente.png" alt="" width="892px" height="536px"/>
<div>
<form>
	<input	id="A" name="A" placeholder="Ancho" onkeyup="calcular()" value="<?=$_GET['A']?>"/>
	<input	id="D" name="D" placeholder="Diametro" onkeyup="calcular()" value="<?=$_GET['D']?>"/>
	<button onclick="calcular()">Calcular</button>
</form>
</div>
<div	id="resultado"	style="
		padding:30px;
		background-color:pink;
		width:vw
		">
</div>
<script>

console.log("Vamos a calcular la circunferencia");
function calcular(){
	A=document.getElementById("A").value;
	D=document.getElementById("D").value;
	A=parseFloat(A);
	D=parseFloat(D);
	C=Math.round(Math.PI*(D+(2*A))*100)/100;
	document.getElementById("resultado").innerHTML=C+"	Circunferencia" ;
	}
	calcular();
</script>
<?php
$A=round ($_GET['A'],2);
$D=round ($_GET['D'],2);
echo round ((M_PI*($D+(2*$A))),2)."m";
?>