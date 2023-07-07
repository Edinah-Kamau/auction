
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
   

</head>

@include('adminHeader');
<body>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="title">dashboard</h1>

   <div class="box-container">
   
      <div class="box" >

        
         <h2>{{$totalbidders}}</h2>
         <p> <a href="{{ route('display.bidders') }}" style="text-decoration: none; color:purple;">bidder accounts</a> </p>
      </div>
     

      <div class="box">
        
         <h2>{{$totaladmins}}</h2>
         <p> <a href="{{ route('display.admins') }}" style="text-decoration: none; color:purple;">Admin accounts</a> </p>
      </div>

      <div class="box">
         
         <h2>{{$totalsellers}}</h2>
         <p> <a href="{{ route('display.sellers') }}" style="text-decoration: none; color:purple;">Sellers accounts</a> </p>
      </div>

      

      <div class="box">
         
         <h2>{{$totalaccounts}}</h2>
         <p> <a href="{{ route('display.accounts') }}" style="text-decoration: none; color:purple;">Total accounts</a> </p>
      </div>

      <div class="box">
      <h2>{{$applications}}</h2>
         <p> <a href="{{ route('display.applications') }}" style="text-decoration: none; color:purple;">Applications</a> </p>
      </div>

      <div class="box">
        
         <h3></h3>
         <p>Bidders Messages</p>
      </div>

      <div class="box">
        
         <h3></h3>
         <p>Sellers Messages</p>
      </div>

   </div>

</section>

<!-- admin dashboard section ends -->




<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>