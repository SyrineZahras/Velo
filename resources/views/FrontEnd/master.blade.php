<!DOCTYPE html>
<html>
    <head>
        <title>
            BICYCLE
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
       <header class="header" id="HOME">

       <!-- Navigation -->
       @include('FrontEnd.Navigation')
       <!-- End Navigation -->
    
          
       <!--Section Header-->
       @include('FrontEnd.Header')
       <!--end of Header-->


       <!--Section About-->
       @include('FrontEnd.About')
       <!--end of About-->

       <!--Performers Section-->
       @include('FrontEnd.Performers')
       <!--End of Performers-->

       <!--Section Timeline-->
       @include('FrontEnd.Timeline')
        <!--end of Timeline-->

       <!--Section Numbers-->
       @include('FrontEnd.Numbers')
       <!--End of Numbers-->


        <!-- Contact Section -->
        @include('FrontEnd.Contact')
        <!-- End Contact Section -->

        <!-- Footer Section -->
        @include('FrontEnd.Footer')
        <!-- End Footer Section -->

        <section class="loading-overlay">
       <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
       </div>
       </section>
       
       
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
    </body>
</html>