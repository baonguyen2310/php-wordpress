<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php my_theme_thumbnail('thumbnail'); ?>
    </div>
    <header class="entry-header">
        <?php my_theme_entry_header(); ?>
        <?php my_theme_entry_meta(); ?>
    </header>
    <div class="entry-content">
        <?php my_theme_entry_content(); ?>
    </div>
</article>