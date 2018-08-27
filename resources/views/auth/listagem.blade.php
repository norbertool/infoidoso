<html lang="en">
    <head>
    
        <link rel="shortcut icon" href="images/Logo_main1.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Listagem de Idosos</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/pricing.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 

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
            
            $(document).ready(function(){
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $("#logo2").attr("src", "images/Logo_stick1.png")
        }
        else {
             $("#logo2").attr("src", "images/Logo_main1.png")
        }
    });
});
           
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
                        <div class="section-content" style="right:0px; display: block; transform: translate3d(0px, 0px, 0px);" >
                            <a class="navbar-brand" href="/">
                                <img id="logo" src="images/Logo_main1.png" class="logo img-responsive">
                            </a>
                        </div>
                </div>
            </div>
        </nav>     
                    <br><br><br><br><br><br><br><br>


                    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-1" >
                        <h1 class="section-content-title">Listagem de Idosos</h1>
                    </div>
                    <br><br><br>

                        <div class="container">
                                <table class="table table-striped table-bordered table-hover">

                            @if(old('nome'))
                                <div class="alert alert-success">
                                    <strong>Sucesso!</strong> {{old('nome')}} foi adicionado.
                                </div>
                            @endif

                                    <head><link rel="stylesheet" type="text/css" href="/css/app.css"></head>

                                        <div class="container">
                            
                                    <table class="table table-striped table-bordered table-hover">
                                    @foreach($idosos as $p)
                                    
                                    
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                            <div class="text-center">
                                        <tr>
                                        <!--==<td>{{$p->id}}</td> mostra o id==-->

                                            <td></td>                                              
                                            <td><a style="color: white;">{{$p->nome}}</a></td>
                                            
                                            <td>
                                                <a style="color: white;" class="iconified text-center" href="/idosos/show/{{$p->id}}">Detalhes</a>
                                            </td>
                                            <td>
                                                <a style="color: white;" href="/idosos/remove/{{$p->id}}">Remover</a>
                                            </td>
                                            <td>
                                                <a style="color: white;" href="/idosos/edit/{{$p->id}}">Editar</a>
                                            </td>
                                        </tr>
                                            </div>
                                        </div>
                                    
 @endforeach
                                    
                                </table>
                            </div>



                            <br><br><br><br><br><br><br><br><br><br><br><br>

                            <div class="col-md-12 col-md-offset-9 col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal col-xs-10 col-xs-offset-1" method="get" action="/idosos/cadastrar">
                                    <div class="form-group">
                                        <a href="/idosos/cadastrar" target="_blank"><button class="btn btn-primary btn-circle btn-lg"><i class="fas fa-plus fa-1x" style="color: white;"></button></i></a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 col-md-offset-9 col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal col-xs-6 col-xs-offset-1" method="get" action="/remedios">
                                    <div class="form-group">
                                        <a href="/remedios" target="_blank"><button class="btn btn-primary2 btn-circle btn-lg"><i class="fa fa-pills fa-1x" style="color: white;"></button></i></a>
                                    </div>
                                </form>
                            </div>
                            
                           


<br><br><br><br><br><br><br><br><br><br><br><br>





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