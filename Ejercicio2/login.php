<?php 

$name = $_POST['usuario'];
$passw = $_POST['password'];

$fp = fopen("archivo.txt", "r");

$i=0;
$tf=false;

$salt = md5($passw);
$pasword_encriptado = crypt($passw, $salt);

while(!feof($fp))  { 
$i++;
    $linea = fgets($fp);
    $cadena[$i]= explode (':', $linea);
    $passw2 = rtrim ($cadena[$i][1]);
 //   if ( ($name == $cadena[$i][0]) &&  ($passw == rtrim ($cadena[$i][1])) )
    if ( ($name == $cadena[$i][0]) &&  ($passw2 == $pasword_encriptado))
	{
	$tf=true;
 	break;
 	 }
	$fp++;
}
fclose($fp);
if ($tf== true){
echo"<b>BIENVENIDO </b>";
}
else { 
echo "<b>Fallo al conectar a la BD</b>";}
?>

<!-- html> <br><br><br><br> 
   <button type="button" name="volver" class="btn btn-default">VOLVER</button>
</html>-->
