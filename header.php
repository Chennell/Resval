<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css">
    <?php wp_head() ?>
</head>
<body>
  <header>
    <h1>Hello!! </h1>
    <div id="logocontainer">
      <a href="<?php echo $homeurl; ?>">
        <img src="<?php header_image();?>" alt="" class="logo"/>
      </a>
  </div>
  </header>
