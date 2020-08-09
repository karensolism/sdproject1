<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="assets/css/font-awesome.min.css">
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         <link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
         <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800,900%7CSintony:400,700" rel="stylesheet">
         <link rel="stylesheet" href="assets/css/ion.rangeSlider.css" />
         <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css" />
         <link rel="stylesheet" href="assets/css/lightbox.css" />
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="assets/css/responsive.css">

        <title>SoloDesarrollos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- Header Start -->
        <header  class="first-header scroll">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="open-btn navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="icon-bar"></span>
                    </button>

                    <a class="logo" href="#">
                        <h1>SoloDesarrollos</h1>
                    </a>
                </div>
                <div class="collapse navbar-collapse nopad" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav text-uppercase font1">
                        <li>
                            <a href="/welcome">Página principal</a>                        
                        </li>
                        <li>
                            <a href="#">¿Quiénes somos?</a>                                     
                        </li>
                        <li>
                            <a href="login">Iniciar Sesión</a>                          
                        </li>
                        <li>
                            <a href="register">Registrate</a>                            
                        </li>
                        
                    </ul>
                </div>
              
                
                <div id="mySidenav" class="sidenav font1">
                    <div class="closebtn-wrapper">
                        <p class="closebtn">
                            <span></span>
                        </p>
                    </div>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">HOME <i class="fa fa-angle-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="index.html">home page V1</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="02-modernhaus-v2.html">home page V2</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="03-modernhaus-v3.html">home page V3</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="04-modernhaus-v4.html">home page V4</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="05-modernhaus-v5.html">home page V5</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">PAGES <i class="fa fa-angle-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="19-modernhaus-faq.html">faq's</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="25-modernhaus-404.html">404 error</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="log" data-toggle="modal" data-target="#login">login</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="16-modernhaus-about.html">about us page</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="15-modernhaus-pricing.html">pricing page</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">PROPERTIES <i class="fa fa-angle-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="06-modernhaus-properties-grid.html">properties gird</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="07-modernhaus-properties-list.html">properties list</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="08-modernhaus-properties-map.html">properties map</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="09-modernhaus-properties-grid-sidebar.html">properties grid sidebar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="10-modernhaus-properties-list-sidebar.html">properties list sidebar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="11-modernhaus-properties-single.html">properties single</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="12-modernhaus-properties-single-fullwidth.html">properties single fullwidth</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">BLOGS <i class="fa fa-angle-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="20-modernhaus-blog-grid.html">Blog Grid</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="21-modernhaus-blog-grid-sidebar.html">blog grid sidebar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="22-modernhaus-blog-list.html">blog list</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="23-modernhaus-blog-single.html">Blog Single Page</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">AGENTS <i class="fa fa-angle-down"></i></a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="13-modernhaus-agents.html">Our Agents</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="14-modernhaus-agents-single.html">Agents Single Page</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="17-modernhaus-contact.html">CONTACT</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>  
            </nav>
        </header>
    <!-- Heder End -->

    <!-- Banner Start -->
        <section class="banner-wrapper index">
            <ul class="banner-slider">
                <li>
                    <figure>
                        <img src="assets/images/home/home-page-banner.jpg.jpg" alt="">
                    </figure>
                    <div class="overlay"></div>
                </li>
                <li>
                    <figure>
                        <img src="assets/images/home/home-page-banner2.jpg" alt="">
                    </figure>
                    <div class="overlay"></div>
                </li>
                <li>
                    <figure>
                        <img src="assets/images/home/home-page-banner3.jpg" alt="">
                    </figure>
                    <div class="overlay"></div>
                </li>
                
            </ul>

            <div class="banner-text text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                            <div class="search">

                                <!--div class="col-md-2 col-sm-4 col-xs-4 nopad padding">
                                    <select>
                                        <option value="Propety Type">Tipo de inmueble</option>
                                        <option value="Option 2">Option 2</option>
                                        <option value="Option 3">Option 3</option>
                                        <option value="Option 4">Option 4</option>
                                        <option value="Option 5">Option 5</option>
                                    </select>
                                </div-->

                                <div class="col-md-10 col-sm-10 col-xs-10 nopad padding">                              
                                    <input type="text" id="barra-busqueda"  placeholder="Buscar por ubicación / zona " name="barra-busqueda">
                                </div>
                             

                                <div class="col-md-2 col-sm-4 col-xs-4 nopad padding">
                                    <button type="button" class="btn-1 bg1">
                                        <span><i class="fa fa-search"></i> Buscar</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Banner End -->

    <!-- Featured Properties Start -->
            <section class="featured-properties-wrapper index section-padding text-center">
                <div class="container">
                    <h2 class="main-title text-center">Inmuebles destacados</h2>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-xs-12">
                            <div class="tab-box">
                                <div class="border"></div>
                                <ul class="nav-tabs text-uppercase font1">
                                    <li class="active"><a data-toggle="tab" href="#first">Residencial</a></li>
                                    <li><a data-toggle="tab" href="#second">Commercial</a></li>
                                </ul>

                                <div class="tab-content">
                                     <!--imagen-->
                                    <div id="first" class="tab-pane fade in active">
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                  <!--imagen-->
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="rent bg1">rent</span>
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                               <!--descripcion de la imagen-->
                                                <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="sale bg2">sale</span>
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                    </div> 
                                    <div id="second" class="tab-pane fade">
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <div class="featured-properties text-left">
                                                <figure class="featured-image">    
                                                    <a href="#">
                                                        <img src="assets/images/home/featured-properties-1.jpg" alt="">
                                                        <span class="overlay-1"></span>
                                                    </a>
                                                    <figcaption>
                                                        <span>5 Beds</span>
                                                        <span>3 Baths</span>
                                                        <span>300 Sq Ft</span>
                                                        <span>1 Parking</span>
                                                    </figcaption>
                                                </figure>
                                                    <h5><a href="#">4 bedroom penthouse for sale</a></h5>
                                                <span>Moore Lane, London, EC2Y</span>
                                                <span class="price">£13,500,000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn-1 text-uppercase">
                                <span>view all residential properties</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
    <!-- Featured Properties End -->

 <!-- Quick Links Tab start --> <!--Seccion importante para poder ver el pie de página -->
           <section class="ouick-links-wrapper reveal index section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                  
                    </div>
                </div>
            </div>
        </section>
    <!-- Quick Links Tab End -->
    
    <!-- Footer Start -->
        <footer>
            <div class="container">
                <div class="footer-wrapper section-padding">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <a href="#" class="footer-logo">

                                <img src="assets/images/home/logo.jpg" alt="">
                            </a>
                            <p>Calle 22 #298 por 19 Y 21 Fracc. MONTEBELLO C.P.97113 Tel.9993344539
                            </p>
                            <ul class="social-icons text-center">
                                <li class="facebook">
                                    <a href="https://web.facebook.com/bi07bienesraices?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <p class="copyright text-center"><i class="fa fa-copyright"></i> 2020</p>
            </div>
        </footer>
    <!-- Footer End -->

    <!--Login Modal Start -->
        <section class="login-modal">
            <div class="container">
                <!-- Modal -->
                <div class="modal fade" id="login" role="dialog">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <a href="#" class="modal-close" data-dismiss="modal">
                                <span></span>
                                <span></span>
                            </a>
                            <div class="login-wrapper">
                                <div class="modal-header">
                                    <h2 class="text-center text-uppercase">Welcome Back</h2>
                                    <div class="dis-title text-center">
                                        <p>Log in to your account to see the most homes and enjoy the full experience.</p>
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                    <input type="text" name="name" placeholder="Username">
                                    <input type="password" name="password" placeholder="Password">
                                    <button class="btn-1">
                                        <span>Log in</span>
                                    </button>
                                    <a href="#" class="forget-pass link" data-target="#recover">forgot password</a>
                                    <p class="or">OR</p>
                                    <button class="fb btn-1">
                                        <span>log in with facebook</span>
                                    </button>
                                    <div class="new-to">
                                        <p>New to ModernHaus? <a href="#" class="link new-account" data-target="#create-account">Create a account</a></p>
                                    </div>
                                </div>
                            </div>

                            <div id="recover" class="forgot-password hide">
                                <div class="modal-header">
                                    <h2 class="text-center text-uppercase">Forgot Password</h2>
                                    <div class="dis-title text-center">
                                        <p>Enter your email address below to recover your password.</p>
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                    <input type="text" name="name" placeholder="Email Address">
                                    <button class="btn-1">
                                        <span>recover password</span>
                                    </button>
                                </div>
                            </div>

                            <div id="create-account" class="create-new-account hide">
                                <div class="modal-header">
                                    <h2 class="text-center text-uppercase">Welcome</h2>
                                    <div class="dis-title text-center">
                                        <p>Create an account to be able to use all facilities we have for you.</p>
                                    </div>
                                </div>
                                <div class="modal-body text-center">
                                    <input type="text" name="name" placeholder="First Name *">
                                    <input type="text" name="name" placeholder="Last Name *">
                                    <input type="email" name="email" placeholder="Email Address *">
                                    <input type="tel" name="phone" placeholder="Phone*">
                                    <input type="password" name="password" placeholder="Password">
                                    <input type="password" name="password" placeholder="Confirm Password">
                                    <button class="btn-1">
                                        <span>create an account</span>
                                    </button>
                                    <p class="or">OR</p>
                                    <button class="fb btn-1">
                                        <span>log in with facebook</span>
                                    </button>
                                    <div class="new-to">
                                        <p>Have an account? <a href="#" class="link log">Log In </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Login Modal End -->
<script
  src="https://code.jquery.com/jquery-1.12.0.min.js"
  integrity="sha256-Xxq2X+KtazgaGuA2cWR1v3jJsuMJUozyIXDB3e793L8="
  crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/ion.rangeSlider.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/custom.js"></script>
    </body>
</html>
