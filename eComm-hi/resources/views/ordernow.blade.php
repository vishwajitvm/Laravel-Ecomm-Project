@extends('master')
@section('content')


    
<div class="container bg-llight custom-product" >  <!-- style=" padding: 2rem 0rem;" -->
    <div class="row ">
        <div class="col-sm-6  m-0 p-0">
            <!-- table here --->
            <table class="table table-dark text-center ">
                {{-- <thead>
                  <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead> --}}
                <tbody>
                  <tr>
                    <th>Price</th>
                    <th> <i class="fas fa-rupee-sign"></i> {{$total}}  </th>
                  </tr>

                  <tr>
                    <th>Tax</th>
                    <th><i class="fas fa-rupee-sign"></i> 0 </th>
                  </tr>

                  <tr>
                    <th>Delivery</th>
                    <th><i class="fas fa-rupee-sign"></i> 100 </th>
                  </tr>

                  <tr>
                    <th>Total</th>
                    <th><i class="fas fa-rupee-sign"></i> {{$total + 100}} </th>
                  </tr>

                </tbody>
              </table>
            <!--table till here -->

            <!--form here-->
            <form  class="mt-5" method="POST" action="orderplace">
              @csrf
                <div class="form-group">
                  <label for="email1"><b>Enter Your Address</b></label>
                  <textarea  class="form-control"  placeholder="Enter Your Address" name="address"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p> <input type="radio"  name="payment" value="Online Payment"><span> &nbsp; Online Payment</span> </p>
                    <p> <input type="radio"  name="payment" value="EMI Payment"><span> &nbsp; EMI Payment</span> </p>
                    <p> <input type="radio"  name="payment" value="Payment On Delivery"><span> &nbsp; Payment On Delivery</span> </p>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Order Now</button>

              </form>
            <!-- Form end here-->
        
        </div>
    </div>
  </div>
@endsection

