<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Thrive</title>
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
            
    </style>
  </head>
  <body class="container">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Thrive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/users">Users</a>
                </li>
            </ul>
            
        </div>
        <div class="d-flex align-items-center">
            <span class="navbar-text">
                {{$user->name}}
            </span>
        </div>
    </div>
    </nav>

    <h1> Recently Viewed Products For {{$user->name}} </h1>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header row"> 
                    <div class="col-sm-4"> Id:{{ $product->id }} </div> 
                    <div class="col-sm-8" style="text-align: right;">  <button class="btn btn-danger" onclick="borrar({!! $user->id !!}, {!! $product->id !!} )">DELETE</button> </div> 
                </div>
                <div class="card-body">
                    <h5 class="card-title"> {{ $product->name }} </h5>
                    <p class="card-text">{{ $product->desc }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

    function borrar(userId, productId) {
        $.ajax({
            url: '/api/userproduct/1',
            type: 'DELETE',
            data:{user_id: userId, product_id: productId },
            success: function(result) {
                location.reload();
            }
        });
    }

    </script>
  </body>
</html>

