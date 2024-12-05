<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ecomerce</title>


</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-1" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link " href="#">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </nav>

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Description</th>
      <th scope="col">Category</th>
      <th scope="col">Stock</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach ($products as $product)
      <tr>
      <th scope="row">{{$product['id']}}</th>
      <td><img src="{{$product['img']}}" alt="gg"></td>
      <td>{{$product['name']}}</td>
      <td>{{$product['description']}}</td>
      <td>{{$product['category']}}</td>
      @if ($product['stock']<=0)
      <td class="bg-danger">Out Of Stock</td>
      @else:
        <td>{{$product['stock']}}</td>
      @endif
      <td>{{$product['price']}}</td>
      </tr>
      @endforeach
    
  </tbody>
</table>

</body>

</html>