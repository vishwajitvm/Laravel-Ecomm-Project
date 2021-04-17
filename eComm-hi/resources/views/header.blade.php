<!--cart Count Function here-->
<?php 
use App\Http\Controllers\productController ;
//we have to check if the user is login or not cozzz 
//ERROR NOTE :: Trying to access array offset on value of type null (View: C:\laravel\eComm-hi\resources\views\header.blade.php)   <<==is coming if the user is not login and if it don't gett the session data
$total = 0 ;   //else total is ZERO if the user is not login
if(Session::has('user')){
  $total = productController::cartItem() ;  //if the session has user then
}

?>

<nav class="navbar navbar-expand-lg navbar-light text-light bg-dark mb-5">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/"><h2 class="text-light">E-comm</h2></a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link text-light" href="/"> <h6>Home</h6> </a>  <!-- <span class="sr-only">(current)</span> -->
        </li>
        <li class="nav-item active">
            <a class="nav-link text-light" href="/myorder"><h6>My Order List</h6> </a>  <!-- <span class="sr-only">(current)</span> -->
          </li>
      </ul>
      <!--input form here -->
      <form action="/search" class="form-inline">

        <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">

        <button class="btn btn-outline-success bg-success text-light  my-2 my-sm-0" type="submit">Search</button>
      </form>
      <!--input form here -->



      <div class="form-inline my-2 my-lg-0 text-light">
            <a class="nav-link" href="/cartlist"> <h5 class="text-light"> <b class="text-danger">Cart</b> ({{$total}}) </h5> </a>  <!-- <span class="sr-only">(current)</span> -->

            @if(Session::has('user'))
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b class="text-uppercase"> {{ Session::get('user')['name'] }} </b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/logout">Logout</a>
                
              </div>
            </div>
            @else
            <a class="nav-link" href="/login"> 
              <h5 class="text-light"> Login </h5> </a>  <!-- <span class="sr-only">(current)</span> -->
              
               <a href="/register">
                <h5 class="text-light text-decoration-none"> Register </h5>
              </a>  


            @endif

      </div>
    </div>
  </nav>