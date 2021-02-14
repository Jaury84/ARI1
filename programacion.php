


hola mundo
<div>
	<form>
		<input	id="r" name="r" placeholder="Resistencia" onkeyup="calcular()">
		<input	id="v" name="v" placeholder="Voltaje" onkeyup="calcular()">
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

console.log("Vamos a calcular la intensidad que circula por una resistencia");
function calcular(){
	r=document.getElementById("r").value;
	v=document.getElementById("v").value;
	i=Math.round(v/r*1000)/1000;
	document.getElementById("resultado").innerHTML=i+" Amperios" ;
	}
</script>
<?php
print_r($_GET);
?>