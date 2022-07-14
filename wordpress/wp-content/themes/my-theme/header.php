<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
    </head>
    <?php wp_head(); ?> <!--Hook này để wp biết đây là header, dùng để cắm (plugin) vào vị trí này-->
    <body <?php body_class(); ?>> <!--class động cho từng trang-->
        <div id="container">
            <header id="header">
                <?php my_theme_menu('primary-menu'); ?> <!--Gọi hàm tạo menu tại vị trí menu đã đăng ký-->
            </header>
    </body>
</html>