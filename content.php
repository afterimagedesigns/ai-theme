<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <?php get_template_part( 'postmeta' );?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      /* translators: %s: Name of current post */
      the_content( sprintf(
        __( 'Continue reading %s', 'ai-theme' ),
        the_title( '<span class="screen-reader-text">', '</span>', false )
      ) );

      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ai-theme' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'ai-theme' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
    <?php edit_post_link( __( 'Edit', 'ai-theme' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-## -->