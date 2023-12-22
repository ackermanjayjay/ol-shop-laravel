<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body style="background: lightgray">

    <div class="d-flex justify-content-center mt-5 rounded-xl">
    <div class="card" style="width: 18rem;">
            <img src={{$result['images'][0]}} class="card-img-top rounded-xl w-100 object-fit-cover" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$result['title']}}</h5>
                <p class="card-text">{{$result['description']}}</p>
                <p class="card-text">${{$result['price']}}</p>
                <a href="#" class="btn btn-success">Buy</a>
            </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>