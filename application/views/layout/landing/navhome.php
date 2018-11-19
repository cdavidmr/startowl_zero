<!--============================= NAV MENU =============================-->
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html"><img src="/resources/img/ico/favicon.png" alt="">StartOwl</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-menu"></span>
              </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Ayuda
                     <span class="icon-arrow-down"></span>
                   </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Como Funciona</a>
                                            <a class="dropdown-item" href="#">Beneficios</a>
                                            <a class="dropdown-item" href="#">Responsabilidades</a>
                                            <a class="dropdown-item" href="#">Acuerdos</a>
                                            <a class="dropdown-item" href="#">Marco Legal</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Crecimiento
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">Mentores</a>
                                            <a class="dropdown-item" href="#">Tutoriales</a>
                                            <a class="dropdown-item" href="#">Proveedores</a>
                                            <a class="dropdown-item" href="#">Inversionistas</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Contáctanos
                    <span class="icon-arrow-down"></span>
                  </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="#">
                                                <a href="#"><span class="ti-facebook"></span>  Facebook</a>
                                            </a>
                                            
                                            <a class="dropdown-item" href="#">
                                                <a href="#"><span class="ti-twitter-alt"></span>  Twiter</a>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <a href="#"><span class="ti-instagram"></span>  instagram</a>
                                            </a>
                                            
                                            <a class="dropdown-item" href="#">Soporte 24/7</a>
                                            <a class="dropdown-item" href="#">contacto@startowl.net</a>
                                        </div>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Quienes Somos</a>
                                    </li>
                                   
                                    <li class="nav-item"><a href="<?php echo base_url(); ?>cloreg/login" class="btn btn-outline-light top-btn" ><span class=""></span> Ingresar </a></li>                                 
                                    <li class="nav-item"><a href="<?php echo base_url(); ?>cloreg/register" class="btn btn-outline-light top-btn" ><span class=""></span> Registrarse </a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Quieres emprender tu idea de negocio en otro país?</h1>
                                    <h5>Cuentanos de que se trata y te contactaremos con personas del pais de tu interes.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form action="<?php echo base_url(); ?>cloreg/register" class="form-wrap mt-4">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="Categoria de tu idea de Negocio?" class="btn-group1">                                       
                                        <input id="myInput" type="text" name="myCountry" class="btn-group1" placeholder="País que quieres Emprender...">                                   
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>BUSCAR<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <script type="text/javascript" src="/resources/js/paiseshomepage.js"></script>
                                <div class="slider-link">
                                    <a href="#">Negocios Populares</a><span></span> <a href="#">Agregados Recientemente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
    <!--//END HEADER -->