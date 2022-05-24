<?php
//holiiiiiii errorrrrr
  include_once "view/module/head.php";
  include_once "view/module/header.php";
  include_once "view/module/menu.php";

  if (isset($_GET["ruta"])){ 
    switch ($_GET["ruta"]) {
      case 'usuario':
        include_once "view/module/user.php";
        break;

      case 'erase':
        include_once "view/module/erase.php";
        break;

      default:
        include_once "view/module/presentation.php";
        break;
    }
  }else{
      include_once "view/module/presentation.php";
    }
  
  include_once "view/module/footer.php";
  
?>
