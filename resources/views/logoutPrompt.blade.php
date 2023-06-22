<html>
<head>
 
<style>

*{
    margin: 0; padding: 0;
    box-sizing:border-box;
    font-family:tahoma;
    transition:all .2s linear;
    text-transform:capitalize;
}

.container{
    display:flex;
    align-items:center;
    justify-content:center;
    min-height:100vh;
    width:100vw; 
    background:white;
    background-size:cover;
    background-position:center;

}

#open{
    height:50px;
    width:180px;
    background:#fff;
    color:#333;
    font-size:25px;
    cursor:pointer;
    letter-spacing:2px;
    outline:none;
    box-shadow:0 3px 5px rgba(0,0,0,.3);

}

.model-container{
    display:flex;
    align-items:center;
    justify-content:center;
    min-height:100vh;
    width:100vw;
    position:fixed;
    top:0; left:0;
    background: rgba(0,0,0,.3);
    transform: scale(0);


}

.model-container .model{
    height:400px;
    max-width:350px;
    margin:0 10px;
    padding:20px;
    background:#fff;
    border-radius:5px;
    text-align:center;
    position:relative;

}

.model-container .model h3{
    color:#333;
    font-size:25px;
}

.model-container .model p{
    color:#666;
    margin:20px 0px;
    
}

.model-container .model button{
height:35px;
width:120px;
background:#333;
color:#fff;
outline:none;
border:none;
border-radius:50px;
font-size:17px;
cursor:pointer;
box-shadow:0 50px 15px rgba(0,0);

}

.model-container .model button:hover{
    opacity:.8;
}

.model-container .model .fa-times{
    position:absolute;
    top:15px; right:15px;
    font-size:25px;
    cursor:pointer;


}

</style>
</head>
<body>
    <div class="container">
        <button id="open">click me</button>
    </div>
    <div class="model-container">
      <div class="model">
        <i class="fas fa-heart"></i>
        <h3>ARGE AUCTION SHOP</h3>
        <br></br>
        
        <h4>Do you want to logout?</h4>
                
        <button>No</button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
         @csrf
        <button type="submit" class="btn btn-danger" href="{{ route('logout') }}">Logout</button>
        </form>
        <button>No</button>
        <i class="fas fa-times" id="close"></i>
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
    });
    </script>
</body>
</html>

















