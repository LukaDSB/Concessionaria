<?php
include_once '../model/carrosModel.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $carrosModel = new CarrosModel();
    $result = $carrosModel->excluirFilme($id);

    if ($result) {
        header('Location: ../views/administrador.php');
        exit();
    } else {
        echo "Erro ao excluir registro.";
    }
}
?>
