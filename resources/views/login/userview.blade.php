<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <style>
table
    {
      background-image: url("img/library.jpeg");
    }
    th{
       color:#00ffff;
    }
    td{
      color:#ff8c00;
    }
    
 
  </style>
  <thead>
  <div class="img">
  <div class="container">
  <div align="right">
  <a href="{{('profile')}}">Profile</a>
  <a href="{{('logout')}}">Logout</a>
  </div>
  <table class="table table-hover table-bordered" id="sampleTable">
  <div align="center">
  <body>
  <h1><strong>Popular books</strong></h1>
  </div>
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
  @foreach($view as $key => $books)
<tr>
<td>{{$books->books_no}}</td>
<td>{{$books->book_name}}</td>
<td>{{$books->auther_name}}</td>
<td>{{$books->publisher_name}}</td>
<td>{{$books->location}}</td>
<td>

    <img src="{{asset('/img/'.$books->image)}}" width="100px">
        </td>
        @if($books->type=='accepted')

    <td><button class="btn-success">Booked</button><br><br>
    

    <!-- <button class="more" onclick="window.location='{{ url("logindex/more/books") }}'" data-id="{{$books->id}}">more book</button></td> -->

   @elseif($books->type=='rejected')

    <td><button class="btn-danger">Rejected</button>
    <p><small>Out of stoke</small></p>
    </td>

    @else($books->type=='pending')
    
     <td><button class="bu"  data-id="{{$books->id}}">Apply</button>
    
    @endif
    
    </td><br>
    <td>
    <div class="well">
    <div class="form group">
    <input type="text" name="name" id="name">
    </div><br>
    <div align="center">
    <button class="cmnt"  data-id="{{$books->id}}">Sent</button>
    
    </div>
    <div align="left">
    <button class="del"  data-id="{{$books->id}}">Delete</button>
    </div>
    </div>
    </td>
  
</div>
</div>
</div>
</body>
        @endforeach
</table>


<script>
$(document).ready(function()
{
  $('.bu').click(function()
  {
 
  var id=$(this).attr('data-id');
  // alert(id);
  $.ajax({
               type:'get',
               url:'{{url('typeinsert')}}',
               data:{
                 '_token':'{{csrf_token()}}',
                 'id':id
                 },
               success:function(data)
      
               {
                 alert("successfully applied");
                 
               }
});
  })
});




 
  
 
  $('.cmnt').click(function()
  {
  var id=$(this).attr('data-id');
  // alert(id);
  $.ajax({
               type:'post',
               url:'{{url('userComment')}}',
               processing:true,
               serverSide:true,
               data:{
                 '_token':'{{csrf_token()}}',
                 'id':id,'name': $('input[name=name]').val()
                 },
                
               success:function(data)
      
               {
                 alert('comment successfull');
                 
               }
});
})
$('.del').click(function()
  {
  var id=$(this).attr('data-id');
  alert(id);
  $.ajax({
               type:'get',
               url:'{{url('deleteComment')}}',
               data:{
                 '_token':'{{csrf_token()}}',
                 'id':id
                 },
               success:function(data)
      
               {
                 alert(data);
                 
               }
});
  });


</script>

