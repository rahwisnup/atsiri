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
                <h3>Report Tanam Berdasarkan Lokasi</h3>
                <div class="row">
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_sulteng = 0; ?>
                            <br>Sulawesi Tenggara</br>
                            <?php for ($i = 0; $i < $perulangan_sulteng; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_sulteng = $data_lokasi_sulteng[$i]['luas_tanam'] + $tot_luas_sulteng;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_sulteng[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_sulteng[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_sulteng[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_sulteng; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas Tanam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_bali = 0; ?>
                            <br>Bali</br>
                            <?php for ($i = 0; $i < $perulangan_bali; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_bali = $data_lokasi_bali[$i]['luas_tanam'] + $tot_luas_bali;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_bali[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_bali[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_bali[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_bali; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas Tanam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_jatim = 0; ?>
                            <br>Jawa Timur</br>
                            <?php for ($i = 0; $i < $perulangan_jatim; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_jatim = $data_lokasi_jatim[$i]['luas_tanam'] + $tot_luas_jatim;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_jatim[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jatim[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jatim[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_jatim; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas Tanam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_jateng = 0; ?>
                            <br>Jawa Tengah</br>
                            <?php for ($i = 0; $i < $perulangan_jateng; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_jateng = $data_lokasi_jateng[$i]['luas_tanam'] + $tot_luas_jateng;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_jateng[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jateng[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jateng[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_jateng; ?></th>
                                </tr>
                            </tfoot>
                        </table>

                        <table class="table table-striped table-bordered bootstrap-datatable datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kabupaten</th>
                                    <th>Jenis Tanaman</th>
                                    <th>Luas Tanam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $tot_luas_jabar = 0; ?>
                            <br>Jawa Barat</br>
                            <?php for ($i = 0; $i < $perulangan_jabar; $i++) { ?>
                                <tr >
                                    <?php
                                    $tot_luas_jabar = $data_lokasi_jabar[$i]['luas_tanam'] + $tot_luas_jabar;
                                    ?>
                                    <td class="span1"><?php echo $i + 1; ?></td>                           
                                    <td class="span3"><?php echo $data_lokasi_jabar[$i]['nama_kabupaten']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jabar[$i]['nama_tanaman']; ?></td>
                                    <td class="span3"><?php echo $data_lokasi_jabar[$i]['luas_tanam']; ?></td>
                                </tr>
                            <?php } ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                    <th><?php echo "" . $tot_luas_jabar; ?></th>
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