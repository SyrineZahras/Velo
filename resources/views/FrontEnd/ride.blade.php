@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Rides </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default text-center position-relative">
        <div class="container container-relative">
          <h3>Track Your Rides</h3>
      <div class="row">
 <!-- Content Column -->
    <div class="col-lg-6 mb-4">
    @if(count($data) > 0) 
    <div class="border-faded p-3 mb-g d-flex">
            <input type="text" name="filter-contacts" class="form-input" placeholder="Search Tracking" list="shippements" onchange="run('{{$data[0]->lat}}','{{$data[0]->lng}}')">
            <datalist id="shippements">
            @foreach($data as $row)
                <option value="{{$row->id}}"  id="userIdFirstWay" >{{$row->lng}} - {{$row->lat}} </option>
            @endforeach
             </datalist>
    </div>
    @endif
        <!-- Project Card Example -->
    @if(count($data) > 0) 
       @foreach($data as $row)
       <div class="col-12">
              <div
                class="event-item-classic wow slideInleft"
                style="visibility: hidden; animation-name: none">
                <div class="event-item-classic-caption">
                  <p class="events-time">{{ $row->date->format('d/m/Y') }} {{ $row->time->format('H:i') }}</p>
                  <h4 class="event-item-classic-title">
                    <a href="events.html">Ride n° {{ $row->id }}
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class="badge badge-info badge-pill"> {{ $row->status}}</span>             
                    </a>
                  </h4>
                  <h5>
                    Address:
                    <a href="#">{{ $row->location }}</a>
                    <span></span>
                  </h5>
                  <br/>
                  <h5 class="event-item-location">
                  Ride Duration: <span class="location"> {{ $row->time->format('H:i') }}</span>
                    </h5>
                </div>
              </div>
            </div>
            <br/>
    <!--   <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ride n° {{ $row->id}}</h6>
            </div>
            <div class="card-body">   
                Status : <span class="badge badge-info badge-pill"> {{ $row->status}}</span>
                <br/>
                {{$row -> association_id}}
            </div>
        </div>-->
        @endforeach
    @else
        <div class="card shadow mb-4">
            <div class="card-body">   
            <span class="text-center">No Data Found</span>
            </div>
        </div>
    @endif
    <br/><br/><br/>
    <div class="float-right">
            {!! $data->links() !!}
            </div>

    </div>
	<div class="col-lg-6 mb-4">
            <div id="map" style="width: 100%; height: 1000px;position: relative;   float: right;"></div>
    </div>
    </div>
    </div>
</section>
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
        window.location.assign("/user-plan");
      //  window.location.assign("/rides/"+id);

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
     
                $.each(data['data'], function( key, track ) {
                    console.log( getIcon(track['status']));
                    console.log(key);
                    L.marker( [track['lat'],track['lng']],{icon: getIcon(track['status'])} )
                     .bindPopup( `<b>Longtitude :</b>${track['lng']}  <br/>  <b> Latitude </b>  ${track['lat']} <br/> <br/><div style="text-align:center;"> <button type="button" onclick="print(${track['id']})" class="edit btn btn-outline-secondary btn-pills waves-effect waves-themed" >View Tracking</button></div>` )
                     .on('click', function (e) {
                     map.flyTo([track['lat'],track['lng']], 10) }).addTo(map);
                })
              },
               error: function(data) {

            }

   
        });
    })

    
    </script>
@endsection('front_content')