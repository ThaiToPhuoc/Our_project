<div class="container ">
  <div class="row bg-light">
      <div class="col-6 p-4">
        <h1 style="color:rgb(218, 76, 76)">{{ $data->subcontent[0]->title }}</h1>
        <h5>
          {{ $data->subcontent[4]->subcontent }}
        </h5>
        <br>
        <a href="{{ $data->subcontent[3]->url }}" class="btn btn-info">Xem chi tiet</a>
      </div>
      <div class="col-6 text-center p-3" >

          <img  src="{{ $data->subcontent[3]->image }}" class="rounded" alt="...">
      </div>
  </div>
  <div class="row bg-light">

    <div class="col-6 text-center p-3" >

        <img  src="{{ $data->subcontent[4]->image }}" class="rounded" alt="...">
    </div>
    <div class="col-5 p-4">
      <h1 style="color:rgb(218, 76, 76)">{{ $data->subcontent[2]->title }}</h1>
      <h5>
        {{ $data->subcontent[4]->subcontent }}
        <br>
        <a href="{{ $data->subcontent[1]->url }}" class="btn btn-info">Xem chi tiet</a>
      </h5>
    </div>
</div>
<div class="row bg-light">
    <div class="col-5 p-4">
      <h1 style="color:rgb(218, 76, 76)">{{ $data->subcontent[4]->title }}</h1>
      <h5>
        {{ $data->subcontent[2]->subcontent }}
      </h5>
      <br>
          <a href="{{ $data->subcontent[2]->url }}" class="btn btn-info">Xem chi tiet</a>
    </div>
    <div class="col-6 text-center p-3" >

        <img  src="{{ $data->subcontent[2]->image }}" class="rounded" alt="...">
    </div>
  </div>
</div>

<div class="container-fuild p-2">
  <div class="row">
    <div class="col-2">
      <div class="card mb-3">
        <img class="card-img-top" src="{{ $data->subcontent[3]->image }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $data->subcontent[3]->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted"> <a href="{{ $data->subcontent[2]->url }}" class="btn btn-danger">Xem chi tiet</a></small></p>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card mb-3">
        <img class="card-img-top" src="{{ $data->subcontent[4]->image }}" height="150px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $data->subcontent[4]->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
          <p class="card-text"><small class="text-muted"> <a href="{{ $data->subcontent[2]->url }}" class="btn btn-danger">Xem chi tiet</a></small></p>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card mb-3">
        <img class="card-img-top" src="{{ $data->subcontent[1]->image }}" height="200px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $data->subcontent[1]->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted"> <a href="{{ $data->subcontent[2]->url }}" class="btn btn-danger">Xem chi tiet</a></small></p>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card mb-3">
        <img class="card-img-top" src="{{ $data->subcontent[2]->image }}" height="200px" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $data->subcontent[2]->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted"> <a href="{{ $data->subcontent[2]->url }}" class="btn btn-danger">Xem chi tiet</a></small></p>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card mb-3">
        <img class="card-img-top" src="{{ $data->subcontent[0]->image }}" height="150px"   alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $data->subcontent[0]->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted"> <a href="{{ $data->subcontent[2]->url }}" class="btn btn-danger">Xem chi tiet</a></small></p>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="card mb-3">
        <img class="card-img-top" src="{{ $data->subcontent[3]->image }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $data->subcontent[3]->title }}</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted"> <a href="{{ $data->subcontent[2]->url }}" class="btn btn-danger">Xem chi tiet</a></small></p>
        </div>
      </div>
    </div>
  </div>



</div>


