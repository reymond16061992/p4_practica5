<?php
session_start();
if(!isset($_SESSION['codigo'])){
header("Location: http://localhost/Sesion.php");
}
?>
<html>
  <head>
  

  </head>
  <body>

<a href="Cerrar.php"><h4>Cerrar Sesion</h4></a>
   <form method="post" action="Nuevo.php">
      
<input type="submit" value="Nuevo" />
   
 </form>	
</body>

</html>
