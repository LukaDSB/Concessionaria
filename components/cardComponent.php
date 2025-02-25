<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cardCarros.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
    <h1 style="margin-left:18%">Usados</h1>
    <container>
        <?php
            include_once '../model/carrosModel.php';

            $db = new CarrosModel();
            $carros = $db->getCarros();
            $db->closeConnection();

            if ($carros->num_rows > 0) {
                while ($row = $carros->fetch_assoc()) {
                echo '<a href="detalhesVeiculo.php?id=' . $row["id"] . '" class="card-link">
                <div class="cardCarros">
                    <div class="card-body-carros">
                        <img src="../styles/carros/'. $row["foto"] .'.jpg" alt="Imagem do Carro ">
                        <h5 class="card-title">' . $row["nome"] . '</h5>
                        <p class="card-text">' . $row["quilometragem"] . 'Km / '.$row["cambio"].'</p>
                        <p class="card-text"><b>R$' . $row["valor"] . '</b></p>
                        <p class="card-text"><i class="fas fa-location-dot fa-2x"></i>   Disponível em 1 loja</p>
                    </div>
                </div>
              </a>';
                }
            } else {
                echo "<p>Nenhum Carro encontrado</p>";
            }
        ?> 
    </container>
     
</body>
</html>

