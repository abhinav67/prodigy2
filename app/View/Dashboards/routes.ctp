<!DOCTYPE html>
<html>
  <head>
    <title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#origin-input,
#destination-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 200px;
}

#origin-input:focus,
#destination-input:focus {
  border-color: #4d90fe;
}

#mode-selector {
  color: #fff;
  background-color: #4d90fe;
  margin-left: 12px;
  padding: 5px 11px 0px 11px;
}

#mode-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}


    </style>
  </head>
  <body onunload="GUnload()">
    <div class="row">
      <div class="col col-md-3">
    <div class="panel panel-default high">
                                     <div class="panel-heading"><h4>Driver's Schedules</h4></div>
                                     <div class="panel-body" style="max-height: 260px; min-height: 250px;overflow-y: scroll;">
                                     <?php 
                                     foreach ($from as $laksh){
                                      //print_r($laksh);
                                      ?> <h3><a href="?from=<?php echo h($laksh['routes']['from']);?>&to=<?php echo h($laksh['routes']['to']);?>"><?php echo h($employes[$laksh['routes']['primary_employee_id']]); ?> </a> </h3> <?php
                                      echo $frm=h($laksh['routes']['from']);
                                      echo '<br>';
                                      echo '-';
                                      echo '<br>';
                                      echo $too=$laksh['routes']['to'];                                     }
                                     ?>
                                     <hr>
                                      </div>
                                  </div>
                                </div>
    <div class="col col-md-8">
    <input id="origin-input" class="controls" type="text"
         value="<?php if (isset($_GET["from"])){
          echo htmlspecialchars($_GET["from"]);
        }
        ?>">
    <input id="destination-input" class="controls" type="text"
        value="<?php if (isset($_GET["to"])){
          echo htmlspecialchars($_GET["to"]);
        }
        ?>">
        <?php if (isset($_GET["to"])) {?>
    <div id="map" style="height:500px; width: 800px;" align="center"></div>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false" type="text/javascript"></script>
    <script type="text/javascript"> 
      var map = new GMap2(document.getElementById("map"));
      var directions = new GDirections(map);
      directions.load('from: <?php if (isset($_GET["from"])){
          echo htmlspecialchars($_GET["from"]);
        }
        ?>  to: <?php if (isset($_GET["to"])){
          echo htmlspecialchars($_GET["to"]);
        }
        ?>', { getSteps: true });
      GEvent.addListener(directions, "load", function() {
         if (directions.getNumRoutes() > 0) {
            for (var i = 0; i < directions.getRoute(0).getNumSteps(); i++) {
               directions.getRoute(0).getStep(i).getLatLng().lat();
               directions.getRoute(0).getStep(i).getLatLng().lng();
               directions.getRoute(0).getStep(i).getDescriptionHtml();
               directions.getRoute(0).getStep(i).getPolylineIndex();
               directions.getRoute(0).getStep(i).getDistance().meters;
               directions.getRoute(0).getStep(i).getDuration().seconds;
            }
         }
      });
    <?php }
    else {?>
      <style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?api=AIzaSyAxK7HDEoK1pfvaSmwpm8LcIDKR4R4r9c0&sensor=false">
    </script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(39.673370, -100.612793),
          zoom: 5
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map" style="height:500px; width: 800px;" align="center"></div>
  </body>
  <?php 
    } ?>
    </script>
      </div>
    </div>
    <br><br>
  </body>
</html>