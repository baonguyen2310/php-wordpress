<?php get_header(); ?>
<div class="content">
    <section id="main-content">
        <?php
            if(have_posts()) {
                while(have_posts()){
                    the_post(); //thiết lập STT bài viết
                    get_template_part('content', get_post_format());
                    //load file content-$format.php trong theme
                }
            } else {
                get_template_part('content', 'none');
                //load file content-none trong theme
            }

        ?>
    </section>
    <section id="sidebar">
            <?php get_sidebar(); ?>
    </section>
</div>
<?php get_footer() ?>