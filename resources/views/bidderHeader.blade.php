<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="{{asset('css/popup.css')}}">
 


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<header class="header">



   <div class="header-1">
      <div class="flex">
         <div class="share">
            <a href="#" class="fab fa-facebook-f" style="text-decoration: none;"></a>
            <a href="#" class="fab fa-twitter" style="text-decoration: none;"></a>
            <a href="#" class="fab fa-instagram" style="text-decoration: none;"></a>
            <a href="#" class="fab fa-linkedin" style="text-decoration: none;"></a>
         </div>
         <p> new <a href="{{ route('login') }}" style="text-decoration: none;">login</a> | <a href="{{ route('register') }}" style="text-decoration: none;">register</a>   </p>
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <a href="home" style="text-decoration: none;"class="logo">Arge.</a>

         <nav class="navbar">
            <a style="text-decoration: none;" href="{{ route('welcome') }}">home</a>
            <a style="text-decoration: none;" href="{{ route('about') }}">about</a>
            <a style="text-decoration: none;" href="{{ route('shop') }}">shop</a>
            <a style="text-decoration: none;" href="{{ route('contacts') }}">contact</a>
            <a style="text-decoration: none;" href="{{ route('orders') }}">orders</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" style="text-decoration: none;" class="fas fa-search"></a>
            <div id="user-btn"  class="fas fa-user"></div>
            
            <a href="cart" style="text-decoration: none;"> <i class="fas fa-shopping-cart"></i> <span></span> </a>
         </div>

         @guest
                            @if (Route::has('login'))
                                <p class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"></a>
                                </p>
                            @endif

                            @if (Route::has('register'))
                                <p class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"></a>
                                </p>
                            @endif

                        @else
                            <li class="nav-item dropdown" >
                                <a style="font-size: 20px; width:100px; decoration: none; color:purple" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <br>
                                <a class="dropdown-item" style="font-size: 20px; text-decoration: none; width:100%; color:purple" href="{{ route('password.update') }}">Reset Password</a>
                                <a class="dropdown-item" style="font-size: 20px; text-decoration: none; width:100%; color:purple"  id="open">Logout</a>
                                
                                
                                </div>
                            </li>
                           
                        @endguest


                     
      </div>
   </div>







    <div class="model-container">
      <div class="model">
                
        <p STYLE="color:purple; text-indent: 50px; text-align: justify; letter-spacing: 3px; font-size:20px;">ARGE AUCTION SHOP</p>
                      
        <p STYLE=" text-indent: 50px; text-align: justify; letter-spacing: 3px; font-size:15px;">Do you want to logout?</p>
        
        <br></br>    
       <div class="dis">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
         @csrf
        <button STYLE="display:inline; float:left; " type="submit" href="{{ route('logout') }}" >Yes</button>
        </form>
       
        <button STYLE="display:block; float:right; background-color:purple;  " id="close_up"  >No</button>
        <div>
        <i class="fa fa-times" id="close"></i>
      </div> 
      
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" charset="utf-8"></script>
    <script>

        $(document).ready(function(){

            $('#open').click(function(){
                $('.model-container').css('transform','scale(1)');

        }); 

        $('#close').click(function(){
                $('.model-container').css('transform','scale(0)');

        }); 

        $('#close_up').click(function(){
                $('.model-container').css('transform','scale(0)');

        }); 


    });
    </script>
</header>


