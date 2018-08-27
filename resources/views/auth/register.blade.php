<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="shortcut icon" href="images/Logo_main1.png" type="image/x-icon" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Cadastro</title>

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
                    <div class="section-content" style="right:0px; display: block; transform: translate3d(450px, -30px, 0px);" >

                        <a class="navbar-brand" href="/">
                            <img id="logo" src="images/Logo_main1.png" class="logo img-responsive">
                        </a>
                    </div>
                    </nav>     <br><br><br><br><br><br>


                    <div class="col-md-10 col-md-offset-5 col-sm-10 col-sm-offset-1" >
                        <h1 class="section-content-title">Cadastro</h1>
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
                                        <form class="contact-form" method="post" action="/funcionarios/cadastro">
                                           @csrf
                                            <h3>Dados Pessoais</h3>
                                            <div class="col-md-offset-0">

                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group ">
                                                      <input  name="name" type="text"  id="name"  placeholder="Nome" class="{{ $errors->has('name') ? ' is-invalid' : '' }} form-control empty" name="name" value="{{ old('name') }}" required autofocus>
                                                        @if ($errors->has('name'))>
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">

                                                        <input  name="sobrenome" type="text" id="sobrenome"  placeholder="  Sobrenome" class="{{ $errors->has('sobrenome') ? ' is-invalid' : '' }} form-control empty" name="sobrenome" value="{{ old('sobrenome') }}" required autofocus>
                                                        @if ($errors->has('sobrenome'))>
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('sobrenome') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div><br><br><br>
                                                <div class="col-md-7 ">
                                                    <div class="form-group">
                                                        <input name="email" type="email" id="email"  placeholder=" Email"  class="{{ $errors->has('email') ? ' is-invalid' : '' }} form-control empty" name="email" value="{{ old('email') }}"
                                                        required> @if ($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>

                                                </div><br><br><br>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input name="telefone" type="tel" id="telefone" placeholder=" Telefone" class="{{ $errors->has('telefone') ? ' is-invalid' : '' }} form-control empty" name="telefone" value="{{ old('telefone') }}"
                                                        required> @if ($errors->has('telefone'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('telefone') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <h5>Sexo:
                                                            Masculino:<input type="radio" name="sexo" id="sexo"  value="M" class="{{ $errors->has('sexo') ? ' is-invalid' : '' }} iconified empty" name="sexo" value="{{ old('sexo') }}"required>
                                                            Feminino:<input type="radio" name="sexo" id="sexo" value="F" class="{{ $errors->has('sexo') ? ' is-invalid' : '' }} iconified empty" name="sexo" value="{{ old('sexo') }}"required>
                                                        @if ($errors->has('sexo'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('sexo') }}</strong>
                                                        </span>
                                                        @endif</h5>
                                                    </div>
                                                </div><br><br><br>
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group ">

                                                        <input  name="password" type="password"  id="password"  placeholder=" Digite uma senha" class="{{ $errors->has('password') ? ' is-invalid' : '' }} form-control empty" name="password" required>
                                                         @if ($errors->has('password'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif

                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <input  name="password-confirm" type="password" class="form-control empty " id="password-confirm" required="required" placeholder=" Confirme sua senha">
                                                    </div>


                                                </div><br><br><br>
                                                    <div class="col-md-4 col-lg-offset-0">
                                                    <div class="form-group">
                                                        <input  name="cpf" type="text" id="cpf" placeholder=" CPF" class="{{ $errors->has('cpf') ? ' is-invalid' : '' }} form-control empty" name="cpf" required>
                                                         @if ($errors->has('cpf'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('cpf') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                    <div class="col-md-3 col-lg-offset-0">
                                                    <div class="form-group ">
                                                        <input  name="rg" type="text" id="rg"  placeholder=" RG" class="{{ $errors->has('rg') ? ' is-invalid' : '' }} form-control empty" name="rg" required>
                                                         @if ($errors->has('rg'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('rg') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                    </div><br><br><br>

                                                    <div class="form-group">
                                                        <h5>Data de Aniversário</h5>
                                                        <div class="col-md-1">
                                                        <input type="text" name="dia"id="dia" size="2" maxlength="2" placeholder="Dia" class="{{ $errors->has('dia') ? ' is-invalid' : '' }} form-control empty" name="dia" required>
                                                        @if ($errors->has('dia'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('dia') }}</strong>
                                                        </span>
                                                        @endif
                                                        </div>
                                                        <div class="col-md-1">
                                                        <input type="text" name="mes"id="mes" size="2" maxlength="2" placeholder="Mês" class="{{ $errors->has('mes') ? ' is-invalid' : '' }} form-control empty" name="mes" required>
                                                        @if ($errors->has('mes'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('mes') }}</strong>
                                                        </span>
                                                        @endif
                                                        </div>
                                                        <div class="col-lg-2">
                                                        <input type="text" name="ano" id="ano" size="4" maxlength="4" placeholder="Ano" class="{{ $errors->has('ano') ? ' is-invalid' : '' }} form-control empty" name="ano" required>
                                                         @if ($errors->has('ano'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('ano') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                        <!--== <div class="form-group">
                                                <div class="col-md-4 col-sm-10 ">
                                                    <label> CLínica: </label><br>
                                                        <input   type="hidden" name="id" value=" {{$entidade-> id}}">
                                                        <select class=" div-select" name="id_entidade" id="id_entidade" class="form-group"> 
                                                            <option name="id_entidade"  value="{{$entidade -> id}}" class="form-control">{{$entidade -> nome}} </option>
                                                            <option name="id_entidade"  value="{{$entidade -> id}}" class="form-control" >{{$entidade -> nome}} </option>
                                                            <option name="id_entidade"  value="{{$entidade -> id}}" class="form-control" >{{$entidade -> nome}} </option>
                                                            <option name="id_entidade"  value="{{$entidade -> id}}" class="form-control" >{{$entidade -> nome}} </option>
                                                            <option name="id_entidade"  value="{{$entidade -> id}}" class="form-control" >{{$entidade -> nome}} </option>
                                                            <option name="id_entidade"  value="{{$entidade -> id}}" class="form-control" >{{$entidade -> nome}} </option>
                                                        </select>
                                                        @if ($errors->has('id_entidade'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('id_entidade') }}</strong>
                                                        </span>
                                                        @endif
                                                </div>
                                            </div>==-->
                                            
                                                </div>
                                            </div>

                                    </div>
                                </div>




                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-3 col-sm-10 col-sm-offset-0">
                                            <div class="row">

                                                        <h3>Endereço</h3>
                                                        <div class="col-md-2">
                                                            <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" placeholder="CEP"
                                                                          onblur="pesquisacep(this.value);"
                                                                          class="{{ $errors->has('cep') ? ' is-invalid' : '' }} form-control empty iconified" name="cep" required />
                                                         @if ($errors->has('cep'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('cep') }}</strong>
                                                        </span>
                                                        @endif
                                                        </div>
                                                        <div class="col-md-5 col-sm-6">
                                                            <input name="rua" type="text" id="rua" size="60"placeholder=" Rua" class="{{ $errors->has('rua') ? ' is-invalid' : '' }} form-control empty iconified" name="rua" required />
                                                         @if ($errors->has('rua'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('rua') }}</strong>
                                                        </span>
                                                        @endif
                                                        </div><br /><br><br>
                                                        <div class="col-md-4 col-sm-6">
                                                            <input name="bairro" type="text" id="bairro" size="40" placeholder=" Bairro" class="{{ $errors->has('bairro') ? ' is-invalid' : '' }} form-control empty iconified" name="bairro" required />
                                                         @if ($errors->has('bairro'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('bairro') }}</strong>
                                                        </span>
                                                        @endif
                                                        </div>
                                                        <div class="col-md-3 col-sm-6">
                                                            <input name="cidade" type="text" id="cidade" size="40"  placeholder=" Cidade" class="{{ $errors->has('cidade') ? ' is-invalid' : '' }} form-control empty iconified" name="cidade" required />
                                                         @if ($errors->has('cidade'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('cidade') }}</strong>
                                                            </span>
                                                        @endif
                                                        </div><br /><br><br>
                                                        <div class="col-md-2 col-sm-6">
                                                            <input name="uf" type="text" id="uf" size="6" placeholder=" Estado" class="{{ $errors->has('uf') ? ' is-invalid' : '' }} form-control empty iconified" name="uf" required />
                                                         @if ($errors->has('uf'))
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('uf') }}</strong>
                                                        </span>
                                                        @endif
                                                        </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                        <div class="text-center">
                                            <input type="submit" id="submit" name="submit" class="btn btn-send" value="{{ __('Registrar') }}"/>
                                        </div>
                                        </form>
                                    </div>

                                </div>


                                </section>




                                <footer>
                                    <div class="container" sytle="">
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