<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
     body{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-image: url(https://cdn.create.vista.com/api/media/medium/364026684/stock-photo-top-view-cans-groats-zipper?token=);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  transition: background-color .5s;
     }
     ul{
    list-style-type: none;
    float: right;
    margin-top: 25px;
    transition: background-color .5s;
}

ul li{
    display: inline-block;
    transition: background-color .5s;t
}
ul a{
    text-decoration: none;
    font-size: 20px;
    color: black;
    padding: 10px 30px;
    transition: background-color .5s;
}

ul a:hover{
    background-color: black;
    color: white;
}
        </style>
</head>

<body>
<img  src="https://nofoodwaste.org/images/NFW-logo.png" style="height: 100px; float: left;">
<br>
<form action="{{route('store')}}" enctype="multipart/form-data" method="post" >
<div class="d-flex flex-row align-items-center mb-4" >
   @csrf
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                
                
                        <h1 style="color: black;">Donate Waste Food</h1><br><br>&nbsp; &nbsp;
                        <ul style="border: 2px solid; border-radius: 5px; box-shadow: 3px 3px 3px 3px;">
                            <li>
                      <input type="taxt" id="name" name="name" placeholder="enter your name" class="form-control" style="width: 300px;  margin-top: 10px;  margin-left: 10px;"/>
                      <label class="form-label"></label></li><br>
                   
               
                      <li><input type="number" id="phone" name="phone" placeholder="enter your phone no." class="form-control" style="width: 300px;"/>
                      <label class="form-label"></label></li><br>

                      <li><input type="taxt" id="area" name="area" placeholder="enter your area name" class="form-control" style="width: 300px;"/>
                      <label class="form-label"></label></li><br>

                      <li><input type="file" id="myfile" name="img" class="form-control" style="width: 300px;"/>
                      <label class="form-label">choose file</label></li><br>
                  
                  <center><button type="submit" style="margin-left: 20px;">Donate</button></center>
                  <br><br>
                  <center><a href="/dashboard">BACK</a> </center>&nbsp;
    </ul>
</form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>