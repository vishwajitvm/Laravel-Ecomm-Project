@extends('master')
@section('content')

<style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
    </style>
    
<div class="container-fluid bg-llight custom-product" >  <!-- style=" padding: 2rem 0rem;" -->

    <div class="container">

        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
    
            <div class="carousel-inner">
    
                @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}} ">
                     <a href="detail/{{$item['id']}}">
                          <img class="slider-img" src="{{$item['gallery']}} " alt="Los Angeles" width="1100" height="500">
                          <div class="carousel-caption">
                            <h3 class="text-danger font-weight-bold"> <b> {{$item['name']}} </b> </h3>
                            <p class="text-dark font-weight-bold"> {{$item['description']}} </p>
                          </div>
                     </a>  
                </div>
                @endforeach
    
            </div>
    
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

    </div>
    
  </div>

  <div class="container-fluid trending-wrapper">


        <h1>Trending Products</h1>
        
        <div class="carousel-inner">
    
            @foreach ($products as $item)
            <div class=" trending-item container-div {{$item['id']==1?'active':''}} ">
              <a href="detail/{{$item['id']}}">

                <img class="trending-img" src="{{$item['gallery']}} " alt="Los Angeles" width="1100" height="500">
                <div class="">
                  <h3 class="text-danger font-weight-bold"> <b> {{$item['name']}} </b> </h3>
                  <p class="text-dark font-weight-bold"> {{$item['description']}} </p>
                </div>  
              </a> 
              </div>
            @endforeach

        </div>

        


  </div>
@endsection

