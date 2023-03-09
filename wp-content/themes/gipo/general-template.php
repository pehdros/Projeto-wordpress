<?php 
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>

<!-- ADICIONANDO IMAGEM DE CABEÇALHO -->
<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="">

<?php get_footer(); ?>