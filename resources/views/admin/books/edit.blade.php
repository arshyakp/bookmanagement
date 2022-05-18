<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<form method="post" action="{{url('books/editing/'.$editt->id)}}" enctype="multipart/form-data"><br><br><br>
{{csrf_field()}}
<div class="well">
<div align="center">
<div>Book No:</div>
<input type="text" name="no" value="{{$editt->books_no}}">
<div>Name </div>
<input type="text" name="name" value="{{$editt->book_name}}">
<div>Author Name </div>
<input type="text" name="auther" value="{{$editt->auther_name}}">
<div>Publisher Name </div>
<input type="text" name="publisher" value="{{$editt->publisher_name}}">
<div>Location</div>
<input type="text" name="location" value="{{$editt->location}}" >
<div class="form-group @if($errors->first('image')) has-danger @endif">
                                    <label for="image">Image </label>
                                    <div class="fake-input">
                                        <input id="uploadFile" disabled="disabled" type="text">
                                        <div class="fileUpload">
                                            <input class="form-control-file" id="image" name="image" value="{{$editt->image}}" type="file" accept="image/x-png,image/gif,image/jpeg">
                                        </div>
                                    </div>
                                   
                                    @if($errors->first('image'))
                                        <label class="error">{{$errors->first('image')}}</label>
                                    @endif
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <h5>Image</h5>
                                <div class="img" id="img">
                                    <img src="{{asset('media/no-image/no-image.png')}}" class=" img-fluid img-thumbnail" alt="San Fran" style="width:120px;">
                                </div><br>
                            </div>
                        </div>
                        
<input type="submit" name="submit" value="Submit">
</div>
</div>
</form>
</div>

<script>
function readURL(input, img_con) {

if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
        $('#'+img_con).find('img').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#image").change(function() {
readURL(this, 'img');
$(this).parents('.form-group').find("#uploadFile").val(this.value);
});

var slug = function(str) {
str = str.replace(/^\s+|\s+$/g, ''); // trim
str = str.toLowerCase();

// remove accents, swap ñ for n, etc
var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
var to   = "aaaaaeeeeeiiiiooooouuuunc------";
for (var i=0, l=from.length ; i<l ; i++) {
    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
}

str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
    .replace(/\s+/g, '-') // collapse whitespace and replace by -
    .replace(/-+/g, '-'); // collapse dashes

return str;
};

$(document).on('change', '#name', function(){
$slug = slug($(this).val());
$('#slug').val($slug);
});

$(document).on('change', '#slug', function(){
$slug = slug($(this).val());
$('#slug').val($slug);
});

</script>