<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <h2><?php echo get_bloginfo( 'description' ); ?></h2>
      </div>
    </div>

    <div class="container"> <!--  Begins the container -->
