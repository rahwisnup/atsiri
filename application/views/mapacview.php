<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
        <title>Monitoring Atsiri</title>
        <link href="http://map.iksgroup.co.id/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://map.iksgroup.co.id/assets/css/map.css" rel="stylesheet">

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUQp6cSmkRbOUw21Km8d0UIG1iCjGCOmE&sensor=false&language=id&libraries=adsense,places"></script>
        <script type="text/javascript">

            var map; // Global deklarasi map
            var lat_longs_map = new Array();
            var markers_map = new Array();
            var placesAutocomplete;
            var adUnit;
            var infoWindow;

            function initialize_map() {

                var myLatlng = new google.maps.LatLng(-0.941136, 100.361732);
                var myOptions = {
                    zoom: 4,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControlOptions: {position: google.maps.ControlPosition.HORIZONTAL_BAR},
                    navigationControlOptions: {position: google.maps.ControlPosition.TOP_CENTER}}

                map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

                //ini untuk isi dan maeker pertamanya
                infoWindow = new google.maps.InfoWindow();

                
              <?php foreach ($view as $row) { ?>
                    var latview = '<?php echo $row->lat ?>';
                    var longview = '<?php echo $row->long ?>';
                    var messview = '<?php echo "Luas : ".$row->luas." Hektar"."<br>"."Alamat Lahan: ".$row->alamat_lahan."<br>"."Nama Pengelola : ".$row->nama_pengelola."<br>"."Alamat Pengelola: ".$row->alamat_pengelola."<br>"."Nama Pemilik: ".$row->nama_pemilik."<br>"."Nama Tanaman: ".$row->nama_tanaman ?>';
                    createMarker(latview, longview, messview);
                <?php } ?>


                var autocompleteOptions = {
                }
                var autocompleteInput = document.getElementById('carilokasi');

                placesAutocomplete = new google.maps.places.Autocomplete(autocompleteInput, autocompleteOptions);
                placesAutocomplete.bindTo('bounds', map);

                google.maps.event.addListener(placesAutocomplete, 'place_changed', function () {
                    showmap();
                });
            }

            function createMarker(lt, lg, message) {
                var latLng = new google.maps.LatLng(lt, lg);

                var image = "<?php echo base_url(); ?>assets/tree.png";
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

            google.maps.event.addDomListener(window, "load", initialize_map);

            google.maps.event.addDomListener(window, "resize", function () {
                var center = map.getCenter();
                google.maps.event.trigger(map, "resize");
                map.setCenter(center);
            });
            function showmap()
            {
                var place = placesAutocomplete.getPlace();

                placesAutocomplete.bindTo('bounds', map);

                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(50);
                }

            }

            function update_address(lat, lng)
            {
                var geocoder = new google.maps.Geocoder;
                var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};

                geocoder.geocode({'location': latlng}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            document.getElementById('carilokasi').value = results[0].formatted_address;
                        } else {
                            window.alert('Tidak ada hasil pencarian');
                        }
                    } else {
                        window.alert('Geocoder error: ' + status);
                    }
                });
            }

        </script>   

        <script src="http://map.iksgroup.co.id/assets/js/jquery-1.11.3.min.js"></script>    
        <script src="http://map.iksgroup.co.id/assets/js/bootstrap.min.js"></script> 
    </head>  

    <body >
        <?php include("headerMonitoring.php") ?>
        <div class="row">
            <div id="map-canvas"  class="col-lg-12 text-center"  style="width:97%;height:500px;"></div> 
            
            <div class="container-fluid" id="main">


                <div class="col-xs-2" id="left">
                    <div class="widget-cari">
                        <h3>Cari Alamat</h3>            
                        <input type="text" id="carilokasi" class="form-control" value="Indonesia"/>                         
                    </div>
                    <div class="widget-output">

                        <div class="input-group">
                            <span class="input-group-addon" id="lat-ii">Latitude</span>
                            <input type="text" id="lat" class="form-control" readonly="" value="-0.941136"/>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="lng-ii">Longitude</span>
                            <input type="text" id="lng" class="form-control" readonly="" value="100.361732"/>
                        </div>
                        <p>&nbsp;</p>
                        </p>
                    </div>
                </div>
             
            </div>
        </div>


    </body>
</html>