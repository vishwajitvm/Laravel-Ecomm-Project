<!doctype html>
<html lang="en">
  <head>
    <title>E-comm Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://kit.fontawesome.com/420a8676b0.js" crossorigin="anonymous"></script>  <!--font wasome kit-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .custom-login{
        padding-top: 100px !important ;
        padding-bottom: 100px !important ;
      }

      .slider-img{
        height: 600px !important ;

      }
      .custom-product{
        /* height: 700px !important ; */
      }
      .trending-img{
        width: 200px !important ;
        height: 150px !important ;
      }
      .trending-item{
        float: left ;
      }
      .container-div{
        width: 12% !important ;
        height: 20% !important ;
        padding: 20px !important ;

      }

      .detail-img{
        height: 200px ;
      }

      .search-box{
        width: 300px !important ;
      }

      .cart-list-devider{
        border-bottom: 1px solid gray ;
        
      }

    </style>
  
  </head>
  <body>
      {{ View::make('header')}}

      @yield('content')

      {{ View::make('footer')}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script>
    //   $(document).ready(function(){
    //       $('button').click(function(){
    //           alert('all set')
    //       })
    //   })
  </script>
</html>