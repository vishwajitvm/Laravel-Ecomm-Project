@extends('master')
@section('content')

    
<div class="container" >  <!-- style=" padding: 2rem 0rem;" -->
    <div class="row">
        <!-- image Blog here-->
        <div class="col-sm-6">
            <img class="detail-img" src=" {{$product['gallery']}} " alt="">
        </div>

        <!--Detail info here-->
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2> Name : {{$product['name']}} </h2>
            <h4> Price : {{$product['price']}}  </h4>
            <h4> Category : {{$product['category']}}  </h4>
            <h4> Description : {{$product['description']}}  </h4>
            <br> <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value=" {{$product['id']}} ">
                <button class="btn btn-lg btn-success">Add To Cart</button>
            </form>
            <br> 
            <button class="btn btn-lg btn-danger pl-4 pr-4">Buy Now</button>

        </div>
    </div>
</div>
@endsection

