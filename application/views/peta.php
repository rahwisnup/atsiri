<!DOCTYPE html>
<html lang="en">
    <body  onload="initialize(-5.512942, 115.394379)">
        <!-- Page Content -->
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center" id="tempat_peta"  style="width:97%;height:500px;">
                </div>
            </div>

        </div>
        <!--1. Memanggil google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDso1EqueWs-RcuDfAbEm24oqMVR5fOltU" async defer></script>
        <script type="text/javascript">

        var map;
        var infoWindow;

        function initialize(lt, lg) {
            var mapDiv = document.getElementById('tempat_peta');
            map = new google.maps.Map(mapDiv, {
                center: new google.maps.LatLng(lt, lg),
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            infoWindow = new google.maps.InfoWindow();


              <?php foreach ($view as $row) { ?>
                    var latview = '<?php echo $row->lat ?>';
                    var longview = '<?php echo $row->long ?>';
                    var messview = '<?php echo "Luas : ".$row->luas." Hektar"."<br>"."Alamat Lahan: ".$row->alamat_lahan."<br>"."Nama Pengelola : ".$row->nama_pengelola."<br>"."Alamat Pengelola: ".$row->alamat_pengelola."<br>"."Nama Pemilik: ".$row->nama_pemilik."<br>"."Nama Tanaman: ".$row->nama_tanaman ?>';
                    createMarker(latview, longview, messview);
                <?php } ?>

        }


        function createMarker(lt, lg, message) {
            var latLng = new google.maps.LatLng(lt, lg);
            var image = 'assets/tree.png';
            var marker = new google.maps.Marker({
                position: latLng,
                map: map, 
                icon: image
            });

            google.maps.event.addListener(marker, 'click', function () {
                var myHtml = '<strong>' + message + '</strong>';
                infoWindow.setContent(myHtml);
                infoWindow.open(map, marker);
            });
        }
        </script>
        <script src="<?php echo base_url() ?>assetspeta/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>assetspeta/js/bootstrap.min.js"></script>
    </body>

</html>
