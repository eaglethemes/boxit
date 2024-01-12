
<?php include 'header.php';?>


<section class="bg-light p-5">
  <div class="container ">
    <div class="row">
      <div class="col-12 col-md-6">
        <section>
          <div id="dvMap" style="width: 100%; height: 480px">
          </div>
        </section>
      </div>
      <div class="col-12 col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <section class="text-end">
              <h3 class="text-success">Delivered</h3>
              <small class="text-muted">Expected Delivery Date: 29 March 2023</small>
            </section>
            <hr>
            <section class="bg-light p-5">
              <h5>Track History</h5>
              <table class="table ">
                <tbody>
                  <tr>
                    <td>8 March 2022 12:30PM, London</td>
                    <td>Delivered</td>
                  </tr>
                  <tr>
                    <td>7 March 2022 12:30PM, London</td>
                    <td>In Transit</td>
                  </tr>
                  <tr>
                    <td>5 March 2022 12:30PM, London</td>
                    <td>Picked up</td>
                  </tr>
                  <tr>
                    <td>3 March 2022 12:30PM, London</td>
                    <td>Pickup in process</td>
                  </tr>
                  <tr>
                    <td>2 March 2022 12:30PM, London</td>
                    <td>Booked</td>
                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<?php include 'footer.php';?>



<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBG89h5Bj1rAp-f6ikYO1BJmiGO-JCGhlE"></script>
<script type="text/javascript">
    var markers = [
            {
                "title": 'Mumbai',
                "lat": '18.964700',
                "lng": '72.825800',
                "description": 'Mumbai formerly Bombay, is the capital city of the Indian state of Maharashtra.'
            }
        ,
            {
                "title": 'Pune',
                "lat": '18.523600',
                "lng": '73.847800',
                "description": 'Pune is the seventh largest metropolis in India, the second largest in the state of Maharashtra after Mumbai.'
            }
    ];

    
    window.onload = function () {
        var mapOptions = {
            center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };
        
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var lat_lng = new Array();
        var latlngbounds = new google.maps.LatLngBounds();
        for (i = 0; i < markers.length; i++) {
            var data = markers[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            lat_lng.push(myLatlng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title
            });
            latlngbounds.extend(marker.position);
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    infoWindow.setContent(data.description);
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
        map.setCenter(latlngbounds.getCenter());
        map.fitBounds(latlngbounds);
 
        //***********ROUTING****************//
        
 
        //Initialize the Path Array
        var path = new google.maps.MVCArray();
 
        //Initialize the Direction Service
        var service = new google.maps.DirectionsService();
 
        //Set the Path Stroke Color
        var poly = new google.maps.Polyline({ map: map, strokeColor: '#4986E7' });
 
        //Loop and Draw Path Route between the Points on MAP
        for (var i = 0; i < lat_lng.length; i++) {
            if ((i + 1) < lat_lng.length) {
                var src = lat_lng[i];
                var des = lat_lng[i + 1];
                path.push(src);
                poly.setPath(path);
                service.route({
                    origin: src,
                    destination: des,
                    travelMode: google.maps.DirectionsTravelMode.DRIVING
                }, function (result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                            path.push(result.routes[0].overview_path[i]);
                        }
                    }
                });
            }
        }
    }

   


</script>

<script>
  
</script>