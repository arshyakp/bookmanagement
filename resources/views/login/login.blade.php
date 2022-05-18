
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body
  {
    background-image: url("img/background.jpg");
  }
  
   
</style>
</head>


<form method="post" action="{{url('loginDirect')}}" enctype="multipart/form-data" ><br><br>
{{csrf_field()}}
<body>
<div class="container" style="">

<div align="center"><br><br>
<div class="well" style="width:300px; height:300px;">
<strong>Email</strong><br>
<div class="form-group">
<input type="text" class="form-control" name="email" ><br>
</div>
<div class="form-group">
<strong>Password</strong><br>
<input type="password" class="form-control" name="password"><br>
</div>
<input type="submit" class="btn btn-primary" name="login" value="login">
<p>Create a account <p><a href='index'>Registred now</a>
</div>
</div>
</body>
<form>
</div>
