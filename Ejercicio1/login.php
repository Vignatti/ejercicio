<?php 

$name = $_POST['usuario']; 
$pass = $_POST['password'];

if (($name == "mery") && ($pass == "mery"))
	{
        echo"<b>BIENVENIDO </b>";}
        else 
        { 
        echo "<b>Fallo al conectar a la BD</b>";}
?>
 <html> <br>
  <button type="button" name="volver" class="btn btn-default">VOVLER</button>
</html>

