@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        		<li><a
                    href="{{url('news')}}"><span>N</span><span>O</span><span>U</span><span>T</span><span>Ă</span><span>Ț</span><span>I</span></a>
        </li>
		<li><a href="{{url('index')}}"
               class="link link--yaku"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a></li>
        <li><a href="{{url('search')}}"
               class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
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
        <li class="active"><a href="{{url('contacts')}}"
            ><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span><span>E</span></a>
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
        <h3 class="titleBody text-center">Contactează<span>-ne</span></h3>
        <div class="contact-info">
            <div class="col-md-8 contact-grids">
                <h5 class="titleBody" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">Dacă ai ceva întrebări sau ești cointeresat...</h5>
                <p>Simte-te liber să ne scrii oricând dorești!</p>
                <div class="contact-form">
                    <h3 class="title1">Scrie-ne aici</h3>
                    <form method="post" action="{{url('/article_request')}}" enctype="multipart/form-data">
                        <input required type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" name="sender" class="article" placeholder="Numele, Prenumele" required="">
                        <input type="text" name="replyToEmail" class="article" placeholder="Email" required="">
                        <input type="text" name="subject" class="article" placeholder="Subiectul" required="">
                        <textarea class="article" name="messageBody" placeholder="Mesajul" required=""></textarea>
                        <div class="clearfix"></div>

            <span class="file-input btn btn-primary btn-file">
                Încarcă fișier&hellip; <input type="file" name="file">
            </span>
                        <input type="submit" value="Trimite">

                    </form>
                </div>
            </div>
            <div class="col-md-4 contact-grids">
                <div class="cnt-address">
                    <h3 class="title1">Adrese</h3>
                    <h4>Ne găsești pe</h4>
                    <p>str. Burebista 93
                        <span>Chișinău, Republica Moldova</span>
                    </p>
                    <h4>Contactează-ne</h4>
                    <p>Telefon: 069241779
                        <br>E-mail: <a href="mailto:ao.sncp.rm@gmail.com">ao.sncp.rm@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!--//about-->
@include('layout.footer')
@include('layout.copyright')
</body>

</html>