<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$judul}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex flex justify-content-center mt-5">
        <h1>{{$kontent}}</h1>
      </div>
      
    <form action="/cari" method="GET">
      @csrf
      <div class="input-group input-group-lg container d-flex flex justify-content-center mt-5">
        <input type="text" class="form-control" aria-label="Sizing example input"  placeholder="Cari barang" aria-describedby="inputGroup-sizing-lg" name="search">
      </div>
        </form>

    <div class="container d-flex flex justify-content-center mt-5">
        <div class="row">
            @foreach ($result as $item)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src={{$item['images'][0]}} class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item['title']}}</h5>
                      <p class="card-text">{{$item['description']}}</p>
                      <p class="text-primary">${{$item['price']}}</p>
                      <p class="text-black">Category: {{$item['category']}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>