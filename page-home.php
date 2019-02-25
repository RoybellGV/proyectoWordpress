<?php get_header();?>

<!--Slider wordpress-->
<div>
    <ul class="slider text-center">
        <?php 
            $args = array( 'post_type' => 'main-slider' );
            $the_query = new WP_Query( $args ); 

            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
        <li><img class='img-full-width' src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>" />

            <h1 class='caption text-light animated fadeIn slow tipografia1'>
                <?php the_title(); ?>
            </h1>
        </li>
        <?php endwhile;
            else :
                echo "<p>no hay contenido</p>";
            endif;
        ?>
    </ul>
</div>
<!--/.Slider wordpress-->


<!--/.Seccion de texto e imagenes del centro de la pagina web-->

<div class="text-dark text-center animated fadeIn slow delay-1s">
    <h1 class="mt-5 tipografia1">Visit Us</h1>
    <h2 class=" tipografia2 mb-3 font-weight-bold">A taste to your palate!</h2>
</div>
<div id="imagen2" class="animated bounceInLeft delay-1s">
    <div id="info">
        <h1>
            <p id="headline">Western Food</p>
        </h1>
        <h2>
            <p id="descripcion">Our specialty</p>
        </h2>
        <p id="descripcion"><a type="button" class="btn btn-warning text-light myButton" href="galeria/">Visit the Gallery</a></p>
    </div>
</div>
<div id="imagen" class="animated bounceInRight delay-1s">
    <div id="info">
        <h1>
            <p id="headline">Our menu</p>
        </h1>
        <h2>
            <p id="descripcion">Variety that delights</p>
        </h2>
        <p id="descripcion"><a class="btn btn-warning text-light myButton" href="menu/">Go to Menu</a></p>
    </div>
</div>
<div class="text-dark mb-5 text-center tipografia1 animated fadeIn slow delay-1s">
    <h1 class="mt-5">Our contact</h1>
    <h2><i class="fas fa-phone text-dark mx-2 "></i>(+506)8610-7395</h2>
    <h2><i class="fas fa-envelope text-dark mx-3"></i>food@gmail.com</h2>
</div>

<!--/.Seccion de texto e imagenes del centro de la pagina web-->
<?php get_footer();?>