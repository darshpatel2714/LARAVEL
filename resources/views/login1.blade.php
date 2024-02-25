<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
     body{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-image: url('https://www.popsci.com/uploads/2020/06/05/3NIEQB3SFVCMNHH6MHZ42FO6PA.jpg?auto=webp');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
     } 
a{
    text-decoration: none;
    font-size: 18px;
    color: black;
    padding: 5px 20px;
    transition: background-color .5s;
}
         
a:hover{
    background-color: white;
    color: black;
}
        </style>
</head>

<body>
<img  src="https://nofoodwaste.org/images/NFW-logo.png" style="height: 100px; float: right;">
<br>
<center><form action="/login2" method="post"  style="border: 2px solid; border-radius: 5px; box-shadow: 3px 3px 3px 3px; box-width: 50px;">
<div class="d-flex flex-row align-items-center mb-4">
   @csrf
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                
                    <div class="form-outline flex-fill mb-0" >
                        <h1 style="color: dark grey;">Login form</h1>
                      <input type="email" id="email" name="email" cla kjss="form-control" style="width: 300px;"/><br>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                     </div>
                   <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="password" name="password" class="form-control" style="width: 300px; margin-right: 100px;"/>
                      <label class="form-label" for="form3Example4c" style="margin-right: 100px;">Password</label>
                    </div>
                  </div>
                  <button type="submit" style="margin-left: 20px;">Login</button>              
                  <a href="/">Back</a> &nbsp;
                
</form></center>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>