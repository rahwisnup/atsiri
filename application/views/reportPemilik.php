<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Monitoring Atsiri</title>
        <link type="text/css" href="<?php echo base_url(); ?>assetsedmin/vendor/edmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url(); ?>assetsedmin/vendor/edmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!-- <link type="text/css" href="<?php echo base_url(); ?>assetsedmin/vendor/edmin/css/theme.css" rel="stylesheet"> -->
        <link type="text/css" href="<?php echo base_url(); ?>assetsedmin/vendor/edmin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>
    <body>
        <?php include("headerReport.php") ?>


        <div class="wrapper">
            <div class="container">
                <h3>Report Tanam Berdasarkan Pemilik</h3>
                <div class="row">
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pemilik</th>
                                    <th>Nama Pengelola</th>
                                    <th>Status</th>
                                    <th>Alamat Lahan</th>
                                    <th>Karakteristik</th>
                                </tr>
                            </thead>
                            <tbody>
                            <br>Data Untuk Semua Pemilik</br>
                            <?php for ($i = 0; $i < $perulangan; $i++) { ?>
                                <tr >
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_pemilik[$i]['nama_pemilik']; ?></td>                           
                                    <td class="span3"><?php echo $data_pemilik[$i]['nama_pengelola']; ?></td>
                                    <td class="span3"><?php echo $data_pemilik[$i]['status']; ?></td>
                                    <td class="span3"><?php echo $data_pemilik[$i]['alamat_lahan']; ?></td>
                                    <td class="span3"><?php echo $data_pemilik[$i]['jenis_tanah']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                        
<!-- <th>Jawa TImur</th> -->
                            </tbody>
                        </table>      

                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->



        <div class="footer">
            <div class="container">


                <b class="copyright">&copy; 2016 Wisnu Paramartha </b> All rights reserved.
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assetsedmin/vendor/edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assetsedmin/vendor/edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assetsedmin/vendor/edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>