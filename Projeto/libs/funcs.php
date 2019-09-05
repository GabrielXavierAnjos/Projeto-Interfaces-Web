<?php
function navega ($pagina){
switch ($pagina) {
    case 'brasileiro':
      require 'paginas/brasileiro.php';
      break;
    case 'uruguaio':
      require 'paginas/uruguaio.php';
      break;
    case 'curiosidades':
      require 'paginas/curiosidades.php';
      break;
    case 'argentino':
      require 'paginas/argentino.php';
      break;
    case 'paraguaio':
      require 'paginas/paraguaio.php';
      break;
   

  default:
  require 'paginas/home.php';
    break;
}

}

 ?>
