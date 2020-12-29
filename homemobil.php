<?php
@session_start(); 
include 'config/config.php';
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>RentalMobil</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

</head>
<script type="text/javascript" language="JavaScript">
     function konfirmasi(){
         tanya = confirm("Anda Harus Login untuk Melanjutkan Proses ! Silahkan Login Terlebih Dahulu");
             if (tanya == true) return true;
             else return false;
     }
</script>
<body class="theme-blue">
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php?page=home&data=home"><b>RentalMobil.com</b></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <!-- CONTENT HERE --><hr><hr><hr>
    <?php if($_GET['data']=="mobilhome") {?>
        <div class="container-fluid">
            <div class="block-header"><h2>Selamat Datang | RentalMobil.com</h2></div>
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Pilihan Mobil untuk Anda
                                <small>Silahkan Pilih Mobil yang Tersedia.</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <?php
                                    $hasil = mysql_query("SELECT * FROM `t_mobil` ORDER BY merk_mobil ASC");
                                    while ($data = mysql_fetch_array($hasil)) {
                                    
                                        echo '<div class="col-sm-6 col-md-4">';
                                            echo '<div class="thumbnail">';
                                                echo '<img src="images/mobil/'.$data['gambar'].'" width=70%>';
                                                echo '<div class="caption">';
                                                    echo '<h3>'.$data['merk_mobil'].' '.$data['nama_mobil'].'</h3>';
                                                    echo '<h5>Harga Sewa : Rp. ' . number_format($data['harga_sewa']) . ' ,- / Hari</h5>';
                                                    echo '<p align=center>';
                                                    if($data['status_mobil']=='0'){
                                                        echo "<span class='badge bg-green'>Mobil Tersedia</span><br><br>";
                                                        echo '<a onclick="return konfirmasi()" href="login.php" class="btn btn-info btn-xs waves-effect">Pesan Sekarang</a>';
                                                    }
                                                    else{
                                                         echo "<span class='badge bg-red'>Tidak Tersedia</span><br><br>";
                                                        echo '<a href="" class="btn btn-info waves-effect" disabled="disabled">Pesan Sekarang</a>';
                                                    }
                                                    echo '</p>';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?> 
        <div class="four-zero-four-container">
            <div class="error-code">404</div>
            <div class="error-message">This page doesn't exist</div>
            <div class="button-place">
                <a href="javascript:history.back()" class="btn btn-default btn-lg waves-effect">Kembali</a>
            </div>
        </div>
    <?php } ?>
    <!-- CONTENT HERE -->

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/script.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/ui/modals.js"></script>

    <script src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
    
    <!-- Demo Js -->
    <!-- <script src="js/demo.js"></script> -->
    <!-- <script src="jquery.js"></script> -->

</body>

</html>