
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ $data->banner[0]->url }}" alt="Los Angeles">
      <div class="carousel-caption">
        <h3>{{ $data->banner[0]->title }}</h3>
        <h5>We had such a great time in LA!</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ $data->banner[1]->url }}" alt="Chicago">
      <div class="carousel-caption">
        <h3>{{ $data->banner[1]->title }}</h3>
        <h5>We had such a great time in LA!</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ $data->banner[2]->url }}" alt="New York">
      <div class="carousel-caption">
        <h3>{{ $data->banner[2]->title }}</h3>
        <h5>We had such a great time in LA!</h5>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
{{-- <div id="myBanner" class="fluid-container">
    <img src="{{ $data->banner[0]->url }}">
    <p>{{ $data->banner[0]->title }}</p>
</div> --}}
