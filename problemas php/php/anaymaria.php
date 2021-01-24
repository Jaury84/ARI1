<?php
if(!isset($_GET['A']))
if(!isset($_GET['B']))
if(!isset($_GET['F']))
if(!isset($_GET['S']))
$_GET['A']=2010;
$_GET['B']=2015;
$_GET['F']=3;
$_GET['S']=54;
?>

<img src="mariayana.jpg" alt="" width="892px" height="536px"/>
<div>
<form>
		<input	id="A" name="A" placeholder="Año1" onkeyup="calcular()" value="<?=$_GET['A']?>"/>
		<input	id="B" name="B" placeholder="Año2" onkeyup="calcular()" value="<?=$_GET['B']?>"/>
		<input	id="F" name="F" placeholder="Factor" onkeyup="calcular()" value="<?=$_GET['F']?>"/>
		<input	id="S" name="S" placeholder="Suma" onkeyup="calcular()" value="<?=$_GET['S']?>"/>
		<button onclick="calcular()">Calcular</button>
</form>
</div>
<div	id="resultado1"	style="
		padding:30px;
		background-color:pink;
		width:vw
		">
</div>
<div	id="resultado2"	style="
		padding:30px;
		background-color:pink;
		width:vw
		">
</div>
<div	id="resultado3"	style="
		padding:30px;
		background-color:pink;
		width:vw
		">
</div>
<div	id="resultado4"	style="
		padding:30px;
		background-color:pink;
		width:vw
		">
</div>
<div	id="resultado5"	style="
		padding:30px;
		background-color:pink;
		width:vw
		">
</div>
<script>

console.log("Vamos a calcular las edades de Ana y Maria");
function calcular(){
	A=document.getElementById("A").value;
	B=document.getElementById("B").value;
	F=document.getElementById("F").value;
	S=document.getElementById("S").value;
	
	Y=Math.round(((S-(2*B)+(2*A))/4)*100)/100;
	document.getElementById("resultado1").innerHTML=Y+"		Edad Maria";
	X=Math.round((Y*F)*100)/100;
	document.getElementById("resultado2").innerHTML=X+"		Edad Ana";
	A3=Math.round((A-Y)*100)/100;
	document.getElementById("resultado3").innerHTML=A3+"	Año nacimiento Ana";
	A4=Math.round((A-X)*100)/100;
	document.getElementById("resultado4").innerHTML=A4+"	Año nacimiento Maria";
	Z=Math.round((X-Y)*100)/100;
	document.getElementById("resultado5").innerHTML=Z+"		Edad de Maria cuando nacio Ana";
}
calcular();
</script>
<?php
$A=round ($_GET['A'],2);
$B=round ($_GET['B'],2);
$F=round ($_GET['F'],2);
$S=round ($_GET['S'],2);
$Y=round ((($S-(2*$B)+(2*$A))/4),2);
$X=round (($Y*$F),2);
$A3=round (($A-$Y),2);
$A4=round (($A-$X),2);
$Z=round (($X-$Y),2);
echo $Y."	Edad Maria"."<br/>";
echo $A3."	Año nacimiento Maria"."<br/>";
echo $A4."	Año nacimiento Ana"."<br/>";
echo $Z."	Edad Ana al nacer Maria"."<br/>";
echo $A."	Año 1"."<br/>";
echo $B."	Año 2"."<br/>";
echo $F."	Factor "."<br/>";
echo $S."	Suma de las edades"."<br/>";
echo $X."	Edad Ana"."<br/>";
?>


