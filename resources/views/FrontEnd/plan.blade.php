@extends('frontend.master')
@section('front_content')
<section class="parallax-container" data-parallax-img="img/typography-title-bg.jpg">
    <div class="material-parallax parallax"><img src="img/typography-title-bg.jpg" alt="" style="display: block; transform: translate3d(-50%, 286px, 0px);"></div>
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Ride Plan </h2>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-lg bg-default text-center position-relative">
        <div class="container container-relative">
          <h3>Ride Plan Details</h3>
      <div class="row">
 <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->
    @if(count($data) > 0) 
       @foreach($data as $row)
       <div class="col-12">
              <div
                class="event-item-classic wow slideInleft"
                style="visibility: hidden; animation-name: none">
                <div class="event-item-classic-caption">
                  <p class="events-time">{{ $row->time->format('H:i') }}</p>
                  <h4 class="event-item-classic-title">
                    <a href="">Plan n° {{ $row->id }}
                    </a>
                  </h4>
                  <h5>
                    Address:
                    <a href="#">{{ $row->description }}</a>
                    <span></span>
                  </h5>
                  <br/>
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
        <div class="col-12">
              <div
                class="event-item-classic wow slideInleft"
                style="visibility: hidden; animation-name: none">
                <div class="event-item-classic-caption">
                  <h3>
                   No Data Found
                  </h3>
                </div>
              </div>
            </div>
    @endif
    <br/><br/><br/>
    <div class="float-right">
            {!! $data->links() !!}
            </div>

    </div>
	<div class="col-lg-6 mb-4">
            <div id="map" style="width: 100%; height: 1000px;position: relative; float: right;"></div>
    </div>
    </div>
    </div>
</section>



<script>
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
                L.Routing.control({
                waypoints: [
                      L.latLng(36.79, 10.21),
                      L.latLng(36, 10) 
                ],
                lineOptions: {
                   styles: [{ color: 'blue', opacity: 1, weight: 5 }]
                },
                routeWhileDragging: true,
                reverseWaypoints: true,
                showAlternatives: true, 
              }).addTo(map);
               
              },
               error: function(data) {

            } 
        });
    })
    </script>
@endsection('front_content')