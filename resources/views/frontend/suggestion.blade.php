<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dreamwaves</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom CSS -->
    <link href="assets/css/about.css" rel="stylesheet">
    <link href="assets/css/suggestion.css" rel="stylesheet">

    <link href="assets/css/common.css" rel="stylesheet">
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    
  </head>

  <body class="suggestion-body">



    <nav class="navbar navbar-inverse navbar-fixed-top home">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="assets/images/main-logo.png">
        </div>
        
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="#">Sign Up</a></li>
            <li role="presentation"><a href="#">Log In</a></li>
            <li role="presentation"><a href="#">Favorites</a></li>
            <li role="presentation"><a href="#">Suggest</a></li>
          </ul>
          </div>
      </div>
      
    </nav>



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="suggestion-jumbotron jumbotron">
      
    </div>


    <!-- Page Body -->

    <div class="container suggestion-main">
    	<div class="row">
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
    	 <h5>Add your own attraction or place of interest</h5>
       <div class="row">
        <div class="col-md-3"></div>
         <div class="col-md-6">
           <p>The form needs to be completed in full. Please try to provide a reasonably detailed description. 
  Precise coordinates are needed so we can plot the attraction on a Google map. 
  Zoom in to make sure your coordinates are accurate.</p>
         </div>
         <div class="col-md-3"></div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-3"></div>
       <div class="col-md-6 form-suggestion">
         
         {!! Form::open(array('url' => url('suggestion'), 'class'=>'form-horizontal')) !!}
         <input id="country" type="hidden" name="country" />
         <input id="state" type="hidden" name="state" />
         <input id="city" type="hidden" name="city" />
         <input id="formatted_address" type="hidden" name="formatted_address" />
         
                             <h4>1. Name and description of the destination</h4>
                          <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Name of the Attraction</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Type of Attraction</label>
    <div class="col-sm-8">
      <select class="form-control" name="type">
                    <option value="null">Please select an option</option>
                    <option  value="essential">Essential attraction</option>
                    <option  value="fun">Fun attraction</option>
                    <option  value="hidden_gem">Hidden gem</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Brief Description</label>
    <div class="col-sm-8">
      <textarea class="form-control" rows="7" name="description"></textarea>
    </div>
  </div>

  <h4>2. The coordinates of the attraction</h4>
  <p style="color:#000;">
           To determine the attraction's coordinates, use the search box or drag the marker to the approximate position and then zoom in. Coordinates are generated automatically.
         </p>

  <div class="row">
    <div class="col-md-4">
      
    <input id="map-latitude" readonly="readonly" class="form-control" type="text" title="form-latitude" name="latitude" value="Latitude: " />
    </div>
    <div class="col-md-4">
  <input id="map-longitude" readonly="readonly" class="form-control" type="text" title="form-latitude" name="longitude" value="longitude: " />

    </div>
    <div class="col-md-4">
      <button type="submit" class="btn btn-primary">Send</button>
    </div>
  </div>
  
         </form>

         <hr/>
         
<div class="form-group">
   <div class="col-sm-12">
      <input id="pac-input" class="controls" type="text" placeholder="Enter a location">
      <div id="map"></div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">&nbsp;</div>
</div>
  
  
       </div>
       <div class="col-md-3"></div>
     </div>
    </div>

    <!-- Page Body -->
    
<!-- footer -->

   <div class="jumbotron footer">
     <div class="container">
        <div class="row">
          <div class="col-md-3">
          <h5>About</h5>
          <a href="">About Us</a>
          <a href="">Our Strory</a>
          <a href="">Our Team</a>
          </div>
          <div class="col-md-3">
          <h5>Dsicover</h5>
          <a href="">Place</a>
          <a href="">Fun</a>
          <a href="">Food</a>
          <a href="">People</a>

          </div>
          <div class="col-md-2">
          <h5>Legal</h5>
          <a href="">Privacy Policy</a>
          <a href="">Terms & Conditions</a>
          <a href="">Terms of Use</a>
          <a href="">Guidlines</a>
          </div>
          <div class="col-md-4">
          <h5>Follow Us On</h5>
            <div class="socials">
              <a href=""><img src="assets/images/facebook.png"></a>
              <a href=""><img src="assets/images/twitter.png"></a>
              <a href=""><img src="assets/images/pintrest.png"></a>
            </div>
            <form>
              <input type="email" name="subscribe" class="form-control" value="Subscribe to our newsletter"><button class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
     </div>
   </div>
   <!-- footer -->


  <script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -33.8688, lng: 151.2195},
    zoom: 3
  });
  var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    
    

    marker = new google.maps.Marker(
{
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: place.geometry.location
});
google.maps.event.addListener(marker, 'dragend', function(event) 
{
    geocodePosition(marker.getPosition(),this.getPosition().lat(),this.getPosition().lng());
    
});



            

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }
    


    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    radioButton.addEventListener('click', function() {
      autocomplete.setTypes(types);
    });
  }

  function geocodePosition(pos,mylat,mylang) 
{
  document.getElementById("map-latitude").value= mylat;
  document.getElementById("map-longitude").value= mylang;
   geocoder = new google.maps.Geocoder();
   geocoder.geocode
    ({
        latLng: pos
                
    }, 
        function(results, status) 
        {
            if (status == google.maps.GeocoderStatus.OK) 
            {
                  
              //console.log(results);
        if (results[1]) {
        var indice=0;
        for (var j=0; j<results.length; j++)
        {
            if (results[j].types[0]=='locality')
                {
                    indice=j;
                    break;
                }
            }
        for (var i=0; i<results[j].address_components.length; i++)
            {
                if (results[j].address_components[i].types[0] == "locality") {
                        //this is the object you are looking for
                        city = results[j].address_components[i];
                    }
                if (results[j].address_components[i].types[0] == "administrative_area_level_1") {
                        //this is the object you are looking for
                        region = results[j].address_components[i];
                    }
                if (results[j].address_components[i].types[0] == "country") {
                        //this is the object you are looking for
                        country = results[j].address_components[i];
                    }
            }

            
            
            
            document.getElementById("country").value= country.long_name;
            document.getElementById("state").value= region.long_name;
            document.getElementById("city").value= city.long_name;
            document.getElementById("formatted_address").value= results[0].formatted_address;
            



            } else {
              alert("No results found");
            }
        
            } 
            else 
            {
                $("#mapErrorMsg").html('Cannot determine address at this location.'+status).show(100);
            }
        }
    );

    
}
  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}

   
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qF4-OkQCuMoTtGtsOrSExJ9P5wm0olk&signed_in=true&libraries=places&callback=initMap" 
    async defer></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
  </body>
</html>
