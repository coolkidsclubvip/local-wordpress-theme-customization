<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>WP test blog</title>
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
     <header class="sticky-top">
  <div class="container-fluid d-flex px-0 nav-bar">
    <div class="name w-50">
      <!-- Blog/site name -->
      <a href="<?php echo home_url() ?>">
       <span class="text-light"><?php echo bloginfo(" "); ?></span>
      </a>
    </div>

    <!-- Bootstrap navbar -->
   <nav class="navbar navbar-expand-lg nav-list px-0 ms-auto">
  <!-- Hamburger icon for small screens -->
  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navigation links -->
  <div class="collapse navbar-collapse d-lg-block ms-auto" id="navbarNav">
    <?php
// Render header nav bar using wp_nav_menu
echo wp_nav_menu(array(
    'container' => 'div',
    'container_class' => 'nav-list ',
    'theme_location' => 'primary',
    'items_wrap' => '<ul class="navbar-nav flex-shrink-0">%3$s</ul>',
    'menu_class' => 'navbar-nav',
    'fallback_cb' => false, // Prevents default fallback menu from being displayed
));
?>
    <div class="px-3">
      <?php
// render search bar
get_search_form();
?>
    </div>
  </div>
</nav>

  </div>

</header>
