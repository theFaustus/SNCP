@include('layout.header')
        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-left">
			<li><a
                    href="{{url('news')}}"><span>N</span><span>O</span><span>U</span><span>T</span><span>Ă</span><span>Ț</span><span>I</span></a>
        </li>
        <li ><a class="link link--yaku"
                    href="{{url('index')}}"><span>A</span><span>C</span><span>A</span><span>S</span><span>Ă</span></a>
        </li>

        <li><a href="{{url('search')}}" class="link link--yaku"><span>C</span><span>Ă</span><span>U</span><span>T</span><span>A</span><span>R</span><span>E</span></a>
        </li>
        <li class="active"><a href="{{url('list')}}"
               ><span>L</span><span>I</span><span>S</span><span>T</span><span>A</span>
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



<h3 class="titleBody text-center">Lista de <span>lucrări</span></h3>
<p></p>
<div style="margin: 40px 40px 40px 40px;">
<h4>Dear colleagues,</h4><br>
<p>Notice is hereby given that the National Society of Pediatric Surgeons from the Republic of Moldova announces the publication of the next volume of “Moldavian Journal of Pediatric Surgery” – a reviewed journal, registered in the National Books Administration. The discussed subjects will be linked to pediatric surgery, urology, neurosurgery, traumatology and orthopedics, anesthesiology and intensive care, neonatal surgery, cardiosurgery and varia.
</p>
<br><h4>Requirements</h4><br>
<p>The article volume will be 5-8 pages (A4) (literature reviews up to 10 pages), it will be written in Microsoft Words, with 14 Times New Roman characters, intervals 1,5, all margins 2 cm. Articles should be in English. The paper should begin with authors name, surname, then the title with capital letters and institution from which the article come. The summary of 10-14 lines is mandatory. The article text follows and should contain introduction, materials and methods, results, discussion, conclusions and references and the first author correspondent address. Tables and pictures could be included in the paper, but with title and number. Pictures should be in the JPEG format. Tables will be attached apart. </p>
</div>
@foreach ($articleList as $article)
<div class="publicationTitle">
    <div class="publicationTitle-top">
        <h4>{{$article['title']}}, {{$article['publication_date']}}</h4>
    </div>
</div>

@foreach($article['articleList'] as $a)
<div class="general">
    <div class="col-md-12 about-grids">

            <div class="publication">
                <div class="publication-top">
                    <h4><b> {{$a['romanian_title']}}  </b></h4>
                </div>
                <div class="publication-bottom">
                    <h5><b>Autor(i) : </b>{{$a['authors']}}</h5>
                    <h5><b>Instituție(i) : </b>{{$a['institution']}}</h5>
                    <div class="icon">
                        <a href="{{url('/getArticle/')}}/{{$a['article_file_name']}}"
                           target="_blank" class="glyphicon glyphicon-print" aria-hidden="true">
                        </a>
                    </div>
                    <h5><b>Rezumat : </b><br></h5>
                    <p>{{$a['article_resume']}}</p>
                </div>
            </div>

    </div>
</div>
@endforeach

<div class="clearfix"></div>
</div>
@endforeach


@include('layout.banner')
@include('layout.footer')
@include('layout.copyright')
</body>

</html>