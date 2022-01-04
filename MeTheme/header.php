<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS -->
      <link href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.min.css" rel="stylesheet" >
    <title><?php bloginfo('name')?></title>
    <?php wp_head() ?>
</head>
<body> <?php body_class()?>>
<header class="site-header">
<h1> <a href="<?php echo home_url()?>"><?php bloginfo('name')?></a></h1>
<h4><?php bloginfo('description')?></h4>
</header>
</body>


<nav>

<?php

wp_nav_menu0( array( 'theme_location' => 'top-menu' ) );
?>

</nav>

</html>