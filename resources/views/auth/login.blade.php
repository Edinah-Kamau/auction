@include('bidderHeader');

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   

</head>

<body>


   
<div class="form-container">

   <form action="{{route('login')}}" method="post">
      @csrf
      @if(Session::has('success'))
       <div class="alert-success">{{Session::get('success')}}</div>
       @endif
       @if(Session::has('fail'))
       <div class="alert-danger">{{Session::get('fail')}}</div>
       @endif

       @if(Session('error'))
       <div class="alert-danger">{{Session('error')}}</div>
       @endif
       

      <h3>login now</h3>
      <div class="box">
      <input type="email" name="email" placeholder="enter your email" value="{{old('email')}}" size="35%" >
      <a href="" class="view"></a>
      </div>
      @if($errors->has('email'))
      <span class="text-danger">{{$errors->first('email')}}</span>
      @endif


      <div class="box">
      <input type="password" name="password" placeholder="enter your password"  id="password"  size="35%" value="{{old('password')}}" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" onkeyup="return validate()">
      <i class="fa-solid fa-eye" id="showpassword" onclick="showpass()"></i>
      </div>
      
      @if($errors->has('password'))
      <span class="text-danger">{{$errors->first('password')}}</span>
      @endif
     
<br>
      
      <input  type="checkbox" name="remember" style="background-color: 15px; background-color: purple;" size="10px"id="remember" {{ old('remember') ? 'checked' : '' }} label>
      <label  for="remember" style="font-size: 15px;  ">  Remember </label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="submit" value="login now" name="login"class="btn">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
       @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}" style="font-size: 14px; color:purple;">Forgot Password?</a>
       @endif
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
       
       <p>don't have an account? <a href="register">register now</a></p>
      
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <p>You can login in with:</p>
     
      <a href="{{ route('google.login') }}" class="btn" STYLE="background-color:#4285F4" size="100%" >Google</a>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
   </form>

</div>

<script>
 function showpass(){

  var showpassword = document.getElementById('showpassword');
  var passwordField = document.getElementById('password');
  
  showpassword.addEventListener("click", function() {
   this.classList.toggle("fa-eye-slash");
   const type = passwordField.getAttribute("type")==="password" ? "text" : "password";
   passwordField.setAttribute("type", type);
  })

  
 }
 </script>

<script>

</body>
</html>