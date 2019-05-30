<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulários em HTML</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto py-5">

          <h3>Autenticação</h3>
          <hr>

          <!-- O action é o arquivo para onde os dados deste formulário serão enviados
          method se refere a como esses dados serão enviados.
          - get - pela url
          - post - empacotados -->
          <form action="formularioControle.php" method="post">

            <!-- label serve apenas de etiqueta para o campo -->
            <label>Login:</label><br>
            <!-- Todo input tem que ter um type (tipo) e um name (identificação)
            O name é a identificação do campo lá no action deste formulário -->
            <input type="text" name="login" value="" class="form-control"><br>

            <label>Senha:</label><br>
            <input type="password" name="senha" value="" class="form-control"><br>


            <button type="submit" class="mt-3 btn btn-primary">Entrar</button>
            <br>
            <a href="#">Recuperar senha</a>

          </form>

        </div>
      </div>
    </div>

  </body>
</html>
