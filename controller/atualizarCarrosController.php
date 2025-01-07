<?php 
include_once ('../model/carrosModel.php');

if (isset($_POST['id'])) {
    $carrosModel = new CarrosModel();
    
    $id = $_POST['id'];
    $nome = $_POST['nome']; 
    $valor = $_POST['valor'];
    $anoFabricacao = $_POST['anoFabricacao'];
    $anoModelo = $_POST['anoModelo'];
    $cor = $_POST['cor'];
    $combustivel = $_POST['combustivel'];
    $quilometragem = $_POST['quilometragem'];
    $cambio = $_POST['cambio'];
    $placa = $_POST['placa'];
    $descricao = $_POST['descricao'];

    $result = $carrosModel->atualizarCarros($id, $nome, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao);

    if ($result) {
        header('Location: ../views/administrador.php');
    } else {
        echo "Erro ao cadastrar carro.";
    }

    $carrosModel->closeConnection();
} else {
    echo "Método de requisição inválido.";
}
?>