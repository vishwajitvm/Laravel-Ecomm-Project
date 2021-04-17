@extends('master')
@section('content')
    
<div class="container custom-login" style=" padding: 2rem 0rem;">
    <div class="row">
      <div class="col-8 ">
              <form class="offset-4" action="register" method="POST" >
                @csrf

                <div class="form-group">
                    <label for="email1">User Name</label>
                    <input type="text" name="name" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="User Name">
                  </div>

          <div class="form-group">
            <label for="email1">Email address</label>
            <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" name="password" class="form-control" id="password1" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-info">Register</button>
        </form>
      </div>
    </div>
  </div>
@endsection

