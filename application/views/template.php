<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Aplikasi Surat</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/css/default/app.min.css" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="<?php echo base_url() ?>/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
    <?php
    $jumlah_surat = $this->HomeModel->get_jumlah_surat();
    $data = $this->HomeModel->get_jumlah_disposisi();
    ?>
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default bg-primary">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                <img src="<?php echo base_url() ?>/assets/img/logosekolah.png" alt="" /> 
                    <h2 style="color: white; font-family: calibri;">&nbsp;Aplikasi Surat</h2></a>
                </div>
                <!-- end navbar-header --><!-- begin header-nav -->
                <ul class="navbar-nav navbar-right">
                    <li class="navbar-form">
                        <form action="" method="POST" name="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter keyword" />
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <?php
                    if ($this->session->userdata('nama_jabatan') == 'Sekretaris') {

                        echo '
                        
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        
                        <i class="fa fa-bell"></i>
                        ';

                        if($jumlah_surat['surat_masuk'] == 0){

                        } else { 
                        echo '
                        <span class="label bg-danger">';
                        echo $jumlah_surat['surat_masuk'];  
                        echo '</span>';
                        }
                        
                        echo '
                        </a>
                        <div class="dropdown-menu media-list dropdown-menu-right">
                        <div class="dropdown-header">Pemberitahuan ';
                        echo $jumlah_surat['surat_masuk'];
                        echo '</div>
                        <a href="'. base_url('home/surat_masuk') .'" class="dropdown-item media">
                        <div class="media-left">
                        <i class="fa fa-envelope media-object bg-silver-darker"></i>
                        <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                        </div>
                        <div class="media-body">
                        <h6 class="media-heading">'; 
                        echo $jumlah_surat['surat_masuk'];  
                        echo ' Surat Masuk</h6>
                        <div class="text-muted f-s-10">2 hour ago</div>
                        </div>
                        </a>
                        </div>
                        </li>
                        ';
                    } else {
                        echo '
                        
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        
                        <i class="fa fa-bell"></i>
                        ';

                        if($data['disposisi_keluar'] == 0){

                        } else { 
                        echo '
                        <span class="label bg-danger">';
                        echo $data['disposisi_keluar'];  
                        echo '</span>';
                        }
                        
                        echo '
                        </a>
                        <div class="dropdown-menu media-list dropdown-menu-right">
                        <div class="dropdown-header">Pemberitahuan ';
                        echo $data['disposisi_keluar'];
                        echo '</div>
                        <a href="'. base_url('home/surat_masuk') .'" class="dropdown-item media">
                        <div class="media-left">
                        <i class="fa fa-envelope media-object bg-silver-darker"></i>
                        <i class="fab fa-google text-warning media-object-icon f-s-14"></i>
                        </div>
                        <div class="media-body">
                        <h6 class="media-heading">'; 
                        echo $data['disposisi_keluar'];  
                        echo ' Disposisi Keluar</h6>
                        <div class="text-muted f-s-10">2 hour ago</div>
                        </div>
                        </a>
                        </div>
                        </li>
                        ';
                    }
                    ?>

                    <li class="dropdown navbar-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                            <span class="d-none d-md-inline"><?php echo $this->session->userdata('nama_pegawai'); ?></span> <b class="caret"></b>
                        </a>
                       <!--<div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                            <a href="" class="dropdown-item">Keluar</a>
                        </div>-->
                    </li>
                </ul>
                <!-- end header-nav -->
            </div>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar user -->
                    <ul class="nav">
                        <li class="nav-profile">
                            <a href="javascript:;" data-toggle="nav-profile">
                                <div class="cover with-shadow"></div>
                                <div class="info">
                                    Hallo! <?php echo $this->session->userdata('nama_jabatan') ?>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- end sidebar user -->
                    <!-- begin sidebar nav -->
                    <ul class="nav" id="side-menu">
                        <?php
                        if ($this->session->userdata('nama_jabatan') == 'Sekretaris') {
                            echo '
                            <li>
                            <a href="' . base_url('home') . '"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                            <a href="' . base_url('home/surat_masuk') . '"><i class="fa fa-envelope fa-fw"></i> Surat Masuk</a>
                            </li>
                            <li>
                            <a href="' . base_url('home/surat_keluar') . '"><i class="fa fa-envelope fa-fw"></i> Surat Keluar</a>
                            </li>
                            ';
                        } else {
                            echo '
                            <li>
                            <a href="' . base_url('home') . '"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                            <a href="' . base_url('home/disposisi_masuk') . '"><i class="fa fa-envelope fa-fw"></i> Disposisi Masuk</a>
                            </li>
                            <li>
                            <a href="' . base_url('home/disposisi_keluar') . '"><i class="fa fa-paper-plane fa-fw"></i> Disposisi Keluar</a>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <?php $this->load->view($main_view); ?>
            <!-- begin row -->
            <div class="row">
                <!-- begin col-8 -->
                <div class="col-xl-8">

                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url() ?>/assets/js/app.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/theme/default.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo base_url() ?>/assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/demo/dashboard.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
</body>
</html>