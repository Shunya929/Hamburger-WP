<?php get_header(); ?>

<h2 class="c-txt-headline__error">404 NOT FOUND</h2>
<div class="l-container__error">
  <p>お探しのページが見つかりませんでした。</p>
  <a href="<?php echo esc_url(home_url()); ?>" class= "c-txt-link__error">ホームに戻る</a>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>