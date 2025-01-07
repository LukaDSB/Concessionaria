<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cardCarros.css">
</head>
<body>
    <container>
        <?php
            include_once '../model/carrosModel.php';

            $db = new CarrosModel();
            $carros = $db->getCarros();
            $db->closeConnection();
            $contador = 1;

            if ($carros->num_rows > 0) {
                while ($row = $carros->fetch_assoc()) {
                echo '<a href="detalhesVeiculo.php?id=' . $row["id"] . '" class="card-link">
                <div class="cardCarros">
                    <div class="card-body-carros">
                        <img src="../styles/carros/' . $contador . '.jpg" alt="Imagem do Carro ' . $contador . '">
                        <h5 class="card-title">' . $row["nome"] . '</h5>
                        <p class="card-text">' . $row["quilometragem"] . 'Km / '.$row["cambio"].'</p>
                        <p class="card-text"><b>R$' . $row["valor"] . '</b></p>
                        <p class="card-text">Disponível em 1 loja</p>
                    </div>
                </div>
              </a>';
                    $contador++;
                }
            } else {
                echo "<p>Nenhum Carro encontrado</p>";
            }
        ?> 
    </container>
     
</body>
</html>

