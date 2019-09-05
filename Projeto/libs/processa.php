
<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);

// echo "Nome: $nome <br>";
// echo "E-mail: $email <br>";


$result_usuarios = "INSERT INTO usuarios (nome,email,criado) VALUES ('$nome', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_insert_id($conn)) {
$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
  header("Location: ../paginas/formulario.php");
}else {
  $_SESSION['msg'] = "<p style='color:green;'>Usuário não foi cadastrado com sucesso</p>";
  header("Location: ../paginas/formulario.php");

}
 ?>
