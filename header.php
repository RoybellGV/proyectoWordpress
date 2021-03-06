<html>

<head>
    <title>
        <?php bloginfo('name');?>
    </title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="<?php bloginfo('charset');?>">

    <?php wp_head();?>

</head>

<body <?php body_class();?> >

    <!--Navbar -->
    <nav class="nav mb-1 icono navbar navbar-expand-lg navbar-dark orange contrast lighten-1 " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item avatar">
                    <a class="nav-link p-0" href="#">
                        <img src="https://i.ibb.co/Y4CT1FT/icono.png" alt="icono" border="0" class="rounded-circle z-depth-0" alt="avatar image" height="45">
                    </a>
                </li>
            </ul>
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
		) );
        ?>
        </div>
    </nav>
    <button onclick="topFunction()" id="myBtn" title="Go to top" class="rounded-circle"><i class="fas fa-arrow-circle-up"></i></button>
    <!--/.Navbar -->