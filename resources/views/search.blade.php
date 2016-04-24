@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="{{url('index')}}"
               class="link link--yaku"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a></li>
        <li class="active"><a href="{{url('search')}}"
            ><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
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

<div class="row" style="margin-left: 50px; margin-right: 50px;">
    <h3 class="titleBody text-center">Caută prin <span>lucrările</span> existente</h3>

    <input class='form-control' type="text" name='search' id='search' placeholder='Scrie aici...'>
    <div class="form-group">
        <br>
        <label style="margin-bottom: 10px;" class="col-md-2 control-label">Criterii de căutare</label>
        <div class="col-md-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Alege criteriu</option>
                <option value="author">Autori</option>
                <option value="title">Titlu</option>
                <option value="year">An</option>
                <option value="edition">Ediție</option>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="form-group">
        <br>
        <label style="margin-bottom: 10px;" class="col-md-2 control-label">Mod de căutare</label>
        <div class="col-md-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Alege mod</option>
                <option value="and">ȘI</option>
                <option value="or">SAU</option>
            </select>
        </div>
    </div>

    <br>
    <br>


    <div class="publicationTitle">
        <div class="publicationTitle-top">
            <h4>Numărul, 2015</h4>
        </div>
    </div>
    <div class="general">
        <div class="col-md-12 about-grids">
            <div class="publication">
                <div class="publication-top">
                    <h4> lalalalalalalalalala </h4>
                </div>
                <div class="publication-bottom">
                    <h5>Autor(i) : tralalalalalal </h5>
                    <h5>Instituție(i) : lololololololololo </h5>
                    <div class="icon">
                        <a href="#"
                           target="_blank" class="glyphicon glyphicon-print" aria-hidden="true">
                        </a>
                    </div>
                    <h5>Rezumat : <br></h5>
                    <p>fifofifofifofoifiofiofiofifiofiofiofiofiofiofifiofioiofoi</p>
                </div>
            </div>
        </div>
    </div>
    <div class="general">
        <div class="col-md-12 about-grids">
            <div class="publication">
                <div class="publication-top">
                    <h4> lalalalalalalalalala </h4>
                </div>
                <div class="publication-bottom">
                    <h5>Autor(i) : tralalalalalal </h5>
                    <h5>Instituție(i) : lololololololololo </h5>
                    <div class="icon">
                        <a href="#"
                           target="_blank" class="glyphicon glyphicon-print" aria-hidden="true">
                        </a>
                    </div>
                    <h5>Rezumat : <br></h5>
                    <p>fifofifofifofoifiofiofiofifiofiofiofiofiofiofifiofioiofoi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="publicationTitle">
        <div class="publicationTitle-top">
            <h4>Numărul, 2015</h4>
        </div>
    </div>
    <div class="general">
        <div class="col-md-12 about-grids">
            <div class="publication">
                <div class="publication-top">
                    <h4> lalalalalalalalalala </h4>
                </div>
                <div class="publication-bottom">
                    <h5>Autor(i) : tralalalalalal </h5>
                    <h5>Instituție(i) : lololololololololo </h5>
                    <div class="icon">
                        <a href="#"
                           target="_blank" class="glyphicon glyphicon-print" aria-hidden="true">
                        </a>
                    </div>
                    <h5>Rezumat : <br></h5>
                    <p>fifofifofifofoifiofiofiofifiofiofiofiofiofiofifiofioiofoi</p>
                </div>
            </div>
        </div>
    </div>

</div>
@include('layout.footer')
@include('layout.copyright')
</body>

</html>