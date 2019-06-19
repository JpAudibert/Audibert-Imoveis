<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.site.head')
        <title>Quem Somos</title>
    </head>
    <body>
            @include('layouts.site.navbar')
        <div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3">Quem Somos</h1>

                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="{{url("/")}}">Página Inicial</a>
                  </li>
                  <li class="breadcrumb-item active">Quem Somos</li>
                </ol>

                <!-- Intro Content -->
                <div class="row">
                  <div class="col-lg-6 puxa-cima">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/imagesite/audibert.png" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="/images/imagesite/quemsomos.png" alt="Second slide">
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <h2>Audibert Corretora de Imóveis</h2>
                    <p style="text-align:justify;">Há mais de duas décadas de experiência no ramo imobiliário, comercializamos seu terreno, sítio, casa, apartamento, enfim... Vendemos todo o tipo de imóvel. Nossa tradição é o cuidado nas negociações: vendedor e comprador sempre instruídos a fazer o melhor negócio.</p>
                    <h3>Audibert Avaliador de Imóveis </h3>
                    <p style="text-align:justify;">Avaliamos seu imóvel de maneira rápida e dinâmica. Você traz a documentação: escritura, matrícula do imóvel e logo sua avaliação estará pronta. Trabalhamos com um atendimento diferenciado.  Sempre pensando em atender melhor a você e sua família.</p>
                    <p>Para melhor comodidade: ligue e agende um horário.   </p>
                    <ul>
                        <li>Telefone: (54) 3461-2025.</li>
                        <li>Telefone do plantão: (54) 99973-2414.</li>
                        <li>Edson Audibert</li>
                        <li>Creci: 34.941</li>
                        <li>Rua Salgado Filho, 29, Centro, Carlos Barbosa</li>
                    </ul>
                </div>
            </div>
                            <div class="map col-lg-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.4480468746656!2d-51.50482988522398!3d-29.298530203942637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c19ee2ec54b85%3A0x7debd74e0cd6aa48!2sAudibert+Corretor+de+Im%C3%B3veis!5e0!3m2!1spt-BR!2sbr!4v1557102203690!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                <!-- /.row -->

            </div>
              <!-- /.container -->
    @include('layouts.site.scripts')
    @include('layouts.footer')
</body>
</html>
