<!DOCTYPE HTML>
<head>
        <title>Halaman Admin</title>
</head>
<body>
        <?php
                echo 'Isi cookie : '.$_COOKIE['nlogin'];
                ini_set('display_errors', 1);
                define('_VALID',1);

                require_once('./auth.php');
                init_login();
                validate();
        ?>
        <h3>Simulasi Halaman Admin</h3>
        <p><a href="?m=logout">Logout</a> </p>
        Menu-menu admin ada disini
</body>
</html>