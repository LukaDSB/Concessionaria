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
    $idCategoria = $_POST['idCategoria'];
    $idMarca = $_POST['idMarca'];
    $idContato = $_POST['idContato'];

    $result = $carrosModel->atualizarCarros($id, $nome, $nomeImagemBanco, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao, $idCategoria, $idMarca, $idContato);

    if ($result) {
        header('Location: ../views/principal.php');
    } else {
        echo "Erro ao atualizar o carro.";
    }

    $carrosModel->closeConnection();
} else {
    echo "Método de requisição inválido.";
}
?>