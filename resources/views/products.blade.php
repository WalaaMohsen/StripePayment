<!DOCTYPE html>
<html>
    <head>
        <title>Payment</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
         <div class="container">
               <div class="row">
                  @foreach($products as $product)
                      <div class="col-md-4">
                        <div class="card" style="width:18rem;">
                           <img src="{{asset('image')}}/{{$product->photo}}" class="card-img-top">
                           <div class="card-body">
                                <h5 class="card-title">{{$product->product_name}}</h5>
                                <p class="card-text">{{$product->product_description}}</p>
                                <p class="card-text"><strong>Price: </strong>{{$product->price}}</p>
                                <a href="{{route('payment',$product->id)}}">Make Payment</a>
                           </div>
                        </div>
                      </div>
                  @endforeach              
         </div>
    </body>
</html>