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
                            <img id="logo2" src="{{asset('images/Logo_main1.png')}}" class="logo2 img-responsive">
                        </a>
                    </div>
                    </nav>     <br><br><br><br><br><br>


                    <div class="col-md-10 col-md-offset-4 col-sm-10 col-sm-offset-1" >
                        <h1 class="section-content-title">Cadastro de Idoso</h1>
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
                                        <form class="contact-form " method="post" action="/idosos/cadastro">
                                           @csrf
                                            <div class="col-md-offset-0">
                                            
                                            <h3>Dados Pessoais</h3>
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="form-group ">
                                                      <input  name="nome" type="text"  id="nome"  placeholder="Nome Completo" class="{{ $errors->has('nome') ? ' is-invalid' : '' }} form-control empty" name="nome" value="{{ old('nome') }}" required autofocus>
                                                        @if ($errors->has('nome'))>
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nome') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>                                            
                                                <br><br><br>

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
                                                </div>

                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <h5><b>Sexo:</b>
                                                            Masculino:<input type="radio" name="sexo" id="sexo"  value="M" class="{{ $errors->has('sexo') ? ' is-invalid' : '' }} iconified empty" name="sexo" value="{{ old('sexo') }}"required>
                                                            Feminino:<input type="radio" name="sexo" id="sexo" value="F" class="{{ $errors->has('sexo') ? ' is-invalid' : '' }} iconified empty" name="sexo" value="{{ old('sexo') }}"required>
                                                        @if ($errors->has('sexo'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('sexo') }}</strong>
                                                            </span>
                                                        @endif</h5>
                                                    </div>
                                                </div>
                                                
                                                <br><br><br>
                                                
                                                <div class="col-md-3 col-lg-offset-0">
                                                    <div class="form-group ">
                                                        <input  name="rg" type="text" id="rg"  placeholder=" RG"  maxlength="9" class="{{ $errors->has('rg') ? ' is-invalid' : '' }} form-control empty" name="rg" required>
                                                         @if ($errors->has('rg'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('rg') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-lg-offset-0">
                                                    <div class="form-group">
                                                        <input  name="cpf" type="text" id="cpf" placeholder=" CPF"  maxlength="11" class="{{ $errors->has('cpf') ? ' is-invalid' : '' }} form-control empty" name="cpf" required>
                                                        @if ($errors->has('cpf'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('cpf') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <br><br><br>
                                                    
                                                <div class="col-md-3 col-sm-8">
                                                    <div class="form-group">
                                                        <h5>Alimentação:                                                        
                                                            <select name="alimentacao" id="alimentacao" class="div-select">
                                                                <option name="alimentacao" id="alimentacao" value="S" class="{{ $errors->has('alimentacao') ? ' is-invalid' : '' }} iconified empty" name="alimentacao" value="{{ old('alimentacao') }}"required>Sólida</option>
                                                                <option name="alimentacao" id="alimentacao" value="P" class="{{ $errors->has('alimentacao') ? ' is-invalid' : '' }} iconified empty" name="alimentacao" value="{{ old('alimentacao') }}"required>Pastosa</option>
                                                                <option name="alimentacao" id="alimentacao" value="L" class="{{ $errors->has('alimentacao') ? ' is-invalid' : '' }} iconified empty" name="alimentacao" value="{{ old('alimentacao') }}"required>Líquida</option>
                                                                <option name="alimentacao" id="alimentacao" value="O" class="{{ $errors->has('alimentacao') ? ' is-invalid' : '' }} iconified empty" name="alimentacao" value="{{ old('alimentacao') }}"required>Outras</option>
                                                            </select>
                                                            
                                                            @if ($errors->has('alimentacao'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('alimentacao') }}</strong>
                                                                </span>
                                                            @endif
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group ">
                                                      <input  name="descricaoal" type="text"  id="descricaoal"  placeholder="Descrição" class="{{ $errors->has('descricaoal') ? ' is-invalid' : '' }} form-control empty" name="descricaoal" value="{{ old('descricaoal') }}" required autofocus>
                                                        @if ($errors->has('descricaoal'))>
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('descricaoal') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                        <br><br><br>

                                                <h3>Doença:</h3>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <h5>
                                                            Psicologica:&nbsp;<input type="checkbox" name="doencap" id="doencap"  value="P" class="{{ $errors->has('doencap') ? ' is-invalid' : '' }} iconified empty" name="doencap" value="{{ old('doencap') }}"required>
                                                               @if ($errors->has('doencap'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('doencap') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>
     
                                                <br><br><br>

                                                <div class="col-md-7 col-sm-6">
                                                    <div class="form-group">
                                                        <textarea name="descricaop" type="text" rows="7" required="required" placeholder=" Descreva sobre a doença assinalada a cima."  id="descricaop" class="form-control empty iconified {{ $errors->has('descricaop') ? ' is-invalid' : '' }} iconified empty" name="descricaop" value="{{ old('descricaop') }}"required> </textarea>
                                                            @if ($errors->has('descricaop'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('descricaop') }}</strong>
                                                                </span>
                                                            @endif
                                                    </div>
                                                </div> 

                                                <br><br><br><br><br><br><br><br><br>

                                                <div class="col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <h5>
                                                            Física:&nbsp;<input type="checkbox" name="doencaf" id="doencaf"  value="P" class="{{ $errors->has('doencaf') ? ' is-invalid' : '' }} iconified empty" name="doencaf" value="{{ old('doencaf') }}"required>
                                                               @if ($errors->has('doencaf'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('doencaf') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>
     
                                                <br><br><br>

                                                <div class="col-md-7 col-sm-6">
                                                    <div class="form-group">
                                                        <textarea name="descricaof" type="text" rows="7" required="required" placeholder=" Descreva sobre a doença assinalada a cima."  id="descricaof" class="form-control empty iconified {{ $errors->has('descricaof') ? ' is-invalid' : '' }} iconified empty" name="descricaof" value="{{ old('descricaof') }}"required> </textarea>
                                                            @if ($errors->has('descricaof'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('descricaof') }}</strong>
                                                                </span>
                                                            @endif
                                                    </div>
                                                </div> 


                                                <br><br><br><br><br><br><br><br><br><br><br>
                                                    
                                                <h3>Remédios</h3>
                                                    <div class="col-md-7 col-sm-6">
                                                        <div class="form-group ">
                                                            <input  name="remedio" type="text"  id="remedio"  placeholder="Nome do Remédio" class="{{ $errors->has('remedio') ? ' is-invalid' : '' }} form-control empty" name="remedio" value="{{ old('remedio') }}" required autofocus>
                                                                @if ($errors->has('remedio'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('remedio') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>
                                                    <br><br><br>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group ">
                                                            <input  name="dosagem" type="text"  id="dosagem"  placeholder="Dosagem" class="{{ $errors->has('dosagem') ? ' is-invalid' : '' }} form-control empty" name="dosagem" value="{{ old('dosagem') }}" required autofocus>
                                                                @if ($errors->has('dosagem'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('dosagem') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="form-group ">
                                                            <input  name="horario" type="time"  id="horario"  placeholder="Horário" class="{{ $errors->has('horario') ? ' is-invalid' : '' }} form-control empty" name="horario" value="{{ old('horario') }}" required autofocus>
                                                                @if ($errors->has('horario'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('horario') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>
                                                                                                
                                                <br><br><br>
                                                    
                                                <h3>Para contato</h3>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group ">
                                                            <input  name="responsavel1" type="text"  id="responsavel1"  placeholder="Responsável" class="{{ $errors->has('responsavel1') ? ' is-invalid' : '' }} form-control empty" name="responsavel1" value="{{ old('responsavel1') }}" required autofocus>
                                                                @if ($errors->has('responsavel1'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('responsavel1') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="form-group ">
                                                            <input  name="telefone1" type="text"  id="telefone1"   maxlength="11" placeholder="Telefone" class="{{ $errors->has('telefone1') ? ' is-invalid' : '' }} form-control empty" name="telefone1" value="{{ old('telefone1') }}" required autofocus>
                                                                @if ($errors->has('telefone1'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('telefone1') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>
                                                   
                                                    <br><br><br>

                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="form-group">
                                                            <input  name="responsavel2" type="text"  id="responsavel2"  placeholder="Responsável" class="{{ $errors->has('responsavel2') ? ' is-invalid' : '' }} form-control empty" name="responsavel2" value="{{ old('responsavel2') }}" required autofocus>
                                                                @if ($errors->has('responsavel2'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('responsavel2') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input  name="telefone2" type="text"  id="telefone2"  placeholder="Telefone"  maxlength="11" class="{{ $errors->has('telefone2') ? ' is-invalid' : '' }} form-control empty" name="telefone2" value="{{ old('telefone2') }}" required autofocus>
                                                                @if ($errors->has('telefone2'))>
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('telefone2') }}</strong>
                                                                    </span>
                                                                @endif
                                                        </div>
                                                    </div>

                                                    <br><br><br>
                                                                                                        
                                                    <div class="col-md-2 col-sm-6">
                                                        <div class="form-group">
                                                            <input name="cep" type="text" id="cep" value="" size="10" maxlength="9" placeholder="CEP"
                                                                onblur="pesquisacep(this.value);"
                                                                class="{{ $errors->has('cep') ? ' is-invalid' : '' }} form-control empty iconified" name="cep" required />
                                                            @if ($errors->has('cep'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('cep') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                        <div class="col-md-5 col-sm-6">
                                                            <div class="form-group">
                                                                <input name="cidade" type="text" id="cidade" size="40"  placeholder=" Cidade" class="{{ $errors->has('cidade') ? ' is-invalid' : '' }} form-control empty iconified" name="cidade" required />
                                                                    @if ($errors->has('cidade'))
                                                                        <span class="invalid-feedback">
                                                                            <strong>{{ $errors->first('cidade') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>    

                                                        <br><br><br>

                                                        <div class="col-md-7 col-sm-6">
                                                            <div class="form-group">
                                                                <input name="rua" type="text" id="rua" size="60"placeholder=" Rua" class="{{ $errors->has('rua') ? ' is-invalid' : '' }} form-control empty iconified" name="rua" required />
                                                                    @if ($errors->has('rua'))
                                                                        <span class="invalid-feedback">
                                                                            <strong>{{ $errors->first('rua') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>        
                                                        </div>

                                                        <br><br><br>

                                                        <div class="col-md-7 col-sm-6">
                                                            <div class="form-group">
                                                                <input name="bairro" type="text" id="bairro" size="40" placeholder=" Bairro" class="{{ $errors->has('bairro') ? ' is-invalid' : '' }} form-control empty iconified" name="bairro" required />
                                                                    @if ($errors->has('bairro'))
                                                                        <span class="invalid-feedback">
                                                                            <strong>{{ $errors->first('bairro') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>        
                                                        </div>

                                                        <br><br><br>
                                                       
                                                        <div class="col-md-2 col-sm-6">
                                                            <div class="form-group">
                                                                <input name="uf" type="text" id="uf" size="6" placeholder=" Estado" class="{{ $errors->has('uf') ? ' is-invalid' : '' }} form-control empty iconified" name="uf" required />
                                                                    @if ($errors->has('uf'))
                                                                        <span class="invalid-feedback">
                                                                            <strong>{{ $errors->first('uf') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                        </div>    

                                                    <div class="col-md-5 col-md-offset-0 col-sm-1 col-sm-offset-1"> 
                                                        <div class="form-group"> 
                                                        <!-- image-preview-filename input [CUT FROM HERE]-->
                                                            <div class="input-group image-preview">
                                                                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                                                <span class="input-group-btn">
                                                                        <!-- image-preview-clear button -->
                                                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                                        <span class=""></span> Excluir
                                                                    </button>
                                                                <!-- image-preview-input -->
                                                                    <div class="btn btn-default image-preview-input">
                                                                        <span class=""></span>
                                                                            <span class="">Procurar</span>
                                                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="foto" id="foto" class="form-control empty iconified {{ $errors->has('foto') ? ' is-invalid' : '' }} iconified empty" name="foto" value="{{ old('foto') }}"required/> <!-- rename it -->
                                                                                    @if ($errors->has('foto'))
                                                                                        <span class="invalid-feedback">
                                                                                            <strong>{{ $errors->first('foto') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                    </div>
                                                                </span>
                                                            </div><!-- /input-group image-preview [TO HERE]--> 
                                                        </div>
                                                    </div>
                                                
                                                <br> <br><br>


                                            <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-3">
                                                <div class="text-center">
                                                    <input type="submit" id="submit" name="submit" class="btn btn-send" value="{{ __('Registrar') }}"/>
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