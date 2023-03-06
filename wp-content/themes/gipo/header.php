<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gipo - Gestão de Tarefas</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php include_once"index.php";?>
    <!--HEADER-->
    <header>
        <section class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom ">
                <div class="container">
                    <a href="home.php" class="navbar-brand"><img class="" src="img/logotipo.png" alt="Logotipo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
                        wp_nav_menu( array(
                            'theme_location'  => 'my_main_menu',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarMenu',
                            'menu_class'      => 'navbar-nav ml-auto font-weight-bold',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
            </nav>
        </section>

    </header>