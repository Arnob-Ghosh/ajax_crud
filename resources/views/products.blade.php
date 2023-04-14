<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <title></title>
  </head>
  <body>

    <div class= "container">

        <a href=""class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</a>

        <table class="table table-success table-striped">

            <thead>
                <tr>

                  <th scope="col">name</th>
                  <th scope="col">price</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>

                  <td>{{$product->name}}</td>
                  <td>{{$product->price}}</td>
                  <td>
                    <a href=""class="btn btn-primary update_product_form"
                    data-bs-toggle="modal" data-bs-target="#updateModal"
                    data-id="{{$product->id}}"
                    data-name="{{$product->name}}"
                    data-price="{{$product->price}}">edit</a>
                    <a href=""class="btn btn-danger delete_product"
                    data-id="{{$product->id}}">delete</a>
                  </td>
                </tr>
                @endforeach


          </table>
          {!!$products->links()!!}




    </div>



    @include('product_modal')
    @include('edit_product_modal')

    @include('products_js');
    {!! Toastr::message() !!}

  </body>
</html>
