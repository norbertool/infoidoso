<html lang="en">
    <head>
    
        <link rel="shortcut icon" href="{{asset('images/Logo_main1.png')}}" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Listagem</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 


        <!--== nao apaga ||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->
        <script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.flexslider.min.js')}}"></script>
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
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default2 navbar-fixed-top">
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
                            <a class="navbar-brand" href="{{asset('/')}}">
                                <img id="logo" src="{{asset('images/Logo_main1.png')}}" class="logo img-responsive">
                            </a>
                        </div>
                </div>
            </div>
        </nav>     
                    <br><br><br><br><br><br><br><br>


                    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-1" >
                        <h1 class="section-content-title">Remédios</h1>
                    </div>
                    <br><br><br>

                        <div class="container">
                                <table class="table table-striped2 table-bordered table-hover">

                            @if(old('nome'))
                                <div class="alert alert-success">
                                    <strong>Sucesso!</strong> {{old('nome')}} foi adicionado.
                                </div>
                            @endif

                                    <head><link rel="stylesheet" type="text/css" href="/css/app.css"></head>

                                        <div class="container">
                            
                                    <table class="table table-striped2 table-bordered table-hover">
                                    @foreach($remedios as $p)
                                    
                                    
                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                            <div class="text-center">
                                        <tr>
                                        <!--==<td>{{$p->id}}</td> mostra o id==-->

                                            <td></td>                                              
                                            <td><a style="color: white;">{{$p->nome}}</a></td>
                                            
                                            <td>
                                                <a style="color: white;" class="iconified text-center" href="/remedios/show/{{$p->id}}">Detalhes</a>
                                            </td>
                                            <td>
                                                <a style="color: white;" href="/remedios/remove/{{$p->id}}">Remover</a>
                                            </td>
                                            
                                        </tr>
                                            </div>
                                        </div>
                                    
 @endforeach
                                    
                                </table>
                            </div>



                            <br><br><br><br><br><br><br><br><br><br><br><br>
                            <div class="col-md-12 col-md-offset-9 col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal col-xs-6 col-xs-offset-1" method="get" action="/remedios/cadastrar">
                                    <div class="form-group">
                                        <a href="/remedios/cadastrar" target="_blank"><button class="btn btn-primary2 btn-circle btn-lg"><i class="fas fa-plus fa-1x" style="color: white;"></button></i></a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12 col-md-offset-9 col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal col-xs-10 col-xs-offset-1" method="get" action="/idosos">
                                    <div class="form-group">
                                        <a href="/idosos" target="_blank"><button class="btn btn-primary btn-circle btn-lg"><i class="fas fa-user fa-1x" style="color: white;"></button></i></a>
                                    </div>
                                </form>
                            </div>
                            
                            
                            
                           


<br><br><br><br><br><br><br><br><br><br><br><br>





      <footer class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <h4>
                                &copy; Copyright, 2018 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


                                <script src="{{asset('js/bootstrap.min.js')}}"></script>
                                <script src="{{asset('js/owl.carousel.min.js')}}"></script>
                                <script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}" ></script>
                                <script src="{{asset('js/wow.min.js')}}"></script>
                                <script src="{{asset('js/jquery.validate.js')}}"></script>
                                <script type="text/javascript" src="{{asset('js/jquery.hoverdir.js')}}"></script>
                                <script type="text/javascript" src="{{asset('js/jQuery.scrollSpeed.js')}}"></script>
                                <script src="{{asset('js/script.js')}}"></script>


                                </body>
                                </html>