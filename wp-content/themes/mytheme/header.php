<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>hOME</title>
     <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
     <header >
    <div class="container-fluid d-flex px-0">
          <div class="name bg-primary w-50">
              <!-- Blog/site name -->
            <a href="<?php echo home_url() ?>"><?php echo bloginfo(" ");
?></a>   

          </div>
          <div class="navbar bg-light w-50 d-flex justify-content-end">
          <?php echo wp_nav_menu(array(
    'container' => 'div', //容器标签
    'container_class' => 'navbar-box', //ul文共点class值
 
    'theme_location' => 'primary', //导航别名
    'items_wrap' => '<ul class="nav-list">%3$s</ul>', //包装列表
));
?>

          </div>
    </div>









     </header>