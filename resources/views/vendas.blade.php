<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.site.head')
    <title>Vendas</title>
</head>
<body>
    @include('layouts.site.navbar')

    <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Vendas
            </h1>

            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Página Inicial</a>
              </li>
              <li class="breadcrumb-item active">Portfolio 3</li>
            </ol>

            <div class="row">
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="{{url(vendas($imovel['discriminator'].'ver', Illuminate\Support\Facades\Crypt::encryptString($imovel['id'])))}}"><img class="card-img-top" src="" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Project One</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Project Two</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>

                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Project Three</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Project Four</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Project Five</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">Project Six</a>
                    </h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>

          </div>

    @include('layouts.site.scripts')
    @include('layouts.footer')
</body>
</html>
