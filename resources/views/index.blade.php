@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li class="active"><a
                    href="{{url('index')}}"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a>
        </li>

        <li><a href="{{url('search')}}" class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
        </li>
        <li><a href="{{url('list')}}"
               class="link link--yaku"><span>L</span><span>I</span><span>S</span><span>T</span><span>A</span>
                <span>L</span><span>U</span><span>C</span><span>R</span><span>Ă</span><span>R</span><span>I</span></a>
        </li>
        <li><a href="{{url('about')}}"
               class="link link--yaku"><span>D</span><span>E</span><span>S</span><span>P</span><span>R</span><span>E</span></a>
        </li>
        <!-- <li><a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>G</span><span>A</span><span>L</span><span>E</span><span>R</span><span>I</span><span>I</span><span class="caret"></span></a>
             <ul class="dropdown-menu">
                 <li><a class="hvr-bounce-to-bottom" href="gallery.php">Gallery1</a></li>
                 <li><a class="hvr-bounce-to-bottom" href="gallery.php">Gallery2</a></li>
                 <li><a class="hvr-bounce-to-bottom" href="gallery.php">Gallery3</a></li>
             </ul>
         </li>-->
        <li><a href="{{url('contacts')}}"
               class="link link--yaku"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>E</span></a>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</div>
</nav>
</div>

<div class="banner">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner-info">
                            <h2>Suntem medici bravo!</h2>
                            <p>Da chiar suntem</p>
                            <a href="{{url('about')}}" class="effect6">Află mai multe...</a>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h2>Suntem medici deștepți!</h2>
                            <p>Fără nici o întrebare...</p>
                            <a href="{{url('about')}}" class="effect6">Află mai multe...</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- FlexSlider -->
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide"
                , start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //FlexSlider -->
</div>
<div class="general">
    <div class="col-md-3 about-grids">
        <div class="offic-time">
            <div class="time-top">
                <h4>Orele de lucru :</h4>
            </div>
            <div class="time-bottom">
                <h5>Luni-Vineri:10am-9pm </h5>
                <h5>Sambata-Duminica:11am-4pm</h5>
                <p>Suntem mereu la dispoziția dumnevoastră. </p>
            </div>
        </div>
    </div>
</div>
<div class="general">
    <div class="col-md-9 about-grids">
        <div class="publication">
            <div class="publication-top">
                <h4>Tema : Larafanirocodia interno-stricto faranisolacciuclara in varsta aploserenica</h4>
            </div>
            <div class="publication-bottom">
                <h5>Autor : Huan Pablo de Estebalde </h5>
                <h5>Data : 15985 înaintea erei noastre</h5>
                <div class="icon">
                    <a href="#" class="glyphicon glyphicon-print" aria-hidden="true">
                    </a>
                </div>
                <p>Am studiat această problemă detâta că e bine să știi să studiezi această problemă care am studiat-o
                    detâta că e bine să știi să studiezi această problemă care am studiat-o detâta că e bine să știi să
                    studiezi această problemă care am studiat-o</p>

            </div>

        </div>
        <div class="publication">
            <div class="publication-top">
                <h4>Tema : Larafanirocodia interno-stricto faranisolacciuclara in varsta aploserenica</h4>
            </div>
            <div class="publication-bottom">
                <h5>Autor : Huan Pablo de Estebalde </h5>
                <h5>Data : 15985 înaintea erei noastre</h5>
                <div class="icon">
                    <a href="#" class="glyphicon glyphicon-print" aria-hidden="true">
                    </a>
                </div>
                <p>Am studiat această problemă detâta că e bine să știi să studiezi această problemă care am studiat-o
                    detâta că e bine să știi să studiezi această problemă care am studiat-o detâta că e bine să știi să
                    studiezi această problemă care am studiat-o</p>
            </div>
        </div>
        <div class="publication">
            <div class="publication-top">
                <h4>Tema : Larafanirocodia interno-stricto faranisolacciuclara in varsta aploserenica</h4>
            </div>
            <div class="publication-bottom">
                <h5>Autor : Huan Pablo de Estebalde </h5>
                <h5>Data : 15985 înaintea erei noastre</h5>
                <div class="icon">
                    <a href="#" class="glyphicon glyphicon-print" aria-hidden="true">
                    </a>
                </div>
                <p>Am studiat această problemă detâta că e bine să știi să studiezi această problemă care am studiat-o
                    detâta că e bine să știi să studiezi această problemă care am studiat-o detâta că e bine să știi să
                    studiezi această problemă care am studiat-o</p>
            </div>
        </div>
        <div class="publication">
            <div class="publication-top">
                <h4>Tema : Larafanirocodia interno-stricto faranisolacciuclara in varsta aploserenica</h4>
            </div>
            <div class="publication-bottom">
                <h5>Autor : Huan Pablo de Estebalde </h5>
                <h5>Data : 15985 înaintea erei noastre</h5>
                <div class="icon">
                    <a href="#" class="glyphicon glyphicon-print" aria-hidden="true">
                    </a>
                </div>
                <p>Am studiat această problemă detâta că e bine să știi să studiezi această problemă care am studiat-o
                    detâta că e bine să știi să studiezi această problemă care am studiat-o detâta că e bine să știi să
                    studiezi această problemă care am studiat-o</p>
            </div>
        </div>
        <div class="publication">
            <div class="publication-top">
                <h4>Tema : Larafanirocodia interno-stricto faranisolacciuclara in varsta aploserenica</h4>
            </div>
            <div class="publication-bottom">
                <h5>Autor : Huan Pablo de Estebalde </h5>
                <h5>Data : 15985 înaintea erei noastre</h5>
                <div class="icon">
                    <a href="#" class="glyphicon glyphicon-print" aria-hidden="true">
                    </a>
                </div>
                <p>Am studiat această problemă detâta că e bine să știi să studiezi această problemă care am studiat-o
                    detâta că e bine să știi să studiezi această problemă care am studiat-o detâta că e bine să știi să
                    studiezi această problemă care am studiat-o</p>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>

<div class="general">
    <div class="projects">
        <div class="container">
            <div class="col-md-3 project-right ">
                <h3 class="title">Partenerii <span> Noștri</span></h3>
                <p>Ei sunt mereu alături de noi .</p>
            </div>
            <div class="col-md-9 project-left">
                <!-- flex-slider -->
                <div class="work-bottom">
                    <div class="nbs-flexisel-container">
                        <div class="nbs-flexisel-inner">
                            <ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <img src="{{asset('images/img1.jpg')}}" alt="">
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <img src="{{asset('images/img2.jpg')}}" alt="">
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <img src="{{asset('images/img3.jpg')}}" alt="">
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 285px;">
                                    <div class="project-grids">
                                        <img src="{{asset('images/img4.jpg')}}" alt="">
                                        <div class="team-bottom">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="nbs-flexisel-nav-left" style="top: 138px;"></div>
                            <div class="nbs-flexisel-nav-right" style="top: 138px;"></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4
                                , animationSpeed: 1000
                                , autoPlay: true
                                , autoPlaySpeed: 3000
                                , pauseOnHover: true
                                , enableResponsiveBreakpoints: true
                                , responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480
                                        , visibleItems: 2
                                    }
                                    , landscape: {
                                        changePoint: 640
                                        , visibleItems: 3
                                    }
                                    , tablet: {
                                        changePoint: 768
                                        , visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
                    <!-- //flex-slider -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@include('layout.footer')
@include('layout.copyright')
</body>

</html>