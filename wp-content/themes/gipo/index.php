<?php 
/**
 * Principal arquivo do tema
 * Arquivo obrigatório para criação de temas {Outro arquivo obrigatório é o style.css}.
 * Arquivo obrigatório screenshot.png 1200px 900px.
 */
?>
<?php get_header();?>
<section id="header-bar" class="d-none d-lg-flex d-xl-flex align-items-center bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end align-items-center mx-auto">
                <a href="#" class="mr-1 text-decoration-none align-self-center">Entrar |</a>
                <a href="#" class="ml-2" style="font-size: 1.5rem;"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="ml-2" style="font-size: 1.5rem;"><i class="bi bi-instagram"></i></a>
                <a href="#" class="ml-2" style="font-size: 1.5rem;"><i class="bi bi-facebook"></i></a>
                <a href="#" class="ml-2" style="font-size: 1.5rem;"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom ">
    <div class="container">
        <a href="#" class="navbar-brand"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php 
            wp_nav_menu( array(
                'theme_location'  => 'menu_blog',
                'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarMenu',
                'menu_class' => 'navbar-nav ml-auto btn btn-sm btn-success', // CSS UL
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
    </div>
</nav>

<section id="blog-hero" class="pt-2">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8 text-center">
                <h1 class="text-muted px-5 mx-5">Produtividade, Gestão do Tempo e Qualidade de vida</h1>
                <button type="button" class="btn btn-danger">
                <i class="bi bi-envelope-paper"></i>    
                Receba materiais por e-mail
                </button>
            </div>
        </div>
    </div>
</section>

<div class="navbar category-nav navbar-expand-lg navbar-light bg-light mt-1 mb-1">
    <div class="container">
        <p class="d-none d-lg-block">Categorias</p>
    </div>
</div>

<div class="blog-section mb-5">
    <div class="container">
            <div class="row">
                <div class="">
                <?php 
                // se houver post
                    if(have_posts()):
                        // enquanto houver post, mostre-os
                        while(have_posts()): the_post();
                ?>
                <article class="">
                    <i class="bi bi-tag-fill"></i><a href="#"><?php the_category();?></a>
                    <a href="#" class="text-decoration-none font-weight-bold "><?php the_title();?></a>
                    <p class=""><i class="bi bi-arrow-down-left-circle-fill"></i> <?php the_author();?> <?php echo get_the_date();?></p>
                    <div class=""><?php the_content();?></div>
                </article>
                <?php 
                    endwhile;
                else:
                ?>

                <p>Não há posts</p>

                <?php endif; ?>
            </div>
            </div>
    </div>
</div>
<?php get_footer();?>