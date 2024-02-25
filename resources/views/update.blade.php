<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <style>
      body{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-image: url('https://adoption.microsoft.com/files/microsoft-teams/custom-backgrounds-gallery/community/nature/community-nature-Teams-background-112.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
     }
    </style>
  </head>

<body>
  <h2 style="margin-left: 15px;">UPDATE USER</h2>
<img  src="https://nofoodwaste.org/images/NFW-logo.png" style="height: 100px; float: right;">
<form action="{{url('update/'.$rec->id )}}"  method="post">
@csrf
<div class="d-flex flex-row align-items-center mb-4">
    
                    <!-- <div class="form-outline flex-fill mb-0">
                      <input type="hidden" id="name" name="id" class="form-control" :value="$myData->id" />
                      <label class="form-label" for="form3Example3c">Id</label>
                    </div>
                  </div> -->
                    <div>
                    <label class="form-label" for="form3Example3c" style="margin-left: 15px;">Name</label>
                      <input type="text" id="name" name="name" class="form-control" style="margin-left: 15px;" value="{{$rec->name}}"/>
                      
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div>
                    <label class="form-label" for="form3Example4c">Email</label>
                      <input type="email" id="email" name="email" class="form-control"  value="{{$rec->email}}"/>
                      
                    </div>
                  </div>
                  
                 
                  <button type="submit" style="margin-left: 15px;">Update</button>
</form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>