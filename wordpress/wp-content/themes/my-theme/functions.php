<?php
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');

require_once(CORE . '/init.php');

if(!isset($content_width)) {
    $content_width = 620;
}

if(!function_exists('my_theme_setup')){
    function my_theme_setup(){
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-formats',
            array('image', 'video', 'gallery', 'quote', 'link'));

        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-background', $default_background);

        //đăng ký menu trong wp editor
        register_nav_menu('primary-menu', 'Primary Menu');
        
        $sidebar = array(
            'name' => 'Main Sidebar',
            'id' => 'main-sidebar',
            'description' => 'This is my sidebar',
            'class' => 'main-sidebar',
            'before-title' => '<h3 class="widgettitle">',
            'after-title' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    //móc my_theme_setup vào action hook init để nó được thực thi
    //sau khi wordpress load xong trang
    add_action('init', 'my_theme_setup');
}

if(!function_exists('my_theme_menu')){
    function my_theme_menu($slug) {
        $menu = array(
            'theme_location' => $slug,
            'container' => 'nav',
            'container_class' => $slug
        );
        wp_nav_menu($menu); //tạo menu
    }
}
?>

<?php
    if(!function_exists('my_theme_thumbnail')){
        function my_theme_thumbnail($size) { 
?>
            <figure class="post_thumbnail">
                <?php the_post_thumbnail($size); ?>
            </figure>
<?php
        }        
    }
?>

<?php
    if(!function_exists('my_theme_entry_header')){
        function my_theme_entry_header(){ ?>
            <h1 class="entry-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
        <?php
        }
    }
?>

<?php if(!function_exists('my_theme_entry_meta')) {
    function my_theme_entry_meta() { ?>
        <div class="entry-meta">
            <span class="author">Posted by <?php get_the_author(); ?></span>
            <span class="date-published"> at <?php get_the_date(); ?></span>
            <span class="category"> in <?php get_the_category_list(); ?></span>
        </div>
        <?php
    }
} ?>

<?php if(!function_exists('my_theme_entry_content')) {
    function my_theme_entry_content() {
        the_content();
    }
} ?>

<?php
    function my_theme_styles() {
        //khai báo file style.css trong thư mục theme bằng tên main-style
        //get_template_directory_uri trả về thư mục theme
        //all là giá trị của media
        wp_register_style('main-style', get_template_directory_uri() . '/style.css', 'all');
        //đưa file css đã đăng ký vào danh sách hàng đợi
        wp_enqueue_style('main-style');
    }

    //hook wp_enqueue_scripts sẽ đưa tất các scripts trong danh sách hàng đợi ra ngoài frontend
    add_action('wp_enqueue_scripts', 'my_theme_styles');
?>