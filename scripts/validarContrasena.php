<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Validar Password</title>

<script type="text/javascript">
 function validarPasswd () {
   
  var p1 = document.getElementById("passwd").value;
  var p2 = document.getElementById("passwd2").value;
  var espacios = false;
  var cont = 0;

  // Este bucle recorre la cadena para comprobar
  // que no todo son espacios
        while (!espacios && (cont < p1.length)) {
                if (p1.charAt(cont) == " ")
                        espacios = true;
                cont++;
        }
   
  if (espacios) {
   alert ("La contrase�a no puede contener espacios en blanco");
   return false;
  }
   
  if (p1.length == 0 || p2.length == 0) {
   alert("Los campos de la password no pueden quedar vacios");
   return false;
  }
   
  if (p1 != p2) {
   alert("Las passwords deben de coincidir");
   return false;
  } else {
   alert("Todo esta correcto");
   return true; 
  }
 }
</script>
</head>



<body>

<h1>Validar Password con JavaScript</h1>

<form name="form1" method="POST" onSubmit="return validarPasswd()" action="enviar.php">

<p>Inserte su contrase�a. Esta no deber� de contener espacios en blanco y deber� de coincidir en los
dos campos</p>
   
<label for="passwd">Contrase�a:</label>
<input type="password" id="passwd" size="20"><br />

<label for="passwd2">Confirmar Contrase�a:</label>
<input type="password" id="passwd2" size="20"><br />

<input type="submit" value="Enviar"/>
<input type="reset" value="Restablecer"/>

</form>


</body>
</html>