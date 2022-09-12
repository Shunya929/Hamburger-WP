<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/hamburger-site-design/css/style.css">
  <title>Archive Page</title>
  <?php wp_head(); ?>
</head>
<body class="js-body">
  <article class="l-container">
    <header class="l-header">
      <div class="c-button__sidebar">
        <button class="p-hamburger js-hamburger">
          <span class="c-txt--changeable js-txt--changeable">Menu</span>
        </button>
      </div>
      <div class="l-flex-container__header">
        <h1 class="c-txt-headline__header">Hamburger</h1>
        <form class="form__header">
          <i class="fa-solid fa-magnifying-glass"></i>
          <label for="" class="label1">
            <input type="text" name="name" class="c-input__header">
          </label>
          <label for="" class="label2">
            <button type="button" name="name" value="value" class="c-btn__header">検索</button>
          </label>
        </form>
      </div>
    </header>