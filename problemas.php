<form>
<input name="v"/>
<input name="r"/>
<button>Enviar</button>
</form>

<?php

// la cosa mas secreta del mundo

print_r($_GET);

$V = $_GET['v'];
$V = $_GET['r'];

echo 'Intensidad = '.$v/$r;

?>