@extends('frontend.master')
@section('front_content')
@csrf

<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Association Details </h2>
              </div>
            </div>
          </div>
        </div>
      </section>

<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Details Association</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Association</a>
</div>
<div class="row">
 <!-- Content Column -->
    <div class="col-lg-6 mb-4"> 
    <div class="border-faded p-3 mb-g d-flex">
    <img src="https://annuaire-velo.tn/wp-content/uploads/2021/11/bike_lovers_sousse.png" alt="rover" />
    </div>        
    <br>
    <p> <strong> Bike Lovers Sousse </strong> est un groupe de passionné(e)s de vélos de la ville de Sousse et ses environs.
Vous pouvez retrouver son actualité sur son groupe public Facebook.
Ce groupe de cyclistes est très dynamique et organise régulièrement des sorties vélos en groupe.  </p>
<br>
<i class="fa-solid fa-users"></i>
<span> Responsable : Narjes et Rim  </span>
<br>
<i class="fa-solid fa-mobile"></i>
<span> Téléphone : (+216) 28 004 640  </span>

    </div>
	<div class="col-lg-6 mb-4">
            <div id="map" style="width: 100%; height: 800px;position: relative;   float: right;"></div>
    </div>
    <script>
		var greenIcon = new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
var blueIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
var redIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
var orangeIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
var yellowIcon=  new L.Icon({
  iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-yellow.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
function getColor (status){
    if(status=='Started'){
      return document.getElementById("status").className="badge badge-success badge-pill";
    }
    else if(status=='Waiting'){
      return "badge badge-info badge-pill";
    }
    else if(status=='Finished'){
      return "badge badge-error badge-pill";
    }
      else if(status=='Cancelled'){
      return "badge badge-warning badge-pill";
      }
  }
function getIcon (status){
    if(status=='Started'){
     return greenIcon;
     }    
    else if(status=='Waiting'){
     return blueIcon;
    }
    else if(status=='Finished'){
     return redIcon;
    }
    else if(status=='Cancelled'){
     return orangeIcon;
    }
    else  
    {
     return redIcon;
    }
}
function run(lng,lat) {
        console.log(document.getElementById("userIdFirstWay").value);
        map.flyTo([lng, lat],14);
    }
function print(id) {
        window.location.assign("/rides/"+id);
    }
        /// MAP MODULE
        var center = [34.079, 9.701];
        // Create the map
        var map = L.map('map').setView(center, 7);
        // Set up the OSM layer 
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
    
            $(function(){
              $.ajax({
                 url: "/ajax/tracks",
                type: 'GET',
            
                
               success: function(data) {
    
              },
               error: function(data) {
            }
   
        });
    })
    
    </script>



</div>


</div>
@endsection