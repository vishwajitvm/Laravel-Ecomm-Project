@extends('master')
@section('content')


    
<div class="container-fluid bg-llight custom-product" >  <!-- style=" padding: 2rem 0rem;" -->
    <div class="row">
        {{-- <div class="col-sm-2">
            <a href="#">Filter</a>
        </div> --}}

        <div class="col-sm-11">
            <div class="container-fluid trending-wrapper">
                <h4 class="pb-5 pt-4 text-primary">Cart List</h4>
                <a class="btn btn-success mb-3" href="/ordernow">Order Now</a>
                
                
                <div class="carousel-inner">
            
                    @foreach ($products as $item)
                    <div class="row cart-list-devider pt-3 pb-3"  >

                        <div class="col-sm-2 " >
                            <div class=" searched-item  container-div {{$item->id==1?'active':''}} " style="width: 300px !important;" >
                                <a href="detail/{{$item->id}}">
                                  <img class="trending-img" src="{{$item->gallery}} " alt="Los Angeles" width="1100" height="500">
                                  {{-- <div class="">
                                    <h2 class="text-danger font-weight-bold"> <b> {{$item->name}} </b> </h2>
                                    <h5 class="text-dark font-weight-bold"> {{$item->description}} </h5>
                                  </div>   --}}
                                </a> 
                                </div>
                        </div>

                        <div class="col-sm-2" >
                            <div class=" searched-item  container-div {{$item->id==1?'active':''}} " style="width: 300px !important;" >
                                <a href="detail/{{$item->id}}">
                                  {{-- <img class="trending-img" src="{{$item->gallery}} " alt="Los Angeles" width="1100" height="500"> --}}
                                  <div class="">
                                    <h2 class="text-danger font-weight-bold"> <b> {{$item->name}} </b> </h2>
                                    <h5 class="text-dark font-weight-bold"> {{$item->description}} </h5>
                                  </div>  
                                </a> 
                                </div>
                        </div>

                        <div class="col-sm-3" >
                            <div class=" searched-item  container-div {{$item->id==1?'active':''}} " style="width: 300px !important;" >

                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove From Cart</a>


                                <a href="detail/{{$item->id}}"> 
                                    <button class="btn btn-success mt-5">Details Of PRoducts</button>
                                </a>
                                
                            </div>
                        </div>

                        

                        
                    </div>
                    @endforeach

                    <a class="btn btn-success mb-3 mt-5" href="/ordernow">Order Now</a>

        
                </div>
        
                
            </div>
        
        </div>

        <div class="col-sm-1" style="text-align: right !important ; font-weight:bolder !important ; ">
            <a href="#">Filter</a>
        </div>

    </div>
  </div>
@endsection

