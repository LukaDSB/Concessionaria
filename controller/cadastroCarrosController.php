<?php
include_once '../model/carrosModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $diretorio = '../styles/carros/';
        
        $nomeImagem = uniqid() . '.jpg';
        $nomeImagemBanco = uniqid();

        $caminhoImagem = $diretorio . $nomeImagem;

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)) {
            $carrosModel = new CarrosModel();

            $result = $carrosModel->cadastrarVeiculo($nome, $nomeImagemBanco, $valor, $anoFabricacao, $anoModelo, $cor, $combustivel, $quilometragem, $cambio, $placa, $descricao, $idCategoria, $idMarca, $idContato);

            if ($result) {
                header('Location: ../views/principal.php');
            } else {
                echo "Erro ao cadastrar carro.";
            }

            $filmesModel->closeConnection();
        } else {
            echo "Erro ao mover o arquivo da imagem.";
        }
    } else {
        echo "Nenhuma imagem foi enviada.";
    }
} else {
    echo "Método de requisição inválido.";
}
