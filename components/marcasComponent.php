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

        <div class="divisor"></div>

        <div class="buscaVeiculo">
            <h3>Encontre seu veículo</h3>
            <div class="conteudoInterno">
                <div class="row g-3 divEsquerda">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="input1" placeholder="Marca">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="input2" placeholder="Modelo">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="input3" placeholder="Versão">
                    </div>
                    
                    <div class="divider">
                        <span>ou</span>
                    </div>
                    <div class="input-group search-bar">
                        <input type="text" class="form-control" placeholder="Busque por marca ou modelo do carro">
                    </div>
                </div>

                <div class="divDireita">
                    <div class="checkbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="check1">
                            <label class="form-check-label" for="check1">
                                Novo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="check1">
                            <label class="form-check-label" for="check1">
                                Seminovo
                            </label>
                        </div>
                    </div>
                    <br>
                    <button class="btn" style="background: linear-gradient(90deg, rgba(0,66,134,1) 30%, rgba(79,153,255,1) 70%);width:250px;">
                        <b>Ver veículos -></b>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>