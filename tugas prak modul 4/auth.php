<?php
        defined('_VALID') or die('not alowed');

        function init_login(){
                $nama='admin';
                $pass='admin';

                if(isset($_POST['nama']) && isset($_POST['pass'])){
                        $n=trim($_POST['nama']);
                        $p=trim($_POST['pass']);

                        if(($n==$nama) && ($p==$pass)){
                                setcookie('nlogin',$n);
                                // setcookie('time',time());
                                echo 'login!';
                        ?>
                        <script type="text/javascript">
                                // document.location.href="./";
                        </script>

                        <?php
                }else{
                        echo 'Nama/Password Tidak Sesuai';
                        return false;
                }
        }
}

        function validate(){
                if(!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time'])){?>
                        <div class="inner">
                                <form action="" method="post">
                                        nama <input type="text" name="nama"><br>
                                        password <input type="password" name="pass"><br>
                                        <input type="submit" value="login">
                                </form>
                        </div>

                        <?php exit; 
                }

                if(isset($_GET['m']) && $_GET['m']=='logout'){
                        if(isset($_COOKIE['nlogin'])){
                                setcookie('nlogin','',time()-3*3600);
                        }
                        if(isset($_COOKIE['time'])){
                                setcookie('time','',time()-3*3600);
                        }
                ?>

                <script type="text/javascript">
                document.location.href="./";
                </script>

                <?php
        }
}?>