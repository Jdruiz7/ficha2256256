<!-- Documento de desarrollador -->
<?php

    //////CONTROLLER//////

    require_once "controller/user.controller.php";
    require_once "controller/template.controller.php";

    ////MODELS///////

    require_once "model/dao/user.dao.php";
    require_once "model/dto/user.dto.php";

    ////// CONEXION /////

    require_once "model/conexion.php";

    /// start///

    $objrun = new template();
    $objrun -> getIntro();


?>
