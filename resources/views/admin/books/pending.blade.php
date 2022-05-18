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
  <th>Book:No</th>
  <th> BookName</th>
  <th>Applied user</th>
  <th>Image</th>
  </thead>
  <tbody>
  </tr>
  @foreach($pend as $key => $pending)
<tr>
<td>{{$pending->books_no}}</td>
<td>{{$pending->book_name}}</td>
<td>
<div align='center'>
<strong><p>Name:<small>{{$pending->firstname}} {{$pending->lastname}}</small></p>
<p>Adress:<small>{{$pending->address}}</small></p>
<p><small>Phone Number:{{$pending->phnumber}}</small></p></strong>
</div></td>

<td>

    <img src="{{asset('/img/'.$pending->image)}}" width="100px">
        </td>
        <td>
        <!-- @if($pending->type=='accepted')
        
        <button class="btn-success">Accepted</button></td>
        @elseif($pending->type=='rejected')
        
        <button class="btn-danger">Rejected</button>
        @else( $pending->type=='pending') -->
        <button class="accept" data-id="{{$pending->bookid}}">Accepted</button>
        <button class="reject" data-id="{{$pending->id}}">Rejected</button>
      
        
     

        <!-- @endif -->
        
        
        </td>
        
        </tr>
        </div>

@endforeach
</table>
<script>

  $('.accept').click(function()
  {
  var id=$(this).attr('data-id');
  // alert(id);
  $.ajax({
               type:'get',
               url:'{{url('user/accept')}}',
               data:{
                 
                 'id':id
                 },
               success:function(data)
               
               
               {
                alert('successfully accepted');
                window.location.reload()
}
               
});
  })
});



$(document).ready(function()
{
  $('.reject').click(function()
  {
  var id=$(this).attr('data-id');
  // alert(id);
  $.ajax({
               type:'get',
               url:'{{url('user/rejected')}}',
               data:{
                 '_token':'{{csrf_token()}}',
                 'id':id
                 },
               success:function(data)
               
               {
                 alert("successfully rejected");
                 window.location.reload()
               }
});
  })
});




</script>
</form>