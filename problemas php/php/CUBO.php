<?php
if(!isset($_GET['m3']))  $_GET['m3']=13.5;
?>

<img src="CUBO.jpg" alt="" width="892px" height="536px"/>
<div>
<form>
		<input	id="m3" name="m3" placeholder="metros cubicos" onkeyup="calcular()" value="<?=$_GET['m3']?>"/>
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

console.log("Vamos a calcular las dimensiones del deposito");
function calcular(){
	m3=document.getElementById("m3").value;
	document.getElementById("resultado").innerHTML=Math.round(((2*m3)**(1/3))*100)/100+"m";
	}
calcular();
</script>

<?php
	$m3=round ($_GET['m3'],2);
	echo round (((2*$m3)**(1/3)),2)."m";
?>