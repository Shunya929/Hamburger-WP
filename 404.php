<?php get_header(); ?>

<h2 class="c-txt-headline__error">404 NOT FOUND<span>ERROR</span></h2>
<div class="main">
  <div class="l-container__error">
    <p>お探しのページが見つかりませんでした。</p>
    <p>申し訳ございませんが、<a href="<?php echo esc_url(home_url('/')); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
  </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>