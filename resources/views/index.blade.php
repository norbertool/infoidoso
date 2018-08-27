<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="images/Logo_main1.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/intro.css">
        <script src="js/intro.js"></script>
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Info Idoso</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/pricing.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">


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

                    <a class="navbar-brand" href="/">
                        <img id="logo" src="images/Logo_main1.png" class="logo img-responsive">
                    </a>
                </div>
                <div id="loader" class="loader"></div>
    <div class="container-fluid" style="display:none;" id="page-secundaria">

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">Projeto</a></li>
                        <li><a href="#great-place-to-enjoy">Quem somos Nós</a></li>
                        <li><a href="#breakfast">Clinicas Próximas</a></li>
                        <li><a href="#contact">Fale Conosco</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->

        <section id="header-slider" class="owl-carousel">

            <div class="item">
                <div class="container">
                    <div class="header-content">                 
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title"></h1>
                        <p class="header-sub-title"></p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content text-right pull-right">
                        <h1 class="header-title"></h1>
                        <p class="header-sub-title"></p>
                    </div> <!-- /.header-content -->
                </div>
            </div>

        </section>
        <div>
            <div class=""style="width: 0px; left: 0px; display: block; transition: all 400ms ease; transform: translate3d(80px, -64px, 0px);">
                <div class="col-md-1 col-sm-4"style="width:0%;">
                    <div class="btn btn-send">
                        <h4><a href="/login" target="_blank" style="color: white;">Login</a></h4>
                    </div>
                </div>
            </div>
            <div class=""style="width: 0px; left: 0px; display: block; transition: all 400ms ease; transform: translate3d(300px, -164px, 0px); ">
                <div class="col-md-1 col-sm-1"style="width:0%;">
                    <div class="btn btn-send">
                        
                        <h4><a href="/register" target="_blank" style="color: white;">Cadastro</a></h4>
                    </div>
                </div>
            </div>
        </div>




        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="images/icons/about_color.png" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">Sobre Nós</h2>
                                <p class="section-content-para">
                                    O nosso objetivo com a criação do Info Idoso foi desde o incio ajudar e auxíliar as pessoas de mais idade, além de ser muito útil para casas de repouso, que na maioria das vezes não possuem um aplicativo que possa facilitar a vida de quem trabalha na área. Com base em pesquisas e questionários de casas de repouso de nossa cidade, Mogi Mirim, conseguimos ter uma base de criação do aplicativo levando em consideração os principais problemas como o controle de remédios e alimentação, afinal em alguns casos a dosagem errada de remédios e alimentação pode acarretar em problemas sérios de saúde.
                                </p>
                                <p class="section-content-para">
                                    Além de ser 100% gratuito, o mesmo estará sempre atualizado para atender os nossos usuários da melhor forma possível, pois amanha nós mesmos precisaremos desse recurso.   
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->




        <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Quem Somos Nós</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->



        <!--==  9. Our Beer  ==-->
        <section id="beer" class="beer">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/beer_color.png">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>

                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <h2 class="section-content-title">Quem Somos Nós</h2>
                            <div class="section-description">
                                <p class="section-content-para">
                                    Somos alunos do terceiro ano de informática para internet integrado ao ensino médio da escola técnica ETEC Pedro Ferreira Alves, situada em Mogi Mirim. Estamos com o propósito de ajudar voluntariamente idosos que precisem utilizar as ferramentas de nosso site.

                                </p>
                                <p class="section-content-para">
                                    Uma equipe que mesmo com várias dificuldades fazemos o máximo para poder prosseguir com o site, cada membro do grupo tem seus atributos tornando assim um time, onde cada um trabalha focando na sua especialidade. Nosso lema principal é o trabalho em grupo, porque mesmo que venha dificuldades o grupo se une para poder superar essa diversidade juntos. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--== 10. Our Breakfast Menu ==-->
        <section id="breakfast" class="breakfast">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/bread_black.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Clinicas Próximas</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#breakfast -->

        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Clinicas em Mogi-Mirim</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">Todos</li>
                                           
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                <li class="item dinner">

                                    <a href="https://www.google.com.br/maps/place/Rua+Benedito+da+Cunha+Campos,+299+-+Jardim+Nazareth,+Mogi+Mirim+-+SP,+13806-610/@-22.4120987,-46.9757106,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f81b2b606b61:0xc54528d1a202f909!8m2!3d-22.4120987!4d-46.9735219" target="_blank">
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <b>Lar São Francisco de Assis</b><br>
                                                &phone; Tel: (19) 3806-5559<br> 
                                                &blacktriangledown; Rua Benedito Cunha Campos, 299 Mogi Mirim - SP;
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">São Francisco de Assis</h3>
                                </li>

                                <li class="item breakfast">

                                    <a href="https://www.google.com.br/maps/place/R.+Marciliano,+610+-+Vila+Bordignon,+Mogi+Mirim+-+SP,+13800-012/@-22.4335541,-46.9648141,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f835c7470921:0xb0d0a091837c94e7!8m2!3d-22.4335541!4d-46.9626254" target="_blank">
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <b>Instituto Coronel João Leite</b> <br>
                                                &phone; Tel: (19) 3806-2043<br> 
                                                &blacktriangledown;Rua Marciliano, 610 - Vila Bordignon, Mogi Mirim - SP;
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Coronel João Leite</h3>
                                </li>
                                <li class="item desert">

                                    <a href="https://www.google.com.br/maps/place/R.+Manaus,+226,+Mogi+Mirim+-+SP/@-22.4477109,-46.9659444,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f9c7cf2ca22b:0xf1a9d1d848bc0916!8m2!3d-22.4477109!4d-46.9637557" target="_blank">
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <b>Sociedade Santo Antônio</b> <br>
                                                &phone; Tel: (19) 3806-2777<br> 
                                                &blacktriangledown;Rua Manaus, 226 Mogi Mirim - SP;
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Sociedade Santo Antônio</h3>
                                </li>
                                <li class="item breakfast special">

                                    <a href="https://www.google.com.br/maps/place/R.+Joaquim+Firmino,+142+-+Centro,+Mogi+Mirim+-+SP,+13800-038/@-22.4304408,-46.9590906,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f84bfcff3189:0xe51085e66ce875ae!8m2!3d-22.4304408!4d-46.9569019" target="_blank">
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <b>Conferência São Vicente de Paula</b> <br>
                                                &phone; Tel: (19) 3862-3079<br> 
                                                &blacktriangledown;Rua Joaquim Firmino, 142 - Centro, Mogi Mirim - SP;
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">São Vicente de Paula</h3>
                                </li>
                                <li class="item breakfast">

                                    <a href="https://www.google.com.br/maps/place/R.+Ant%C3%B4nio+Pio+Brito,+410+-+Jardim+Guacu-Mirim,+Mogi+Mirim+-+SP,+13807-719/@-22.3998308,-46.9502472,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f87bc6e9fb51:0xf0fd7dbd7b5447cd!8m2!3d-22.3998308!4d-46.9480585" target="_blank">
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <b>Centro de Apoio para Vida Casa de Repouso Emanuel</b> <br>
                                                &phone; Tel: (19) 3862-0044<br> 
                                                &blacktriangledown;Rua Antônio Pio Brito, 410 - Jardim Guaçu-Mirim,  Mogi Mirim - SP;
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Casa Emanuel</h3>
                                </li>
                                <li class="item dinner special">

                                    <a href="https://www.google.com.br/maps/place/Av.+Padre+Jo%C3%A3o+Vieira+Ramalho,+450+-+Jardim+Elite,+Mogi+Mirim+-+SP,+13801-020/@-22.431009,-46.9493782,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8f853432259e7:0x8db36c384441325a!8m2!3d-22.431009!4d-46.9471895" target="_blank">
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <b>Abrigo Espírita Juca de Andrade Vila Pahin</b> <br>
                                                &phone; Tel:(19) 3806-8002 <br> 
                                                &blacktriangledown; Av. Padre João Vieira Ramalho, 450 - Jardim Elite, Mogi Mirim - SP;
                                            </span>
                                        </div>
                                    </a>

                                    <h3 class="white">Juca de Andrade</h3>
                                </li>
                                  
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>   
                    </div>
                </div>

            </div> 
        </section>

        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row">
                    <div class="hidden-xs col-sm-10 dis-table-cell">
                        <h2 class="section-title">Fale Conosco</h2>
                    </div>

                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="https://pt-br.facebook.com/" target="_blank" class="fb"></a></li>
                                <li><a href="https://twitter.com/login?lang=pt" target="_blank" class="twit"></a></li>
                                <li><a href="https://plus.google.com/+googleplus" target="_blank" class="g-plus"></a></li>
                                <li><a href="https://www.instagram.com/?hl=pt-br" target="_blank" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <form class="contact-form" method="post" action="contact.php">

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control empty iconified" id="name" required="required" placeholder="Nome">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control empty iconified" id="email" required="required" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control empty iconified" id="subject" required="required" placeholder="Assunto">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control empty iconified" id="message" rows="7" required="required" placeholder=" Mensagem"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
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