<?php
$d = isset($_GET["ds"])?$_GET["ds"]:0;
$s = isset($_GET["s"])?$_GET["s"]:0;

switch ($d){
  case 2:
  case 3:
  case 4:
  case 5:
  case 6:
      echo "Dia de estudar";
      break;
  case 7:
  case 8:
      echo "Dia de descansr";
      break;
  default :
      echo "Dia inválido";
}

echo "<br/>$s";
    
?>
<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
