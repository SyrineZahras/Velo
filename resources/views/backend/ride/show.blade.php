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
                                    <th>Truck Name</th>
                                    <td>ok</td>
                                </tr>
                                <tr class="spaceUnder">
                                    <th>Licence Plate</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Truck Year</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Truck Model</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Truck Type</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Max Load</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Truck Size</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Engine Type</th>
                                    <td>ok</td>
                                </tr>
                                <tr>
                                    <th>Truck Color</th>
                                    <td>ook</td>
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
                                <span class="badge badge-success badge-pill">On Route</span>
                            </div>
							<div class="col-xl-6">
                                <span class="badge badge-success badge-pill">On Route</span>
                            </div>
                        </div>

                    </div>
                </div>
				<div id="map" style="width: 100%; height: 320px;position: relative;   float: right;"></div>
                <div class="d-flex flex-column align-items-center justify-content-center p-4">
                    <a href="#planTrip" data-toggle="modal">
                        <button type="button" class="btn btn-lg btn-info waves-effect waves-themed"
                            (click)="planTrip()">
                            <span class="fas fa-map-marker-alt mr-1"></span>
                            Plan a trip
                        </button>
                    </a>
                </div>
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
        var center = [7.2906, 80.6337];
        // Create the map
        var map = L.map('map').setView(center, 10);
        // Set up the OSM layer 
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Data © <a href="http://osm.org/copyright">OpenStreetMap</a>',
                maxZoom: 18
            }).addTo(map);
		L.marker( [7.2906, 80.6337],{icon: greenIcon} )
            .bindPopup( '<p>ok</p>' )
            .addTo(map);
    </script>

		</div>

@endsection('content')
