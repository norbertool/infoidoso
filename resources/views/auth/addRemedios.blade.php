<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="shortcut icon" href="{{asset('images/Logo_main1.png')}}" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Cadastro</title>

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

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


        </script>
        <!--== nao apaga |||||||||||||||||||||||||||||||||||||||||||||||||||||| nao apaga==-->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Adicionando Javascript -->
        <script type="text/javascript" >

            function limpa_formulário_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('rua').value = ("");
                document.getElementById('bairro').value = ("");
                document.getElementById('cidade').value = ("");
                document.getElementById('uf').value = ("");
            }

            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value = (conteudo.logradouro);
                    document.getElementById('bairro').value = (conteudo.bairro);
                    document.getElementById('cidade').value = (conteudo.localidade);
                    document.getElementById('uf').value = (conteudo.uf);

                } //end if.
                else {
                    //CEP não Encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            }

            function pesquisacep(valor) {

                //Nova variável "cep" somente com dígitos.
                var cep = valor.replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        document.getElementById('rua').value = "...";
                        document.getElementById('bairro').value = "...";
                        document.getElementById('cidade').value = "...";
                        document.getElementById('uf').value = "...";


                        //Cria um elemento javascript.
                        var script = document.createElement('script');

                        //Sincroniza com o callback.
                        script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                        //Insere script no documento e carrega o conteúdo.
                        document.body.appendChild(script);

                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            }
            ;


$(document).ready(function(){
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $("#logo2").attr("src", "{{asset('images/Logo_stick1.png')}}")
        }
        else {
             $("#logo2").attr("src", "{{asset('images/Logo_main1.png')}}")
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
                    <div class="section-content" style="right:0px; display: block; transform: translate3d(450px, -30px, 0px);" >

                        <a class="navbar-brand" href="/">
                            <img id="logo2" src="{{asset('images/Logo_main1.png')}}" class="logo2 img-responsive">
                        </a>
                    </div>
                    </nav>     <br><br><br><br><br><br>


                    <div class="col-md-10 col-md-offset-4 col-sm-10 col-sm-offset-1" >
                        <h1 class="section-content-title">Cadastro de Remédios</h1>
                    </div>


                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif



                   <section class="contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-3 col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                        <form class="contact-form " method="post" action="/remedios/cadastro">
                                           @csrf
                                            <div class="col-md-offset-0">
                                            
                                            <h3>Informações</h3>
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="form-group ">
                                                      <input  name="nome" type="text"  id="nome"  placeholder="Nome do Remédio" class="{{ $errors->has('nome') ? ' is-invalid' : '' }} form-control empty" name="nome" value="{{ old('nome') }}" required autofocus>
                                                        @if ($errors->has('nome'))>
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>     
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="form-group ">
                                                      <input  name="dosagem" type="text"  id="dosagem"  placeholder="Dosagem do Remédio" class="{{ $errors->has('dosagem') ? ' is-invalid' : '' }} form-control empty" name="dosagem" value="{{ old('dosagem') }}" required autofocus>
                                                        @if ($errors->has('dosagem'))>
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('dosagem') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div> 
                                                <div class="col-md-7 col-sm-12">
                                                    <div class="form-group ">
                                                      <textarea  name="descricao" type="text" rows="7" id="descricao"  placeholder="Descrição do Remédio" class="{{ $errors->has('descricao') ? ' is-invalid' : '' }} form-control empty" name="descricao" value="{{ old('descricao') }}" required autofocus></textarea>
                                                        @if ($errors->has('descricao'))>
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('descricao') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>                                        
                          
                                            <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2">
                                                <div class="text-center">
                                                    <input type="submit" id="submit" name="submit" class="btn btn-send2" value="{{ __('Registrar') }}"/>
                                                </div>
                                            </div>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <br> <br><br>


x
                                <footer class="footer2">
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


                                <script src="{{asset('js/bootstrap.min.js')}}"></script>
                                <script src="{{asset('js/owl.carousel.min.js')}}"></script>
                                <script type="text/javascript" src="{{asset('js/jquery.mixitup.min.js')}}" ></script>
                                <script src="{{asset('js/wow.min.js')}}"></script>
                                <script src="{{asset('js/jquery.validate.js')}}"></script>
                                <script type="text/javascript" src="js/jquery.hoverdir.js')}}"></script>
                                <script type="text/javascript" src="js/jQuery.scrollSpeed.js')}}"></script>
                                <script src="{{asset('js/script.js')}}"></script>


    </body>
</html>