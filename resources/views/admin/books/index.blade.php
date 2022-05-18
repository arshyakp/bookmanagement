<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <thead>
  <div align="right">
  
  <a href="{{('login')}}">Logout</a>
  </div>
  <table class="table table-hover table-bordered" >
  <tr>
  <th>Book:No</th>
  <th>Name</th>
  <th>Auther Name</th>
  <th>Publisher Name</th>
  <th>Lacation</th>
  <th>Image</th>
  
  </thead>
  
  <tbody>
  </tr>
  @foreach($boo as $key => $books)
<tr>
<td>{{$books->books_no}}</td>
<td>{{$books->book_name}}</td>
<td>{{$books->auther_name}}</td>
<td>{{$books->publisher_name}}</td>
<td>{{$books->location}}</td>
<td>

    <img src="{{URL::asset('/img/'.$books->image)}}" width="100px" height="100px">
        </td>
        <td><a href="{{('books/edit/'.$books->id)}}">Edit</a>
        <a href="{{('books/Destroy/'.$books->id)}}">Delete</a> </td>

        
        
        </div>
@endforeach
</table>

<tbody>
<script>
  //  function sample(pending)
  //  {

   
  //  $.ajax({
  //               url:'{{url('pend')}}',
  //               type:"post",
  //               datatype:'JSON',
  //               data: {'name':name},
  //               // contentType:false,
  //               // cache:false,
  //               // processData:false,
                
  //               success:function(data)
  //               {
  //               alert('success');
  //               }
  //             });
  //  }
</script>
