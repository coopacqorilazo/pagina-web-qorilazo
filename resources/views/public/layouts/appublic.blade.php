<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coopac Qorilazo</title>
    <meta name="description" content="Miatecy es una empresa dedicada al desarrollo de paginas web, sofware a medida, etc">
    <meta name="keywords" content="pagina web, sitio web, sofware, desarrollo de sofware">

    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/static/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/menus.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/banner.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/productos.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/car.css')}}">
    <!--sobrenosotros-->
    <link rel="stylesheet" href="{{asset('css/static/costumsotfware.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/cardimg.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/css_productos_activos.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/form.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/reclamos.css')}}">
    <link rel="stylesheet" href="{{asset('css/static/two-card.css')}}">
    <!--#################-->
    <link rel="stylesheet" href="{{asset('css/static/footer.css')}}">
</head>

<nav class="menu" id="menu">
    <!--menu superior-->
    <div class="contenedor contenedor-menu-superior">
        <div class="contenedor-enlaces-basico">
            <a href="https://www.cacqorilazo.com/webmail/" target="-blank" class="link-a">Correo corporativo</a>
            <a href="#" class="link-a">Aula virtual</a>
            <a href="#" class="link-a">Ayuda</a>
        </div>
    </div>

    <div class="contenedor contenedor-enlaces-nav" id="enlacesNav">
        <!--Contenedro del logo-->
        <a class="logo lh-brand span-2" href="#">
            <img src= "{{asset('storage/images/logo.png')}}" alt="">
        </a>
        <!--Contenedro de los link-->
        <div class="lh-menu span-7" id="linkMenu">
            <div class="nav-link" id="" data-super="nosotros">
                <p class="fs1-5em link" data-super="nosotros">Nosotros</p>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="nav-link" id="" data-super="productos">
                <p class="fs1-5em link" data-super="productos">Productos</p>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="nav-link span-2" id="" data-super="ayuda">
                <p class="fs1-5em link" data-super="ayuda">Ayuda y contacto</p>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="nav-link" id="" data-super="promociones">
                <p class="fs1-5em link" data-super="promociones">Promociones</p>
                <i class="fas fa-caret-down"></i>
            </div>
            <div class="nav-link span-2" id="" data-super="agencia">
                <p class="fs1-5em link" data-super="agencia">Agencias</p>
                <i class="fas fa-caret-down"></i>
            </div>
        </div>
        <!--Contendor de un botonn-->

        <!--Contendor de un botonn-->
        <div class="container-button text-align-end span-2-u span-3" id="btnLinks">
            <p class="text-dark btn btn-warning">Asociarse</p>
            <p class="text-dark btn btn-warning">Tramites</p>
        </div>
        <!--Contendor de los butones para movil-->
        <div class="contenedor-botones-menu right-buttons">
            <button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
            <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
        </div>

    </div>
    <div class="container-submenus" id="subMenu">
        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias before-two" data-super="productos">
                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Atras</button>
                    <h3 class="subtitulo">Productos</h3>
                    <a href="#" data-categoria="cuentas" data-content="productos">
                        <img src= "{{asset('storage/images/pay.svg')}}" alt="">
                        <span data-categoria="cuentas" data-content="productos">Cuentas de ahorro</span>
                    </a>
                    <a href="#" data-categoria="prestamos-y-creditos" data-content="productos">
                        <img src="{{asset('storage/images/money.svg')}}"  alt="">
                        <span data-categoria="prestamos-y-creditos" data-content="productos">Prestamos y Créditos</span>
                    </a>
                    <a href="#" data-categoria="inversiones" data-content="productos">
                        <img src= "{{asset('storage/images/graphic.svg')}}" alt="">
                        <span data-categoria="inversiones" data-content="productos">Inversiones</span>
                    </a>
                    <a href="#" data-categoria="seguros" data-content="productos">
                        <img src="{{asset('storage/images/hand.svg')}}"  alt="">
                        <span data-categoria="seguros" data-content="productos">Seguros</span>
                    </a>
                    <a href="#" data-categoria="envio-dinero" data-content="productos">
                        <img src="{{asset('storage/images/send.svg')}}" alt="">
                        <span data-categoria="envio-dinero" data-content="productos">Envió y recepción dinero</span>
                    </a>
                    <a href="#" data-categoria="servicios" data-content="productos">
                        <img src="{{asset('storage/images/customer-service-agent.svg')}}" alt="">
                        <span data-categoria="servicios" data-content="productos">Servicios</span>
                    </a>
                </div>

                <div class="contenedor-subcategorias" data-content="productos">
                    <!--Cuentas-->
                    <div class="subcategoria" data-categoria="cuentas">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Atras</button>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Cuentas de ahorro</h3>
                            <a href="cuentasimple">Cuenta simple</a>
                            <a href="cuentacero">Cuenta cero</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Depósitos a Plazo Fijo</h3>
                            <a href="dpf">DPF Clasica</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Beneficios</h3>
                            <a href="#">Mantenimiento cero.</a>
                            <a href="#">Retiro en toda nuestras agencias.</a>
                        </div>
                        <div class="footer-subcategoria span-3">
                            <a href="#">Ver todos</a>
                            <!--<a href="#">Ver todos</a>
								<a href="#">Ver todos</a>-->
                        </div>

                        <div class="galeria-subcategoria span-1-u span-r-2">
                            <div>
                                <p class="text-md text-orange">Una cuenta simple para ahorrar</p><br>
                                <a href="formulario" class="btn btn-success">
                                    SOLICÍTALO
                                </a>
                                <a href="#">
                                    <img src="{{asset('storage/images/prestamos-creditos.svg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--Prestamos-->
                    <div class="subcategoria" data-categoria="prestamos-y-creditos">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Atras</button>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Prestamos personales</h3>
                            <a href="consumo">Credito consumo</a>
                            <a href="qorioficios">Qorioficios</a>
                            <a href="rapiflash">Rapiflash</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Crédito para tu negocio</h3>
                            <a href="credinegocio">Credinegocio</a>
                            <a href="credidiario">Credidiario</a>
                            <a href="crediagropecuario">Crediagropecuario</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Créditos grupales</h3>
                            <a href="qoribanquito">Qoribanquito</a>
                        </div>
                        <div class="footer-subcategoria span-3">
                            <a href="#">Ver todos</a>
                        </div>

                        <div class="galeria-subcategoria span-1-u span-r-2">
                            <div>
                                <p class="text-md text-orange">Un préstamo para lo que necesites</p><br>
                                <a href="formulario" class="btn btn-success">
                                    SOLICÍTALO
                                </a>
                                <a href="#">
                                    <img src="{{asset('storage/images/prestamos-creditos.svg')}}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                    <!--Inversiones-->
                    <div class="subcategoria" data-categoria="inversiones">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Atras</button>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Inversiones.</h3>
                            <a href="ahorroprogramado">Ahorro programado.</a>
                            <a href="dpf">DPF Clasica</a>
                        </div>

                        <div class="footer-subcategoria span-3">
                            <a href="#">Ver todos</a>
                        </div>

                        <div class="galeria-subcategoria span-1-u span-r-2">
                            <div>
                                <p class="text-md text-orange">Un préstamo para lo que necesites</p><br>
                                <a href="formulario" class="btn btn-success">
                                    SOLICÍTALO
                                </a>
                                <a href="#">
                                    <img src= "{{asset('storage/images/pay.svg')}}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--CONTENER GRID NOSOTROS-->
        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias before-one" data-super="nosotros">
                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
                    <h3 class="subtitulo">Sobre Nosotros</h3>


                    <a href="#" data-categoria="gobierno-corporativo" data-content="nosotros">
                        <img src="{{asset('storage/images/pay.svg')}}" alt="">
                        <span data-content="nosotros">Gobierno corporativo</span>
                    </a>
                    <a href="#" data-categoria="negocio" data-content="nosotros">
                        <img src= "{{asset('storage/images/money.svg')}}" alt="">
                        <span data-content="nosotros">Negocio</span>
                    </a>
                </div>
                <div class="contenedor-subcategorias" data-content="nosotros">
                    <div class="subcategoria" data-categoria="gobierno-corporativo">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Gobierno Corporativo</h3>
                            <a href="#">Memoria anual</a>
                            <a href="#">Estados financieros</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Tarifario</h3>
                            <a href="#">Tarifario de tasas activas</a>
                            <a href="#">Tarifario de tasas pasivas</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Beneficios</h3>
                            <a href="#">Mantenimiento cero</a>

                        </div>
                        <div class="footer-subcategoria span-3">
                            <a href="#">Ver todos</a>                            
                        </div>
                        <div class="galeria-subcategoria span-1-u span-r-2">
                            <div>
                                <p class="text-md text-orange">Un préstamo para lo que necesites</p><br>
                                <a href="#" class="btn btn-success">
                                    SOLICÍTALO
                                </a>
                                <a href="#">
                                    <img src="{{asset('storage/images/pay.svg')}}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="subcategoria" data-categoria="negocio">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Sobre nosotros</h3>
                            <a href="sobrenosotros">Quienes somos</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Nuestros locales</h3>
                            <a href="agencias">Locales en arequipa</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Beneficios</h3>
                            <a href="#">Locales cerca a ud.</a>

                        </div>
                        <div class="footer-subcategoria span-3">
                            <a href="#">Ver todos</a>
                        </div>

                        <div class="galeria-subcategoria span-1-u span-r-2">
                            <div>
                                <p class="text-md text-orange">Un préstamo para lo que necesites</p><br>
                                <a href="#" class="btn btn-success">
                                    SOLICÍTALO
                                </a>
                                <a href="#">
                                    <img src= "{{asset('storage/images/pay.svg')}}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN CONTENER GRID AHORROS-->

        <div class="contenedor contenedor-grid">
            <div class="grid" id="grid">
                <div class="categorias before-three" data-super="ayuda">
                    <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Atras</button>
                    <h3 class="subtitulo">Ayuda y contacto</h3>

                    <a href="agencias" data-categoria="agencias" data-content="ayuda">
                        <img src= "{{asset('storage/images/pay.svg')}}" alt="">
                        <span data-content="ayuda">Agencias.</span>
                    </a>
                    <a href="reclamos" target="_blank" data-categoria="reclamos" data-content="ayuda">
                        <img src="{{asset('storage/images/money.svg')}}" alt="">
                        <span data-content="ayuda">Libro de reclamaciones.</span>
                    </a>
                    <a href="https://wa.me/998858509?text=Me%20interesa%20contactarme%20con%20ustedes" target="_blank" data-categoria="whatsapp" data-content="ayuda">
                        <img src="{{asset('storage/images/pay.svg')}}" alt="">
                        <span data-content="ayuda">Whatsapp</span>
                    </a>
                </div>
                <div class="contenedor-subcategorias" data-content="ayuda">
                    <div class="subcategoria" data-categoria="agencias">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Atras</button>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Cusco</h3>
                            <a href="#">Ag. Santo Tomas</a>
                            <a href="#">Ag. Velille</a>
                            <a href="#">Ag. Anta</a>
                            <a href="#">Ag. Urubamba</a>
                            <a href="#">Ag. San Sebastian</a>
                            <a href="#">OAS Pulpera</a>
                            <a href="#">Ag. Livitaca</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Arequipa</h3>
                            <a href="#">Ag. Cerro Colorado</a>
                            <a href="#">Ag. Pedregal</a>
                            <a href="#">Ag. La Joya</a>
                            <a href="#">OAS La Negrita</a>
                            <a href="#">OAS La Pampilla.</a>
                        </div>
                        <div class="enlaces-subcategoria span-1">
                            <h3 class="subtitulo">Ica y Apurimac</h3>
                            <a href="#">Ag. Marcona</a>
                            <a href="#">Ag. Abancay</a>
                        </div>
                        <div class="footer-subcategoria span-3">
                            <a href="#">Ver todos</a>
                        </div>
                        <div class="galeria-subcategoria span-1-u span-r-2">
                            <div>
                                <p class="text-md text-orange">Un préstamo para lo que necesites</p><br>
                                <a href="#" class="btn btn-success">
                                    SOLICÍTALO
                                </a>
                                <a href="#">
                                    <img src="{{asset('storage/images/pay.svg')}}" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN CONTENER GRID AYUDA-->
    </div>
