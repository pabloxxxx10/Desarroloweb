<?php
session_start();
error_reporting(0);
session_destroy();
header("Localtion:formulario.html");
?>