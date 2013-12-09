<?php
        session_start();
        if(!isset($_SESSION['nama'])){
                header("location:login.php");
        }
        ini_set('display_errors',1);
        // Meng-include file koneksi dan data handler
        require_once './koneksi.php';
        require_once './data_handler.php';
        // Konstanta nama tabel
        define('MHS', 'mahasiswa');
        // Memanggil fungsi data handler
        data_handler('?m=data');
?>
<!DOCTYPE html>
<html>
        <head>
                <title>Akses dan Manipulasi Data</title>
                <style type="text/css">
                        table th{
                                border:1px solid #4771e9;
                        }

                        table tr:hover{
                                background:#bac9f3;
                        }

                        table tr td{
                                border:1px solid #4ee147;
                        }

                        .button{
                                height:35px;
                                width:150px;
                                padding:5px;
                                border-radius:7px;
                                border:1px solid #757c7b;
                                background:#f5fefd;
                                cursor:pointer;
                        }
                </style>
        </head>
<body>

</body>
</html>