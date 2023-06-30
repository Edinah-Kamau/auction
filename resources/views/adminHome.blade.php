
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

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

      
      <div class="box">
        
         <h3></h3>
         <p>bidder accounts</p>
      </div>

      <div class="box">
        
         <h3></h3>
         <p>admin accounts</p>
      </div>

      <div class="box">
         
         <h3></h3>
         <p>seller accounts</p>
      </div>

      

      <div class="box">
         
         <h3></h3>
         <p>total accounts</p>
      </div>

      <div class="box">
        
         <h3></h3>
         <p>new messages</p>
      </div>

   </div>

</section>

<!-- admin dashboard section ends -->




@include('footer');




<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>