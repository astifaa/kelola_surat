<div id="content" class="content">
<!-- begin row -->
<div class="row">
    <!-- begin col-3 -->
    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon"><i class="fa fa-desktop"></i></div>
            <div class="stats-info">
                <h4>Surat Masuk</h4>
                <p><?php echo $jumlah_surat['surat_keluar'] ?></p>    
            </div>
            <div class="stats-link">
                <a href="<?php echo base_url('home/surat_keluar') ?>">Lihat <i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-xl-3 col-md-6">
        <div class="widget widget-stats bg-info">
            <div class="stats-icon"><i class="fa fa-link"></i></div>
            <div class="stats-info">
                <h4>Surat Keluar</h4>
                <p><?php echo $jumlah_surat['surat_masuk'] ?></p>   
            </div>
            <div class="stats-link">
                <a href="<?php echo base_url('home/surat_masuk') ?>">Lihat <i class="fa fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
                <!-- <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats bg-orange">
                        <div class="stats-icon"><i class="fa fa-users"></i></div>
                        <div class="stats-info">
                            <h4>UNIQUE VISITORS</h4>
                            <p>1,291,922</p>    
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <!-- <div class="col-xl-3 col-md-6">
                    <div class="widget widget-stats bg-red">
                        <div class="stats-icon"><i class="fa fa-clock"></i></div>
                        <div class="stats-info">
                            <h4>AVG TIME ON SITE</h4>
                            <p>00:12:23</p> 
                        </div>
                        <div class="stats-link">
                            <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- end col-3 -->
            </div>
            <!-- end row -->
