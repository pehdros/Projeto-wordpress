<!--FOOTER-->
<footer class="bg-darkblue text-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="my-4">
                    <h5>Recursos</h5>
                </div>
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'footer_menu',
                        'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => 'div',
                        'container_class' => 'row ',
                        
                        'menu_class'      => 'list-unstyled',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="my-4">
                    <h5>Materiais</h5>
                </div>
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'footer_menu2',
                        'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => 'div',
                        'container_class' => 'row',
                        
                        'menu_class'      => 'list-unstyled',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="my-4">
                    <h5>Ajuda</h5>
                </div>
                <?php 
                    wp_nav_menu( array(
                        'theme_location'  => 'footer_menu3',
                        'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => 'div',
                        'container_class' => 'row',
                        
                        'menu_class'      => 'list-unstyled',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="my-4">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <i class="bi bi-envelope text-secondary" style="font-size: 1.3rem;"></i>
                        <a href="#" class="text-secondary text-decoration-none">contato@gipo.com.br</a></p>
                        </li>
                        <li>
                            <p class="text-muted">
                                <i class="bi bi-telephone-fill text-secondary"></i>
                                <a href="#" class="text-secondary text-decoration-none">(11) 4210-7350</a>
                            </p>
                        </li>
                        <li>
                            <p class="text-muted text-secondary text-decoration-none">Atendemos de seg à sex das 09h00
                                às 17h00</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <hr>
        <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">
            <div class="col d-flex align-items-center mb-4">
                <a href="#"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""></a>
                <div>
                    <p class="text-muted ml-3 mt-3">
                        <i class="bi bi-c-circle"></i>
                        Gipo - Marca registrada
                    </p>
                </div>
            </div>
            <div class="col mb-4">
                <ul class="list-unstyled">
                    <li>
                        <p class="text-muted mt-4 text-right"><a href="#" class="text-secondary text-decoration-none">
                                <i class="bi bi-linkedin" style="font-size: 1.5rem;"></i>
                                LinkedIn</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer();?>

</body>

</html>