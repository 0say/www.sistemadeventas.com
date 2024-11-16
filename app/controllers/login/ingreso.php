<?php
// ../app/controllers/login/ingreso.php
// Aqui se recibe los datos del formulario de login.

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];  

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' AND password_user = '$password_user'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario)
{
    $contador++;
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
}

if($contador == 0)
{
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Datos incorrectos, vuelva a intentarlo"; 
    header('Location: '.$URL);

}
else 
{
  echo "Datos correctos.";
  session_start();
  $_SESSION['sesion_email'] = $email;
  header ('Location: '.$URL.'/index.php');
  
}


?>