<?php
if(!isset($_GET['A']))
$_GET['A']=14;
if(!isset($_GET['b']))
$_GET['b']=2;
if(!isset($_GET['h']))
$_GET['h']=4;
?>
<img src="trapecio.jpg" alt="" width="892px" height="536px"/>
<div>
	<form>
		<input	id="A" name="A" placeholder="Area" onkeyup="calcular()" value="<?=$_GET['A']?>"/>
		<input	id="b" name="b" placeholder="Base menor" onkeyup="calcular()" value="<?=$_GET['b']?>"/>
		<input	id="h" name="h" placeholder="Altura" onkeyup="calcular()" value="<?=$_GET['h']?>"/>	
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

console.log("Vamos a calcular la base mayor de un trapecio");
function calcular(){
	A=document.getElementById("A").value;
	b=document.getElementById("b").value;
	h=document.getElementById("h").value;
	document.getElementById("resultado").innerHTML=Math.round((((A*2)/h)-b)*100)/100+"cm";
	}
	calcular();
</script>
<?php
$A=round ($_GET['A'],2);
$b=round ($_GET['b'],2);
$h=round ($_GET['h'],2);
echo round(((($A*2)/$h)-$b),2)."cm";
?>

