<?php get_header(); ?>
  
    <main class="l-main">
      <section class="p-mainvisual--archive">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/archive1.png' ); ?>" alt="" class="c-pic-mainvisual--archive">
        <div class="c-txt-container__mainvisual">
          <h2 class="c-txt-headline--mainvisual">Menu:</h2>
          <p class="c-txt-search-result--search"><?php echo single_cat_title(); ?></p>
        </div>
      </section>
      <section class="p-menunav__archive">
        <div class="c-textbox__menunav__archive">
          <h2 class="c-txt-headline__menunav__archive">小見出しが入ります</h2>
          <p class="c-txt-explanation__menunav__archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <?php if ( have_posts() ) : ?>
          <ul class="l-container__menunav__archive">
            <?php while( have_posts() ) : the_post(); ?>
              <li class="c-item-menu__archive">
                <div class="c-pic__menunav__archive"><?php the_post_thumbnail('full');?></div>
                <div class="c-itemcard__menunav__archive">
                  <h2 class="c-txt-itemname__menunav__archive"><?php the_title(); ?></h2>
                  <h3 class="c-txt-small-headline__menunav__archive">小見出しが入ります</h3>
                  <p class="c-txt-item-explanation__menunav__archive">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <label for="">
                    <button class="c-btn__main--archive"><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                  </label>
                </div>
              </li>
            <?php endwhile;?>
          </ul>
          <?php else : ?>
          <p>まだ投稿がありません。</p>
        <?php endif; ?>
          
        <?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
      </section>
    </main>
    
    <?php get_sidebar(); ?>
    
    <?php get_footer(); ?>