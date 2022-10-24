@extends('backend.master')
@section('content')
@csrf
<div class="container-fluid">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rides Tracking</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add Ride</a>
</div>
<div class="row">
 <!-- Content Column -->
    <div class="col-lg-6 mb-4">
    @if(count($data) > 0) 
    <div class="border-faded p-3 mb-g d-flex">
            <input type="text" name="filter-contacts" class="form-control shadow-inset-2 form-control-lg" placeholder="Search Tracking" list="shippements" onchange="run('{{$data[0]->lat}}','{{$data[0]->lng}}')">
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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ride n° {{ $row->id}}</h6>
            </div>
            <div class="card-body">   
                Status : <span class="badge badge-info badge-pill"> {{ $row->status}}</span>
                <br/>
               
            </div>
        </div>
        @endforeach
    @else
        <div class="card shadow mb-4">
            <div class="card-body">   
            <span class="text-center">No Data Found</span>
            </div>
        </div>
    @endif
    
    <div  class="float-right">
            {!! $data->links() !!}
            </div>

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
     
                $.each(data['data'], function( key, track ) {
                    console.log( getIcon(track['status']));
                    console.log(key);
                    L.marker( [track['lat'],track['lng']],{icon: getIcon(track['status'])} )
                     .bindPopup( `<b>Ride n°:</b>${track['id']}  <br/><b>Longtitude :</b>${track['lng']}  <br/>  <b> Latitude </b>  ${track['lat']} <br/> <br/><div style="text-align:center;"> <button type="button" onclick="print(${track['id']})" class="edit btn btn-outline-secondary btn-pills waves-effect waves-themed" >View Tracking</button></div>` )
                     .on('click', function (e) {
                     map.flyTo([track['lat'],track['lng']], 10) }).addTo(map);
                })
              },
               error: function(data) {

            }

   
        });
    })

    
    </script>



</div>


</div>
@endsection