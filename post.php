<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
            <?php
                require('./hello.php');
                echo toString(123) . 'test require';

                if(isset($_POST['form_click'])){
                    echo 'Username: ' . $_POST['username'];
                    echo '<br/>';
                    echo 'Password: ' . $_POST['password'];
                }
            ?>
        </form>
    </body>
</html>