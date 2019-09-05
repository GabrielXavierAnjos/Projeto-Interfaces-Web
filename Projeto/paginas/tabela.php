<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabela</title>
    <link rel="stylesheet" href="../bootstrap//bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/datatables.min.css"/>

    </script>
  </head>
  <body>

    <table id="tabela" class="display table table-striped">
      <thead>
          <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
        </tr>
        <tr>
          <td>Ernst Handel</td>
          <td>Roland Mendel</td>
          <td>Austria</td>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>Helen Bennett</td>
          <td>UK</td>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Yoshi Tannamuri</td>
          <td>Canada</td>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Giovanni Rovelli</td>
          <td>Italy</td>
        </tr>
      </tbody>
    </table>





    <script src="../js/jquery-3.4.1.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/bootstrap.min.js"></script>
    <script  src="../js/datatables.min.js"></script>
    <script >
    $(document).ready(function(){
           $('#tabela').dataTable();
       });
    </script>

  </body>
</html>
