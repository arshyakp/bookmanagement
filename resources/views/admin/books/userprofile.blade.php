<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



{{csrf_field()}}
@foreach($user as $key=> $users)
<br><br><br>
<div align="center">
<div>First Name</div>
<input type="text" name="firstname" value="{{$users->firstname}}" ><br>
<div>Last Name</div>
<input type="text" name="lastname" value="{{$users->lastname}}"><br>
<div>Address</div>
<input type="text" name="addrs" value="{{$users->address}}"><br>
<div>Phone Number</div>
<input type="text" name="phno" value="{{$users->phnumber}}"><br><br>


@endforeach
