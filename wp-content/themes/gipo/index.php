<?php 
/**
 * Principal arquivo do tema
 * Arquivo obrigatório para criação de temas {Outro arquivo obrigatório é o style.css}.
 * Arquivo obrigatório screenshot.png 1200px 900px.
 */
?>

<?php get_header(); ?>

<div>
    <?php 
    if(have_posts()):
        while(have_posts()) : the_post();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <a href="#">
                        <img src="" alt="">
                    </a>
                </div>
                <div>
                    <a href="#"><?php the_title();?></a>
                </div>
                <div>
                    <a href="#">Gestão de equipes de TI: 10 dicas para implementar</a>
                </div>
                <div>
                    <span><?php the_author_posts_link();?></span>
                    <p><?php echo get_the_date();?></p>
                </div>
                <?php the_content();?>
            </div>

        </div>
    </div>

    <?php
        endwhile;
    else:
    ?>

    <p>Não existe post</p>

    <?php 
    endif;
    ?>

</div>

<?php get_footer(); ?>