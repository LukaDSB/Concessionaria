<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>
    <link rel="stylesheet" href="../styles/detalhesVeiculos.css">
   <style>@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");</style>
</head>
<body>
    
    <!-- BANNER -->
     <!-- ///BANNER -->
    
     <main>
        
        <section class="informacoes-gerais">
            <div class="titulo-header">
                <img src="" alt="LogoVeiculo" class="logo">
                    <div class="titulo-header-nome-veiculo">
                        <h2>Nome do Carro</h2>
                        <i class="bi bi-circle-fill"></i>
                        <p>Detalhes do Carro</p>
                    </div>
                <button class="btn-favoritar-veiculo"><i class="bi bi-heart"></i></button>
            </div>
            <div class="atributos-veiculo">
                <div class="atributo-veiculo">
                    <p>Ano</p>
                    <h4>2024/2024</h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Cor</p>
                    <h4>Cinza</h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Combustível</p>
                    <h4>Tipo de combustivel</h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Quilometragem</p>
                    <h4>numero aleatório de km</h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Câmbio</p>
                    <h4>Tipo de Cambio</h4>
                </div>
                <div class="atributo-veiculo">
                    <p>Final da Placa</p>
                    <h4>Numero</h4>
                </div>
            </div>
            <div class="descricao-veiculo">
                <h4>Descrição do Veículo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempus, ex ac pellentesque volutpat, justo nunc facilisis elit, eget maximus ante magna non leo. Ut pharetra gravida laoreet. Aliquam rhoncus auctor velit eget rhoncus. Donec eget congue tellus. Cras at tellus nec felis tempor egestas. Aenean ut ullamcorper felis. Fusce sem tortor, commodo vel arcu sed, porta eleifend arcu. Sed facilisis finibus tortor ac pharetra. Curabitur elementum tristique odio vitae suscipit.</p>
            </div>
            <div class="itens-veiculo">
                <div class="itens-veiculo-titulo">
                    <p>Itens de veículo</p>
                </div>
                <div class="itens-veiculo-lista">
                    <div class="itens-veiculo-lista-unidade">
                    <i class="bi bi-circle-fill"></i>
                    <p>Descrição</p>
                    </div>
                </div>
            </div>

        </section>

        <section class="informacoes-locacao">
            <h2>R$ 50.000,00</h2>
            <p>Entre em contato com um vendedor</p>

            <form action="">
               <div class="informacoes-locacao-inputs">
               <input type="text" class="input-text" placeholder="Nome*">
                <input type="email" class="input-email" placeholder="Email*">
                <input type="number" class="input-telefone" placeholder="Telefone*">
                <input type="text" class="input-text" placeholder="Mensagem*">
               </div>
                
                <!-- permissões -->
                 <div class="informacoes-locacao-checkbox">
                 <input type="checkbox" id="trocarVeiculo" name="trocarVeiculo" value="trocarVeiculo">
                 <label for="trocarVeiculo"> Quero usar meu veículo na troca</label><br>
                 </div>
                 <div class="informacoes-locacao-checkbox">
                 <input type="checkbox" id="financiarVeiculo" name="financiarVeiculo" value="financiarVeiculo">
                 <label for="financiarVeiculo"> Pretendo financiar esse veículo</label><br>
                </div>
                <div class="informacoes-locacao-checkbox">
                <input type="checkbox" id="cotacaoSeguro" name="cotacaoSeguro" value="cotacaoSeguro">
                <label for="cotacaoSeguro"> Gostaria de receber uma cotação de seguro</label>
                </div>
                <div class="informacoes-locacao-checkbox">
                <input type="checkbox" id="receberOfertas" name="receberOfertas" value="receberOfertas">
                <label for="receberOfertas"> Aceito receber ofertas por canais de comunicação</label>
                </div>
                
                <input type="submit" value="Enviar Mensagem">
            </form>
        </section>
     </main>

</body>
</html>