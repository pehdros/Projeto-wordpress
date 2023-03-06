<!DOCTYPE html>
<html lang="<?php get_language_attributes(); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

    <title>Página de login</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="container">

        <div class="row my-5 align-items-center">

            <div class="col-md-8 col-sm-12">
                <h1>Primeiro tema</h1>
                <p class="lead">WordPress</p>
            </div>

            <div class="col-md-4 col-sm-12">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="O que procura?">
                        <div class="input-group-append">
                            <button class="btn btn-my-color-5" type="button">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- NAVBAR -->
        <div class="row">

            <div class="col mb-5">
                <!-- BUTTON RESPONSIVE -->
                <nav class="navbar navbar-expand-lg navbar-light bg-my-color-3 rounded">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="meunavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- LISTA -->
                    <div class="collapse navbar-collapse" id="meunavbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Projetos</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Novidades</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Planos</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

        </div>

        <div class="row">

            <div class="col-md-8 col-sm-12">

                <div class="blog-post">
                    <h3 class="mb-3 pb-2 border-bottom"><a href="#">Lorem ipsum dolor sit arm</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-6 mb-3">
                            <a href="#"><img src="assets/empresa-pg-1.png" alt="" class="img-fluid rounded"></a>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere dui non diam
                                viverra, eu
                                ullamcorper tellus ullamcorper. Nullam ultrices justo eros, quis congue tortor
                                pellentesque ac.
                                Pellentesque commodo quis elit eu euismod. Nullam vehicula, enim sed finibus cursus,
                                nibh ante facilisis
                                eros, vitae tristique diam massa non ante. Proin quis efficitur quam. Maecenas volutpat
                                feugiat blandit.
                                Curabitur in metus dui. Nunc turpis orci, accumsan non accumsan vel, imperdiet faucibus
                                lacus.</p>
                        </div>
                    </div>
                    <p class="text-muted">Publicado em <span class="badge bg-my-color-2">04/03/2023</span></p>
                </div>

                <div class="blog-post">
                    <h3 class="mb-3 pb-2 border-bottom"><a href="#">Lorem ipsum dolor sit arm</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-6 mb-3">
                            <a href="#"><img src="assets/empresa-pg-1.png" alt="" class="img-fluid rounded"></a>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere dui non diam
                                viverra, eu
                                ullamcorper tellus ullamcorper. Nullam ultrices justo eros, quis congue tortor
                                pellentesque ac.
                                Pellentesque commodo quis elit eu euismod. Nullam vehicula, enim sed finibus cursus,
                                nibh ante facilisis
                                eros, vitae tristique diam massa non ante. Proin quis efficitur quam. Maecenas volutpat
                                feugiat blandit.
                                Curabitur in metus dui. Nunc turpis orci, accumsan non accumsan vel, imperdiet faucibus
                                lacus.</p>
                        </div>
                    </div>
                    <p class="text-muted">Publicado em <span class="badge bg-my-color-2">04/03/2023</span></p>
                </div>

                <div class="blog-post">
                    <h3 class="mb-3 pb-2 border-bottom"><a href="#">Lorem ipsum dolor sit arm</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-6 mb-3">
                            <a href="#"><img src="assets/empresa-pg-1.png" alt="" class="img-fluid rounded"></a>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere dui non diam
                                viverra, eu
                                ullamcorper tellus ullamcorper. Nullam ultrices justo eros, quis congue tortor
                                pellentesque ac.
                                Pellentesque commodo quis elit eu euismod. Nullam vehicula, enim sed finibus cursus,
                                nibh ante facilisis
                                eros, vitae tristique diam massa non ante. Proin quis efficitur quam. Maecenas volutpat
                                feugiat blandit.
                                Curabitur in metus dui. Nunc turpis orci, accumsan non accumsan vel, imperdiet faucibus
                                lacus.</p>
                        </div>
                    </div>
                    <p class="text-muted">Publicado em <span class="badge bg-my-color-2">04/03/2023</span></p>
                </div>

                <div class="blog-post">
                    <h3 class="mb-3 pb-2 border-bottom"><a href="#">Lorem ipsum dolor sit arm</a></h3>
                    <div class="row">
                        <div class="col-md-12 col-lg-6 mb-3">
                            <a href="#"><img src="assets/empresa-pg-1.png" alt="" class="img-fluid rounded"></a>
                        </div>
                        <div class="col-md-12 col-lg-6 mb-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere dui non diam
                                viverra, eu
                                ullamcorper tellus ullamcorper. Nullam ultrices justo eros, quis congue tortor
                                pellentesque ac.
                                Pellentesque commodo quis elit eu euismod. Nullam vehicula, enim sed finibus cursus,
                                nibh ante facilisis
                                eros, vitae tristique diam massa non ante. Proin quis efficitur quam. Maecenas volutpat
                                feugiat blandit.
                                Curabitur in metus dui. Nunc turpis orci, accumsan non accumsan vel, imperdiet faucibus
                                lacus.</p>
                        </div>
                    </div>
                    <p class="text-muted">Publicado em <span class="badge bg-my-color-2">04/03/2023</span></p>
                </div>

                <div class="blog-pagination mb-5">
                    <a href="#" class="btn btn-outline-my-color-5">Mais antigos</a>
                    <a href="#" class="btn btn-outline-my-color-5">Mais novos</a>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="card mb-4">
                    <h5 class="card-header">Categorias</h5>
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Projetos</a></li>
                            <li><a href="#">Novidades</a></li>
                            <li><a href="#">Planos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4">
                    <h5 class="card-header">Últimos posts</h5>
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Gestão</a></li>
                            <li><a href="#">Tracking</a></li>
                            <li><a href="#">Controle</a></li>
                            <li><a href="#">Análise</a></li>
                            <li><a href="#">Planos</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4">
                    <h5 class="card-header">Links</h5>
                    <div class="card-body">
                        <ul>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">LinkedIn</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="w-100 bg-secondary border-top border-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col py-5 text-center text-white">
                    <h5>Primeiro tema WP</h5>
                    <p class="mb-0">Feito com dedicação</p>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>


</body>

</html>