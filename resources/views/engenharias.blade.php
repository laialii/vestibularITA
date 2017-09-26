@extends('sidebar')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Gallery</a> </div>
    <h1>Engenharias
      <br><small>Cursos oferecidos</small>
    </h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-content">
            <ul class="thumbnails">
              <li class="span5"> <a> <img src="img/gallery/imgbox6.jpg" alt="" > </a>
                <div class="actions"> <a title="" class="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox6.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span5"> <a> <img src="img/gallery/imgbox3.jpg" alt="" > </a>
                <div class="actions"> <a title="" class="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span5"> <a> <img src="img/gallery/imgbox4.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox4.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span5"> <a > <img src="img/gallery/imgbox5.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox5.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span5"> <a> <img src="img/gallery/imgbox1.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox1.jpg"><i class="icon-search"></i></a> </div>
              </li>
              <li class="span5"> <a > <img src="img/gallery/imgbox2.jpg" alt="" > </a>
                <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox2.jpg"><i class="icon-search"></i></a> </div>
              </li>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
