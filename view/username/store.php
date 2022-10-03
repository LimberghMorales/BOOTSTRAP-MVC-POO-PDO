<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre']);
?>