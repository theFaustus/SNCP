@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="{{url('index')}}" class="link link--yaku"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a></li>
        <li><a href="{{url('search')}}"
               class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
        </li>
        <li><a href="{{url('list')}}"
               class="link link--yaku"><span>L</span><span>I</span><span>S</span><span>T</span><span>A</span>
                <span>L</span><span>U</span><span>C</span><span>R</span><span>Ă</span><span>R</span><span>I</span></a>
        </li>
        <li  class="active"><a href="{{url('about')}}"
               ><span>D</span><span>E</span><span>S</span><span>P</span><span>R</span><span>E</span></a>
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
<!--about-->
<div class="about">
    <div class="container">
        <h3 class="titleBody text-center">Despre <span>noi</span></h3>
        <div class="about-info">
            <div class="col-md-12 about-grids grid-top">
                <h4></h4>
                <p class="top">Publicaţia Periodică «Arta Medica» (înregistrată la Ministerul Justiţiei al Republicii Moldova sub Nr 123) este orientată spre publicarea editorialelor, lucrărilor originale, referatelor generale, studiilor de cazuri clinice, recenziilor de cărţi şi reviste, referatelor din literatura de specialitate, corespondenţelor, informaţiilor medicale şi se desfăşoară după principiul autofinanţării şi recuperării.</p>
                <p>Revista on-line este fondată de către Publicaţia Periodică «Arta Medica» şi actualmente apare cu suportul Întreprinderii de Stat MoldData</p>

                <table width="70%" border="0" align="center">
                    <tr>
                        <td colspan="2"><p align="center">Redactor şef:<br>
                                <strong>Vladimir HOTINEANU</strong><br>
                                Director publicaţie:<br>
                                <strong>Oleg CONŢU</strong><br>
                                Redactor coordonator:<br>
                                <strong>Alexandru FERDOHLEB</strong><br>
                                Secretar de redacţie:<br>
                                <strong>Eduard BERNAZ</strong><br>
                                Redactor versiune on-line:<br>
                                <strong>Igor ŞTEFANEŢ</strong></p></td>
                    </tr>
                   
                </table>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//about-->
@include('layout.footer')
@include('layout.copyright')
</body>

</html>