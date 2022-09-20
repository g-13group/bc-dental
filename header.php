<!DOCTYPE HTML>
<html>
<head>
    <title>Bc Dental | <? echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link href="owl-carousel/owl.carousel.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="fonts/flaticon.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/x-icon" href="images/favico/favicon.ico"/>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/modernizr.custom.js"></script>
    <!--Mapa-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&sensor=false"></script>
    <script type="text/javascript">

        function initialize() {
            var myLatlng = new google.maps.LatLng(19.4885248, -99.1175502);
            var mapOptions = {
                zoom: 14,
                center: myLatlng,
                zoomControl: true,
                scaleControl: true,
                streetViewControl: true,
                styles: [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#3f6184"}]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{"color": "#f2f2f2"}]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{"saturation": -100}, {"lightness": 45}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"color": "#3f6184"}, {"visibility": "on"}]
                }]
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var contentString =
                '<p><strong>Lorem ipsum</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: 'images/marker.png',
                title: 'Lorem Ipsum'
            });
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);

            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
<div class="fondo_blanco_menu">
    <div class="container">
        <div class="header-shadow">
            <div class="header-top">
                <div class="row header-shadow">
                    <div class="col-md-12 text-center">
                        <div id="nav">
                            <div class="navbar navbar-default" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="/"></a>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#" class="text-light"
                                               onclick="$('#inicio').animatescroll({scrollSpeed:1000});">Inicio</a>
                                        </li>
                                        <li><a href="#" class="text-light"
                                               onclick="$('#servicios').animatescroll({scrollSpeed:1000});">Servicios</a>
                                        </li>
                                        <li><a href="#" class="text-light"
                                               onclick="$('#instalaciones').animatescroll({scrollSpeed:1000});">Instalaciones</a>
                                        </li>
                                        <li><a href="#" class="text-light"
                                               onclick="$('#contacto').animatescroll({scrollSpeed:1000});">Contacto</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-sm-9 -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<section class="section-1">
<!--    <img src="images/bg-bc-dental.png" class="img-responsive">-->
</section>