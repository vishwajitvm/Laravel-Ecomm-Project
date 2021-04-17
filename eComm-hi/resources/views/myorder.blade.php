@extends('master')
@section('content')


    
<div class="container-fluid bg-llight custom-product" >  <!-- style=" padding: 2rem 0rem;" -->
    <div class="row">
        {{-- <div class="col-sm-2">
            <a href="#">Filter</a>
        </div> --}}

        <div class="col-sm-11">
            <div class="container-fluid trending-wrapper">
                <h4 class="pb-5 pt-4 text-primary"><b>Your  Order List</b></h4>
                
                
                <div class="carousel-inner">
            
                    @foreach ($orders as $item)
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
                                  {{-- <img class="trending-img" src="{{$item->gallery}} " alt="Los Angeles" width="1100" height="500"> --}}
                                  <div class="">
                                    <h2 class="text-danger font-weight-bold"> <b> {{$item->name}} </b> </h2>
                                    <h6 class="text-dark font-weight-bold">Price :  <span class="text-secondary">{{$item->price}}</span> </h6>
                                    {{-- <h6 class="text-dark font-weight-bold">Total Price :  <span class="text-secondary">{{$item->price+100}}</span> </h6> --}}

                                    <h6 class="text-dark font-weight-bold">Delivery Status :  <span class="text-secondary">{{$item->status}}</span> </h6>
                                    <h6 class="text-dark font-weight-bold">Payment Status :  <span class="text-secondary">{{$item->payment_status}}</span> </h6>
                                    <h6 class="text-dark font-weight-bold">Payment Method :  <span class="text-secondary">{{$item->payment_method}}</span> </h6>
                                    <h6 class="text-dark font-weight-bold">Address :  <span class="text-secondary">{{$item->address}}</span> </h6>



                                  </div>  
                                </div>
                        </div>

                        <div class="col-sm-3" >
                            <div class=" searched-item  container-div {{$item->id==1?'active':''}} " style="width: 300px !important;" >

                                {{-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove From Cart</a> --}}


                                <a href="detail/{{$item->id}}"> 
                                    <button class="btn btn-success mt-5">Details Of PRoducts</button>
                                </a>
                                
                            </div>
                        </div>

                        

                        
                    </div>
                    @endforeach


        
                </div>
        
                
            </div>
        
        </div>

        <div class="col-sm-1" style="text-align: right !important ; font-weight:bolder !important ; ">
            <a href="#">Filter</a>
        </div>

    </div>
  </div>
@endsection

