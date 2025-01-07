<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/administrador.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include '../components/headerComponent.php';?>

<h1>Veículos cadastrados:</h1>
<?php include '../components/tabelaCarrosComponent.php';?><br>

        <div class="formulario">
            <h1>Cadastrar Novo Veículo</h1>
            <form action="../controller/cadastroCarrosController.php" method="POST" enctype="multipart/form-data">
                <label for="nome">Nome do Carro:</label>
                <input class="form-control col-sm-10" type="text" name="nome" id="nome" required><br>
                
                <label for="valor">Valor:</label>
                <input class="form-control" type="text" name="valor" id="valor" required><br>

                <label for="anoFabricacao">Ano de Fabricação:</label>
                <input class="form-control" type="text" name="anoFabricacao" id="anoFabricacao" required><br>

                <label for="anoModelo">Ano do Modelo:</label>
                <input class="form-control" type="text" name="anoModelo" id="anoModelo" required><br>

                <label for="cor">Cor:</label>
                <input class="form-control" type="text" name="cor" id="cor" required><br>

                <label for="combustivel">Combustível:</label>
                <input class="form-control" type="text" name="combustivel" id="combustivel" required><br>

                <label for="quilometragem">Quilometragem:</label>
                <input class="form-control" type="number" name="quilometragem" id="quilometragem" required><br>

                <label for="cambio">Câmbio:</label>
                <input class="form-control" type="text" name="cambio" id="cambio" required><br>

                <label for="placa">Placa:</label>
                <input class="form-control" type="text" name="placa" id="placa" required><br>

                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>

                <label for="idCategoria">Categoria:</label>
                <input class="form-control" type="number" name="idCategoria" id="idCategoria" ><br>

                <label for="idMarca">Marca:</label>
                <input class="form-control" type="number" name="idMarca" id="idMarca" required><br>

                <label for="idContato">Contato:</label>
                <input class="form-control" type="number" name="idContato" id="idContato" ><br>

                <label for="imagem">Imagem:</label>
                <input class="form-control" type="file" name="imagem" id="imagem" accept="image/*"><br>

                <input type="submit" value="Cadastrar Carro">
            </form>
        </div>

        <?php include '../components/footerComponent.php';?>
</body>
</html>