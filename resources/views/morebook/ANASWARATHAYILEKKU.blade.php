<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div align="right">

</div>
{{csrf_field()}}
<table class="table table-hover table-bordered" id="sampleTable">
  <tr>
  <th>Book:No</th>
  <th>Name</th>
  <th>Auther Name</th>
  <th>Publisher Name</th>
  <th>Location</th>
  <th>Image</th>
  </thead>
  <tbody>
  </tr>
  @foreach($book as $key => $bookzz)
<tr>
<td>{{$bookzz->books_no}}</td>
<td>{{$bookzz->books_name}}</td>
<td>{{$bookzz->auther_name}}</td>
<td>{{$bookzz->publisher_name}}</td>
<td>{{$bookzz->location}}</td>
<td>

    <img src="{{asset('/img/'.$bookzz->image)}}" width="100px">
        </td>
       

<td><button class="bookOne" data-id="{{$bookzz->id}}">Apply</button>


 @endforeach
        <script>
$(document).ready(function()
{
  $('.bookOne').click(function()
  {
  var id=$(this).attr('data-id');
  alert(id);
  $.ajax({
               type:'post',
               url:'{{url('typeinsert')}}',
               data:{
                 '_token':'{{csrf_token()}}',
                 'id':id
                 },
               success:function(data)
      //          if (data == "refresh"){
      // window.location.reload()
               {
                 alert("successfully applied");
                 
               }
});
  })
});
</script>