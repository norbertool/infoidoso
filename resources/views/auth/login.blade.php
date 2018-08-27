<!DOCTYPE html>
<html lang="en">
    <head>
    
        <link rel="shortcut icon" href="images/Logo_main1.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Login</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/pricing.css">
        <link rel="stylesheet" href="css/main.css">

        <!--== nao apaga ||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(-22.4249526, -46.9509746),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-22.4249526, -46.9509746),
                    title: "Etec Pedro Ferreira Alves"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
            
           
        </script>
       <!--== nao apaga |||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
    
    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <div class="section-content" style="right:0px; display: block; transform: translate3d(420px, -30px, 0px);" >

                        <a class="navbar-brand" href="/">
                            <img id="logo" src="images/Logo_main1.png" class="logo img-responsive">
                        </a>
                    </div>
                    </nav>     <br><br><br><br><br><br><br><br>


                    <div class="col-md-12 col-md-offset-5 col-sm-1" >
                        <h1 class="section-content-title">Login</h1>
                    </div>
                    <br><br><br>

        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <form class="contact-form" method="post" action"/funcionarios/login">
                                     <div class="col-md-3 col-sm-6 col-md-offset-4">
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control empty iconified" id="email" required="required" placeholder=" Email">
                                    </div>
                                    </div>
                                    <br><br><br>
                                     <div class="col-md-3 col-sm-6 col-md-offset-4">
                                 <div class="form-group">
                                        <input name="password" type="password" class="form-control empty iconified" id="pass" required="required" placeholder=" Senha">
                                    </div>
                                    </div>
                                    <div class="col-md-offset-0">
                                                <br><br><br><br>
                                
                                <div class="col-md-3 col-sm-6 col-md-offset-4">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Enviar </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<br><br><br><br><br><br><br><br>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2018 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
        <script src="js/script.js"></script>


    </body>
</html>