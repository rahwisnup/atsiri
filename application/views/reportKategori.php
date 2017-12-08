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
            <h3>Report Tanam Berdasarkan Kategori</h3>
                <div class="row">
                    <div class="box-content">


                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Tanggal Tanam</th>
                                    <th>Luas Tanam (Hektar)</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php $tot_luas_sidikalang = 0; ?>
                            <br>Sidikalang</br>
                            <?php for ($i = 0; $i < $perulanganSidikalang; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_sidikalang = $data_kategoriSidikalang[$i]['luas_tanam'] + $tot_luas_sidikalang;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['nama_kategori']; ?></td>                           
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['tanggal_tanam']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSidikalang[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_sidikalang; ?></th>
                                </tr>
                            </tfoot>
                        </table>


                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Tanggal Tanam</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php $tot_luas_nilam = 0; ?>
                            <br>Nilam</br>
                            <?php for ($i = 0; $i < $perulanganNilam; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_nilam = $data_kategoriNilam[$i]['luas'] + $tot_luas_nilam;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['nama_kategori']; ?></td>                           
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['tanggal_tanam']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriNilam[$i]['luas']; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_nilam; ?></th>
                                </tr>
                            </tfoot>
                        </table>


                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Tanggal Tanam</th>
                                    <th>Luas</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $tot_luas_SerehWangi = 0; ?>
                            <br>Sereh Wangi</br>
                            <?php for ($i = 0; $i < $perulanganSerehWangi; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_SerehWangi = $data_kategoriSerehWangi[$i]['luas'] + $tot_luas_SerehWangi;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['nama_kategori']; ?></td>                           
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['tanggal_tanam']; ?></td>
                                    <td class="span3"><?php echo $data_kategoriSerehWangi[$i]['luas']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_SerehWangi; ?></th>
                                </tr>
                            </tfoot>
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