</nav>







@yield('contenido')



<footer class="footer">
    <div class="container">
        <div class="linea_superior">
        </div>
        <div class="row col-md-12">
            <div id="col_1 " class="span-3 column" index="1">
                <div class="text-orange text-tit">
                    Acerca de nosotros
                </div>
                <div class="opciones">
                    <div>
                        <p dir="ltr"><a href="" target="" title="">¿Cómo protegemos
                                tus datos?</a></p>

                        <p dir="ltr"><a href="">Tasas y tarifas</a>
                        </p>

                        <p dir="ltr"><a href="">Nuestra historia y principios</a></p>

                        <p dir="ltr"><a href="">Transparencia de información</a>
                        </p>


                        <p dir="ltr"><a href="">Labor&nbsp;social&nbsp;</a></p>

                        <p dir="ltr"><a href="" target="_blank">ABC del Cooperativismo</a></p>

                        <p dir="ltr"><a href="" target="_blank">Declaración del&nbsp;Beneficiario final</a></p>

                    </div>
                </div>
            </div>
            <div id="col_2 " class="span-3 column" index="2">
                <div class="text-orange text-tit">
                    Otros servicios

                </div>
                <div class="opciones">
                    <div>
                        <p dir="ltr"><a href="">Trabaja con nosotros</a></p>

                        <p dir="ltr"><a href="" target="_blank">Actualiza tus
                                datos</a></p>

                        <p dir="ltr"><a href="" target="_blank">Protocolo de Bioseguridad</a></p>

                    </div>
                </div>
            </div>
            <div id="col_3 " class="span-3 column" index="3">
                <div class="text-orange text-tit">
                    Contacto
                </div>

                <div class="opciones">
                    <div>
                        <p dir="ltr"><a href="" target="_blank">Nuestras Agencias</a>
                        </p>

                        <p dir="ltr">consultasqorilazo@cacqorilazo.com</p>

                        <p dir="ltr">reclamos@cacqorilazo.com</p>

                    </div>
                    <div>
                        <p dir="ltr" class="banca_telefono">
                            Banca por teléfono:
                        </p>
                        <p dir="ltr" class="nro_banca_telefono">
                            <a href="tel:(01) 311-9898" target="" title="">
                                (01) 311-9898
                            </a>
                        </p>
                    </div>
                    <div class="redes_sociales">
                        <div class="bcp_titulo_redes_sociales">
                            Redes Sociales
                        </div>

                        <div class="acceso_redes_sociales">
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grupo_imagenes span-3">
                <a href="#">
                    <img src= "{{asset('storage/images/pay.svg')}}" alt="" class="img-full-cont">
                </a>
                <a href="#">
                    <img src="{{asset('storage/images/pay.svg')}}" alt="" class="img-full-cont">
                </a>
                <a href="#">
                    <img src="{{asset('storage/images/pay.svg')}}" alt="" class="img-full-cont">
                </a>
            </div>


        </div>




    </div>
    <div class="container-fluid derecho_reservado_fluid">

        <div class="row">
            <div class="derecho_reservado">
                2020 COOPAC QORILAZO Todos los derechos reservados, Cusco - Perú.
            </div>
        </div>

    </div>

</footer>

<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
<script src= "{{asset('js/main.js')}}"></script>
<script src= "{{asset('js/main_p.js')}}"></script>
<script src= "{{asset('js/jstab.js')}}"></script>