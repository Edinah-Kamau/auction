<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Accounts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

</head>
<body>

@include('adminHeader');
<section class="users">

   
   <div class="box-container">
   @php 
   $i = 1;
   @endphp
   @foreach($data as $accounts)

   <div class="box">
   <p> Number : <span>{{$i++}}</span> </p>
   <p> Name : <span>{{$accounts->name}}</span> </p>
   <p> Email : <span>{{$accounts->email}}</span> </p>
   <p> Type : <span>{{ $accounts->type }}</span> </p>
  <a href="" style="text-decoration: none;" class="option-btn">update</a>
  <a href="" style="text-decoration: none;" class="delete-btn">Delete</a>
   </div>
@endforeach
</div>
</section>

<!-- custom admin js file link  -->
<script src="{{asset('js/admin_script.js')}}"></script>

</body>


</html>