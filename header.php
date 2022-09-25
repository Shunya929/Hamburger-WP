<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css">
  <title>Archive Page</title>
  <?php wp_head(); ?>
</head>
<body class="js-body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <article class="l-container">
    <header class="l-header">
      <div class="c-button__sidebar">
        <button class="p-hamburger js-hamburger">
          <span class="c-txt--changeable js-txt--changeable">Menu</span>
        </button>
      </div>
      <div class="l-flex-container__header">
        <h1 class="c-txt-headline__header"><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a></h1>

        <?php get_search_form(); ?>
        
      </div>
    </header>