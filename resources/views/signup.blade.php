<!DOCTYPE html>
<html>
<head>
    <title>signup</title>
<style>

body{
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   background-image: url('https://images.pexels.com/photos/1029783/pexels-photo-1029783.jpeg?cs=srgb&dl=pexels-dazzle-jam-1029783.jpg&fm=jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
* {box-sizing: border-box}
input[type=text], input[type=password] {
   width: 100%;
   font-size: 10px;
   padding: 15px;
   margin: 5px 0 22px 0;
   display: inline-block;
   border: none;
   background: #f1f1f1;
}
label{
   font-size: 15px;
   color: white;
}
input[type=text]:focus, input[type=password]:focus {
   background-color: #ddd;
   outline: none;
}
hr {
   border: 1px solid #f1f1f1;
   margin-bottom: 25px;
}
button {
   font-size: 15px;
   font-weight: bold;
   background-color: rgb(10, 119, 13);
   color: white;
   padding: 10px 15px;
   margin: 8px 0;
   border: none;
   border-radius: 8px;
   cursor: pointer;
   width: 20%;
   opacity: 0.9;
}
button:hover {
   
   opacity:1;
}


.formContainer {
   padding: 16px;
}
.formContainer p{
   font-size: 20px;
}
 a{
    text-decoration: none;
    font-size: 20px;
    color: white;
    padding: 8px 25px;
    transition: background-color .5s;
}

 a:hover{
    background-color: green;
    color: white;
}
</style>
<body backgroun>
    <div style="color: white;">
   @if(Session::has('success'))
   <div class="alert alert-success">
     {{Session::get('success')}}
   </div>
     @endif
    </div>
<img  src="https://nofoodwaste.org/images/NFW-logo.png" style="height: 100px; float: right;">
<form method="post" action="{{route('store_food')}}">
    @csrf
<div class="formContainer" style="height:600px; width:500px; box-shadow:5px 5px 5px 5px; border-radius:20px; margin-left: 400px;">
<h1 style="color: white;">Sign Up</h1>

<hr>     

<label for="name"><b>Name</b></label><br>
<input type="text" placeholder="Enter name" name="name" required><br>
<label for="email"><b>Email</b></label><br>
<input type="text" placeholder="Enter Email" name="email" required><br>
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
<label for="password"><b>repeatpassword</b></label>
<input type="password" placeholder="Enter Password" name="repeatpassword" required>



<div>

<button type="submit">Sign Up</button>
<a href="/">Back</a> &nbsp;
</div>
</div>
</form>
</body>
</html>