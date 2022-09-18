<?php get_header(); ?>
  
    <main class="l-main">
      <section class="p-mainvisual--page">
        <h1 class="c-txt-big-headline--mainvisual--single"><?php the_title(); ?></h1>
      </section>
      <section class="p-menunav--single">
      <?php if ( have_posts()) : ?>
        <?php while ( have_posts()) : the_post();?>
        <?php $slug = $post->post_name; ?>
        <?php endwhile;
            endif;
        ?>                
      <?php the_content(); ?> 
      </section>
    </main>
    
    <?php get_sidebar(); ?>
    
    <?php get_footer(); ?>