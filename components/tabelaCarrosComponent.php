<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cardCarros.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Lista de Carros</title>
</head>
<body>
    <div class="container mt-5">
        <div class="mb-4 text-center">
            <h2 class="fw-bold">Lista de Carros</h2>
        </div>
        <?php
            include_once '../model/carrosModel.php';

            $db = new CarrosModel();
            $carros = $db->getCarros();
            $db->closeConnection();

            if ($carros->num_rows > 0) {
                echo '<table class="table table-striped table-bordered">';
                echo '<thead class="table-dark">
                        <tr>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>Quilometragem</th>
                            <th>Câmbio</th>
                            <th>Valor</th>
                            <th>Disponibilidade</th>
                            <th>Ações</th>
                        </tr>
                      </thead>';
                echo '<tbody>';
                while ($row = $carros->fetch_assoc()) {
                    echo '<tr>
                            <td><img src="../styles/carros/' . $row["foto"] . '.jpg" alt="Imagem do Carro" width="100"></td>
                            <td>' . $row["nome"] . '</td>
                            <td>' . $row["quilometragem"] . ' Km</td>
                            <td>' . $row["cambio"] . '</td>
                            <td><b>R$ ' . $row["valor"] . '</b></td>
                            <td>Disponível em 1 loja</td>
                            <td>
                                <a href="detalhesVeiculo.php?id=' . $row["id"] . '" class="btn btn-primary btn-sm">Detalhes</a>
                                <a href="excluirCarro.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Tem certeza que deseja excluir este carro?\');">Excluir</a>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCarro" 
                                data-id="' . $row["id"] . '" 
                                data-nome="' . $row["nome"] . '" 
                                data-valor="' . $row["valor"] . '"
                                data-anoFabricacao="' . $row["anoFabricacao"] . '"
                                data-anoModelo="' . $row["anoModelo"] . '"
                                data-cor="' . $row["cor"] . '"
                                data-combustivel="' . $row["combustivel"] . '"
                                data-quilometragem="' . $row["quilometragem"] . '"
                                data-cambio="' . $row["cambio"] . '"
                                data-placa="' . $row["placa"] . '"
                                data-descricao="' . $row["descricao"] . '"
                                data-idCategoria="' . $row["idCategoria"] . '"
                                data-idMarca="' . $row["idMarca"] . '"
                                data-idContato="' . $row["idContato"] . '">Modificar</button>
                            </td>
                          </tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p class="text-danger text-center">Nenhum Carro encontrado</p>';
            }
        ?>
    </div>

    <!-- Modal de Edição -->
    <div class="modal fade" id="modalEditarCarro" tabindex="-1" aria-labelledby="modalEditarCarroLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarCarroLabel">Modificar Veículo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../controller/atualizarCarrosController.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="modal-id">
                        
                        <label>Nome do Carro:</label>
                        <input type="text" class="form-control" name="nome" id="modal-nome" required>

                        <label>Valor:</label>
                        <input type="text" class="form-control" name="valor" id="modal-valor" required>

                        <label>Ano de Fabricação:</label>
                        <input type="text" class="form-control" name="anoFabricacao" id="modal-anoFabricacao" required>

                        <label>Ano do Modelo:</label>
                        <input type="text" class="form-control" name="anoModelo" id="modal-anoModelo" required>

                        <label>Cor:</label>
                        <input type="text" class="form-control" name="cor" id="modal-cor" required>

                        <label>Combustível:</label>
                        <input type="text" class="form-control" name="combustivel" id="modal-combustivel" required>

                        <label>Quilometragem:</label>
                        <input type="number" class="form-control" name="quilometragem" id="modal-quilometragem" required>

                        <label>Câmbio:</label>
                        <input type="text" class="form-control" name="cambio" id="modal-cambio" required>

                        <label>Placa:</label>
                        <input type="text" class="form-control" name="placa" id="modal-placa" required>

                        <label>Descrição:</label>
                        <textarea class="form-control" name="descricao" id="modal-descricao"></textarea>

                        <label>Imagem:</label>
                        <input type="file" class="form-control" name="imagem" id="modal-imagem">
                        
                        <button type="submit" class="btn btn-success mt-3">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const modalEditarCarro = document.getElementById('modalEditarCarro');
        modalEditarCarro.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            document.getElementById('modal-id').value = button.getAttribute('data-id');
            document.getElementById('modal-nome').value = button.getAttribute('data-nome');
            document.getElementById('modal-valor').value = button.getAttribute('data-valor');
            document.getElementById('modal-anoFabricacao').value = button.getAttribute('data-anoFabricacao');
            document.getElementById('modal-anoModelo').value = button.getAttribute('data-anoModelo');
            document.getElementById('modal-cor').value = button.getAttribute('data-cor');
            document.getElementById('modal-combustivel').value = button.getAttribute('data-combustivel');
            document.getElementById('modal-quilometragem').value = button.getAttribute('data-quilometragem');
            document.getElementById('modal-cambio').value = button.getAttribute('data-cambio');
            document.getElementById('modal-placa').value = button.getAttribute('data-placa');
            document.getElementById('modal-descricao').value = button.getAttribute('data-descricao');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
