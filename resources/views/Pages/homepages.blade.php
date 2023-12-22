<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

</head>

<body>

    <div class="d-flex flex justify-content-start bg-danger fluid sticky-top fluid">
        <h1 class="text-light">{{ $kontent }}</h1>
        <form action="/cari" method="GET">
            @csrf
            <div class="input-group input-group-lg mx-5 mt-1">
                <span class="input-group-text" id="basic-addon1">
                    <img src={{ asset('asset/images/search.svg') }}>
                </span>
                <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Cari barang"
                    aria-describedby="inputGroup-sizing-lg" name="search" value="{{ old('search') }}">
                <img class="img-fluid img-thumbnail" src={{ asset('asset/images/shopping-cart.svg') }} alt="">
                <h2 class="d-flex flex mx-5 mt-1"><a class="text-light nav-link active" aria-current="page"
                        href="/">Home</a></h2>
            </div>
        </form>
    </div>

    <ul class="list-group mt-5 rounded shadow">
        <li class="list-group-item text-center">
            <h4>Kategori</h4>
        </li>
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 justify-content-center">
                <div class="d-flex flex  mt-5">
                    <div class="col">
                        <div class="p-3">
                            <a href="" class="link-opacity-10 " >
                                <img src={{ asset('asset/images/smartphone.svg') }}
                                class="card-img-top w-100 object-fit-cover " alt="...">
                                <p class="text-dark">Smartphones</p>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <a href="" class="link-opacity-10 ">
                            <img src={{ asset('asset/images/laptop.svg') }}
                                class="card-img-top w-100 " alt="...">
                                <p class="text-dark"> Laptop </p>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <a href="" class="link-opacity-10 ">
                            <img src={{ asset('asset/images/home.svg') }}
                                class="card-img-top w-100 object-fit-cover" alt="...">
                            <p class="text-dark">Home Decorations</p>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </ul>

    <div class="container d-flex flex justify-content-center mt-5">
        <div class="row">
            @foreach ($result as $item)
                <div class="col">
                    <div class="card" style="width: 15rem;">
                        <img src={{ $item['images'][0] }} class="card-img-top object-fit-cover w-100"
                            style=" height: 200px;    
                    " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="text-primary">${{ $item['price'] }}</p>
                            <a href="/show/{{ $item['id'] }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
   
</body>

</html>
