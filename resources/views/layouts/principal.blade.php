@extends ('layouts.admin')
@section ('contenido')

   <!--=================CAROUSELE START====================-->
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <img src="http://diamondcreative.net/plus-v1.1/img/slider/slider_06.jpg" width="1500px" height="700px">
      <div class="carousel-caption hidden-xs">
        <h3>New Collection touch of Chania</h3>
        <p>The atmosphere in Chania has a touch<br> of Florence and Venice.</p>
          <button class="btn btn-danger">READ MORE</button>
      </div>
    </div>

    <div class="item">
      <img src="http://diamondcreative.net/plus-v1.1/img/slider/slider_03.jpg" width="1500px" height="700px">
      <div class="carousel-caption hidden-xs">
        <h3>New Collection touch of Chania</h3>
        <p>The atmosphere in Chania has a touch<br> of Florence and Venice.</p>
        <button class="btn btn-danger">READ MORE</button>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection
