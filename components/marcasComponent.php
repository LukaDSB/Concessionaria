<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/marcas.css">
</head>
<body>
    <div class="divMarcas">

        <div class="divMarcasHeader">
            <h3>NAVEGUE POR NOSSAS MARCAS</h3>
        </div>

        <div class="divMarcasLista">
            <ul>
            <?php
                $diretorio = '../styles/marcas/';
                
                $arquivos = glob($diretorio . '*.svg');
                
                foreach ($arquivos as $arquivo) {
                    echo '<li><img src="' . $arquivo . '" alt="Marca"></li>';
                }
                ?>
            </ul>
        </div>

    </div>
</body>
</html>