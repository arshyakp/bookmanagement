<html lang="en">
  <head>
  <meta charset="utf-8">
  <style>
  .accept
  {
     color: green;
  }
  .reject
  {
    color: red;
  }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<a href="{{('/pending/user/logout')}}">Logout</a>
<div align="right">

</div>
{{csrf_field()}}
<table class="table table-hover table-bordered" id="sampleTable">
  <tr>
  <div align="center">
  <th>Book name</th>
  <th>Comments</th>
  
  <th> User</th>
  </div>
  </thead>
  <tbody>
  </tr>
  @foreach($cmnt as $key => $cm)
<tr>
<td>{{$cm->book_name}}. <img src="{{asset('/img/'.$cm->image)}}" width="100px"></td>
<td>{{$cm->comments}}</td>

<td>
<div align='center'>
<strong><p>Name:<small>{{$cm->firstname}} {{$cm->lastname}}</small></p>
<p>Adress:<small>{{$cm->address}}</small></p>
<p><small>Phone Number:{{$cm->phnumber}}</small></p></strong>
</div></td>

<td>
@endforeach