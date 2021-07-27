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
                <a class="nav-link " aria-current="page" href="/">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/users">Users</a>
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

    <h1> Users </h1>

    <div class="row">
        @foreach ($users as $item)
        <div class="col-sm-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">{{ $item->id }}</div>
                <div class="card-body">
                    <h5 class="card-title">  {{ $item->name }}  </h5>
                    <p class="card-text"><a href="/recentlyviewedproducts/{{ $item->id }}" > Recently viewed products  </a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $users->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    
    </script>
  </body>
</html>

