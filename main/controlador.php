<?php

class MainController {
    public function main() {
        session_start();
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: index.php?ruta=login");
            exit;
        }
        $nombreUsuario = $_SESSION["nombre"];
        $moduloActivo = $_GET['modulo'] ?? '';
        include 'main/vista/main.php';
    }
}


?>