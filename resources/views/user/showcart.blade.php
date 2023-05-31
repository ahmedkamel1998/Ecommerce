<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <title>Sixteen Clothing </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div  id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li class="nav-item">
              @if (Route::has('login'))

                  @auth

                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('showcart') }}">
                        <i class="fas fa-shopping-cart"></i>
                        Cart [{{ $count }}]</a>
                  </li>

                  <x-app-layout>

                  </x-app-layout>

                  @else
                     <li> <a href="{{ route('login') }}" class="nav-link">Log in</a> </li>

                      @if (Route::has('register'))
                        <li>  <a href="{{ route('register') }}" class="nav-link">Register</a> </li>
                      @endif
                  @endauth

            @endif
              </li>


            </ul>
          </div>
        </div>
      </nav>
      @if (session()->has('message'))
      <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
      </div>
      @endif
    </header>

  <div style="padding: 100px;" align="center">


    <table>

        <tr style="background-color: black;">
            <td style="padding: 10px; font-size:20px; color:white;">Product Name</td>
            <td style="padding: 10px; font-size:20px; color:white;">Quantity</td>
            <td style="padding: 10px; font-size:20px; color:white;">Price</td>
            <td style="padding: 10px; font-size:20px; color:white;">Action</td>
        </tr>

        <form action="{{ route('order.confirmorder') }}" method="POST">
            @csrf
                @foreach ($cart as $carts)

                <tr style="background-color: gray;">

                    <td style="padding: 10px; color:white;">
                        <input type="text" name="productname[]" value="{{ $carts->product_title }}" hidden="">
                        {{ $carts->product_title }}
                    </td>
                    <td style="padding: 10px; color:white;">
                        <input type="text" name="quantity[]" value="{{ $carts->quantity }}" hidden="">
                        {{ $carts->quantity }}
                    </td>
                    <td style="padding: 10px; color:white;">
                        <input type="text" name="price[]" value="{{ $carts->price }}" hidden="">
                        {{ $carts->price*$carts->quantity }}
                    </td>
                    <td style="padding: 10px; color:white;">
                        <a class="btn btn-danger" href="{{ url('delete',$carts->id) }}">Delete</a>
                    </td>

                </tr>
                @endforeach

    </table>
    <button type="submit" class="btn btn-success">Confirm Order</button>
</form>
  </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
