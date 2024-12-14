<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/cardCarousel.css">
    <style>@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body>


<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
    <div class="swiper-slide">Slide 3</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>


<!--  -->

    <div class="card">
        <!-- carousel -->
        <div class="logo-e-btn">
            <img src="" alt="Logo">
            <a href="#">Ver parcelas</a>
        </div>
        <div class="titulo">
            <h4>Nome do Carro</h4>
            <p>Descrição do carro</p>
        </div>
        <div class="caracteristicas">
            <p>Quilometragem/Cambio</p>
            <span><p>2023/2024</p></span>
        </div>
        <h3>R$ 50.000,00</h3>

        <div class="disponivel">
        <i class="bi bi-geo-alt-fill"></i>
        <p>Disponível em n lojas</p>
        </div>

    </div>
</body>
</html>