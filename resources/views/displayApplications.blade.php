<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Applications</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="{{asset('css/table.css')}}">

</head>
<body>

@include('adminHeader');



<table>
 
 <tr>
 <th>Number</th>
 <th>Name</th>
 <th>Email</th>
 <th>National ID front </th>
 <th>National ID back </th>
 <th>Proof front</th>
 <th> Proof back</th>
 <th> Approve</th>
 <th> Delete</th>
 </tr>

 @php 
   $i = 1;
   @endphp
   @foreach($data as $applications)


 <tr>
 <td>{{$i++}}</td>
 <td>{{$applications->name}}</td>
 <td>{{$applications->email}}</td>
 <td><a href="">View</a> <a href="">Download</a></td>
 <td><a href="">View</a> <a href="">Download</a></td>
 <td><a href="">View</a> <a href="">Download</a></td>
 <td><a href="">View</a> <a href="">Download</a></td>
 <td><a href="">Approve</a> </td>
 <td><a href="">Delete</a> </td>

 </tr>
 @endforeach
 </table>
 

   






<!-- custom admin js file link  -->
<script src="{{asset('js/admin_script.js')}}"></script>

</body>



</html>