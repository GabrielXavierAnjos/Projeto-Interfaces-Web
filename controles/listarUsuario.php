<?php
session_start();
include_once("../libs/conexao.php");


$result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
$resultado_usuarios = mysqli_query($conn,$result_usuarios);
while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
  echo "ID: ".$row_usuario ['id']."<br>";
  echo "Nome: ".$row_usuario ['nome']."<br>";
  echo "E-mail: ".$row_usuario ['email']."<br>";
  echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
  echo "<a href='../libs/proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
?>
