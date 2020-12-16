<div class="container">
  <div class="card text-center">
    <div class="card-body">
      <h1 class="card-title">{{ $data->content[3]->title }}</h1>
      <p class="card-text">{{ $data->content[3]->content }}</p>
      <a href="#" class="btn btn-info">Go somewhere</a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-4">
      <div class="row">
        <div class="col-3 ">
          <img src="{{ $data->content[0]->image }}" alt="Los Angeles">
        </div>
        <div class="col-9">
          <div class="card text-white bg-warning  mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">{{ $data->content[0]->title }}</h5>
              <p class="card-text">{{ $data->content[0]->content }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-4 ">
          <img src="{{ $data->content[1]->image }}" alt="Los Angeles">
        </div>
        <div class="col-9">
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">{{ $data->content[1]->title }}</h5>
              <p class="card-text">{{ $data->content[1]->content }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">

        <div class="col-10">
          <div class="card text-white bg-danger  mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">{{ $data->content[2]->title }}</h5>
              <p class="card-text">{{ $data->content[2]->content }}</p>
            </div>
          </div>
        </div>
        <div class="col-4 ">
          <img src="{{ $data->content[2]->image }}" alt="Los Angeles">
        </div>
      </div>
    </div>

  </div>

</div>
