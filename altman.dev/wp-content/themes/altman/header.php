<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suzanna Altman</title>

    <script src="https://use.fontawesome.com/8cbb8bce79.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Oxygen:300,400,700" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">


    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xs-10">
            <h1><?php echo get_bloginfo( 'name' ); ?></h1>
            <h2><?php echo get_bloginfo( 'description' ); ?></h2>
          </div>
          <div class="col-xs-2 visible-xs mobile-nav">
            <div class="fa fa-bars">mobile nav</div>
          </div>
        </div>
      </div>
    </div>
    <div class="container"> <!--  Begins the main body container -->
