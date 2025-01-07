<?php
include_once '../model/carrosModel.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $db = new CarrosModel();
    $carro = $db->getCarroPorId($id);
    $db->closeConnection();

    if (!$carro) {
        echo "<p>Veículo não encontrado.</p>";
        exit;
    }
} else {
    echo "<p>ID do veículo não especificado.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Veículo</title>
    <link rel="stylesheet" href="../styles/detalhesVeiculos.css">
    <style>@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");</style>
</head>
<body>
    <main>
        <section class="informacoes-gerais">
            <div class="titulo-header">
            <img src="<?= '../styles/marcas/'.$carro['foto'].'.svg' ?? 'Imagem não informada' ?>" alt="Logo do Veículo" class="logo" style="width: 80px; height: auto;">

                <div class="titulo-header-nome-veiculo">
                    <h2><?= $carro['nome'] ?? 'Nome não informado' ?></h2>
                    <i class="bi bi-circle-fill"></i>
                </div>
                <button class="btn-favoritar-veiculo"><i class="bi bi-heart"></i></button>
            </div>

            <div class="atributos-veiculo">
                <div class="atributo-veiculo">
                    <p>Ano</p>
                    <h4><?= $carro['anoModelo'] ?? 'Modelo não informado' ?></h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Cor</p>
                    <h4><?= $carro['cor'] ?? 'Cor não informada' ?></h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Combustível</p>
                    <h4><?= $carro['combustivel'] ?? 'Combustivel não informado' ?></h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Quilometragem</p>
                    <h4><?= $carro['quilometragem'] ?? 'Quilometragem não informada' ?></h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Câmbio</p>
                    <h4><?= $carro['cambio'] ?? 'Cambio não informado' ?></h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Final da Placa</p>
                    <h4><?= $carro['placa'] ?? 'Placa não informada' ?></h4>
                </div>
            </div>

            <div class="descricao-veiculo">
                <h4>Descrição do Veículo</h4>
                <p><?= nl2br(htmlspecialchars($carro['descricao'])) ?></p>
            </div>
        </section>

        <section class="informacoes-locacao">
            <h2>R$ <?= number_format($carro['valor'], 2, ',', '.') ?></h2>
            <p>Entre em contato com um vendedor</p>

            <form action="enviarMensagem.php" method="POST">
                <input type="hidden" name="idCarro" value="<?= $id ?>">
                <div class="informacoes-locacao-inputs">
                    <input type="text" name="nome" class="input-text" placeholder="Nome*" required>
                    <input type="email" name="email" class="input-email" placeholder="Email*" required>
                    <input type="tel" name="telefone" class="input-telefone" placeholder="Telefone*" required>
                    <textarea name="mensagem" placeholder="Mensagem*" required></textarea>
                </div>
                <input type="submit" value="Enviar Mensagem">
            </form>
        </section>
    </main>
</body>
</html>
