<?php
session_start();
include_once("../libs/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  </script>
  <title>Listar</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand h1 mb-0" href="#">VIVA O MATE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navebarSite">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navebarSite">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="brasileiro.php">Brasileiro</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="uruguaio.php">Uruguaio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="argentino.php">Argentino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paraguaio.php">Paraguaio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="curiosidades.php">Curiosidades</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">
                          Socal
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Facebook</a>
                          <a class="dropdown-item" href="#">Twitter</a>
                          <a class="dropdown-item" href="#">Instagram</a>
                        </div>
                      </li>
                    </ul>
                    <form class="form-inline">
                      <input class="form-control ml-4 mr-2" type="search" placeholder="Buscar...">
                      <button class="btn btn-dark" type="submit">Ok</button>
                    </form>
                  </div>
          </div>
      </nav>
    <h1>Listar Usuário</h1>
    <?php
if (isset($_SESSION['msg'])) {
  echo $_SESSION['msg'];
  unset ($_SESSION['msg']);
}

//receber o numero da pagina
$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual:1;

// Setar a quantidade de item por pagina

$qnt_result_pg = 3;

//calcular inicio da visualização
$inicio = ($qnt_result_pg * $pagina)- $qnt_result_pg;

$result_usuarios = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
$resultado_usuarios = mysqli_query($conn,$result_usuarios);
while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
  echo "ID: ".$row_usuario ['id']."<br>";
  echo "Nome: ".$row_usuario ['nome']."<br>";
  echo "E-mail: ".$row_usuario ['email']."<br>";
  echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
  echo "<a href='../libs/proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
 }

//paginação - Somar a quantidade de usuários

$result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
$resultado_pg = mysqli_query($conn,$result_pg);
$row_pg =  mysqli_fetch_assoc ($resultado_pg);
//echo $row_pg['num_result'];
// Quantidade de paginas
$quantidade_pg = ceil($row_pg['num_result']/$qnt_result_pg);

//Limitar os links antes e depois
$max_links = 2;

echo "<a href='listar.php?pagina=1'> Primeira</a>";
for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina; $pag_ant++) {
  if ($pag_ant>=1) {

    echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a>";
  }


}
echo "$pagina";

for ($pag_dep = $pagina+1; $pag_dep<=$pagina+$max_links; $pag_dep++) {
  if ($pag_dep<=$quantidade_pg) {
    echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a>";
  }

}
echo "<a href='listar.php?pagina=$quantidade_pg'> última</a>";

?>





    <script src="js/jquery-3.4.1.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
  </body>
</html>
