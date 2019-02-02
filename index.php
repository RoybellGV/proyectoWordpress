<html>      
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
                    <h1 class='caption'><?php the_title(); ?></h1></li>
                <?php endwhile;
            else :
                echo "<p>no hay contenido</p>";
            endif;
        ?>
    </ul>
</div>
  <!--/.Slider wordpress-->
  
  
  
  
<!--/.Carousel Wrapper-->
    <div></div>
    <div class="text-dark text-center">
        <h1 class="mt-5 tipografia1">Visitenos</h1>
        <h2 class=" tipografia2 mb-3 font-weight-bold">¡Un gusto a su paladar!</h2>
    </div>
    <div>
    </div>
    
        
    
     <div id="imagen2">
   <div id="info">
    <h1 > <p id="headline" >Western Food</p></h1>
    <h2 > <p id="descripcion">Nuestra Especialidad</p></h2>
    <p id="descripcion"><button type="button" class="btn btn-warning text-light">Visitar la Galeria</button></p>
    
    
    
   </div>
 </div>

            
 <div id="imagen">
   <div id="info">
    <h1 > <p id="headline">Nuestro Menu</p></h1>
    <h2 > <p id="descripcion">Variedad que deleita</p></h2>
    <p id="descripcion"><button class="btn btn-warning text-light"  >Ir al Menu</button></p>
    

    
   </div>
 </div>
    
  <div></div>
    <div class="text-dark mb-5 text-center">
        <h1 class="mt-5 tipografia1">Nuestro Contacto</h1>
        <h2><i class="fas fa-phone text-dark"></i>(+506)8610-7395</h2>
        <h2><i class="fas fa-envelope text-dark"></i>food@gmail.com</h2>
               
    </div>
    <div>
    </div>  

    
    
    
     <?php get_footer();?>
  
</html>