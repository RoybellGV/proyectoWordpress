<html>
  <head>
	<title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width=device-width, initial-scale-1, maximum-scale-1, user,scalable=no">
    <meta charset="<?php bloginfo('charset');?>">
	<?php wp_head();?>
    
    
    
</head>
    <body <?php body_class();?> >
        
        
<!--Navbar -->
<nav class="mb-1 icono navbar navbar-expand-lg navbar-dark orange contrast lighten-1">
     <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
            <img src="https://i.ibb.co/Y4CT1FT/icono.png" alt="icono" border="0" class="rounded-circle z-depth-0" alt="avatar image" height="45">
         
        </a>
      </li>
    </ul>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="page-contact.php">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>
   
  </div>

</nav>
<!--/.Navbar -->