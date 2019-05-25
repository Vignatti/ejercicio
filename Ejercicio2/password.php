<?php 
$fp = fopen("archivo.txt", "a");
$i=0;
while(!feof($fp))  { 
$i++;
 $linea = fgets($fp);
    $cadena[$i]= explode (':', $linea);
    $passw = rtrim ($cadena[$i][1]);
	$passHash = password_hash($passw, PASSWORD_BCRYPT);
    fwrite($fp, $passw[$passHash] . PHP_EOL);
}
fclose($fp);
?>
