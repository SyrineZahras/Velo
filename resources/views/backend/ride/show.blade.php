@extends('backend.master')

@section('content')

<div>


    <div class="row">
		
        <div class="col-lg-7">
			
            <div class="card">
				
                <div class="card-body ">
                    <div class="col d-flex">
                        <h3>
                            Ride <span><b>Details</b></span>
                        </h3>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="table-responsive-lg">
                        <table class="table table-bordered table-hover table-striped w-100" style="font-size: 120%;"
                            id="dt-basic-example">
                            <tbody style="margin-top: 20%;">
                            <tr class="spaceUnder">
                                    <th>Ride Location</th>
                                    <td>{{ $ride->location }}</td>
                                </tr>
                                <tr class="spaceUnder">
                                    <th>Ride Association</th>
                                    <td>
                                        <b>Association Name :</b> &nbsp;{{ $association->name }}<br/>
                                        <b>Association Location:</b> &nbsp;{{ $association->localisation }}<br/>
                                        <img src="{{ asset('images/' . $association->image) }}" width="75" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ride Date</th>
                                    <td>{{ $ride->date->format('d/m/Y') }}</td>
                                </tr>
                                <tr class="spaceUnder">
                                    <th>Ride Time</th>
                                    <td>{{ $ride->time->format('H:i')  }}</td>
                                </tr>
                                <tr class="spaceUnder">
                                    <th>Ride Duration</th>
                                    <td>{{ $ride->duration->format('H:i')  }}</td>
                                </tr>
                     
                                <tr>
                                    <th>Ride Longtitude</th>
                                    <td>{{ $ride->lng  }}</td>
                                </tr>
                                <tr>
                                    <th>Ride Latitude</th>
                                    <td>{{ $ride->lat  }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div id="c_1" class="card border shadow-0 mb-g shadow-sm-hover" data-filter-tags="oliver kopyov">
                <div class="card-body border-faded border-top-0 border-left-0 border-right-0 rounded-top">
                    <div>


                        <div class="col d-flex">
                            <h3>
                                Ride <span class="fw-300"></span>Tracking

                            </h3>
                            &nbsp; &nbsp; &nbsp;
                            <span style="font-size: 1em; color: green;">
                                <i class="fas fa-circle"></i>
                            </span>
                            <span
                                style="font-size: 15px; font-weight: bold; color: green; text-align: right;">LIVE</span>

                            <a class="ml-auto mr-2 flex-shrink-0 "></a>
                        </div>
                    </div>

                </div>
                <div class="card-body ">
                    <div class="p-2">
                        <div class="row">
                            <div class="col-xl-6">
                                <p>STATUS</p>

                            </div>
                            <div class="col-xl-6">
                                <p>Distance</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <span class="badge badge-warning badge-pill">{{ $ride -> status}}</span>
                            </div>
							<div class="col-xl-6">
                                <span class="badge badge-success badge-pill">{{ $ride -> distance}} km</span>
                            </div>
                        </div>

                    </div>
                </div>
				<div id="map" style="width: 100%; height: 400px;position: relative;   float: right;"></div>
                
            </div>

        </div>

        <div>

        </div>
        
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
              /// MAP MODULE
              var center = [36, 9.701];
        // Create the map
        var map = L.map('map').setView(center, 8);
        // Set up the OSM layer 
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
	
            let url = window.location.pathname;
            var id = url.substring(url.lastIndexOf('/') + 1);


console.log(id);


            $(function(){

$.ajax({
   url: "/ajax/track/"+id,
  type: 'GET',


  
 success: function(rires) {
    
      console.log(rires['lng'], rires['lat']);
      L.marker( [rires['lat'],rires['lng']],{icon: greenIcon} )
       .bindPopup( `<b>Ride n° </b>${rires['id']} : <br/> <b>Longtitude :</b>${rires['lng']}  <br/>  <b> Latitude </b>  ${rires['lat']} <br/> <br/><div style="text-align:center;"></div>` )
       .addTo(map);
},
 error: function(data) {

}


});

            });
    </script>

		</div>

@endsection('content')
