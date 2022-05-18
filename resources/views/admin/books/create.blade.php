<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<div align="right">

<a class="btn btn-success" href="{{url('pending/user')}}"><i class="fa fa-list"></i>Users</a>
<a class="btn btn-primary" href="{{url('indexx')}}"><i class="fa fa-list"></i>Book details</a>
<a class="btn btn-primary" href="{{url('cmnts')}}"><i class="fa fa-list"></i>User Comments</a>
</div>

<form method="post" action="{{url('create')}}" enctype="multipart/form-data">
<body>
<div class="container-fluid">
<div class="row">
<div align="center">
<div class="well" style="width:500px">
{{csrf_field()}}

<div>Book No:</div>
<input type="text" name="no"  onblur='number(this)' value="{{old('no')}}">
<div id="num"></div>
<div>Book Name </div>
<input type="text" name="name" onblur='book(this)' value="{{old('name')}}">
<div id="name"></div>
<div>Author Name </div>
<input type="text" name="auther" onblur='author(this)' value="{{old('auther')}}">
<div id="au"></div>
<div>Publisher Name </div>
<input type="text" name="publisher" onblur='publish(this)' value="{{old('publisher')}}">
<div id="pl"></div>
<div>Location</div>
<input type="text" name="location" onblur='loca(this)' value="{{old('location')}}" >
<div id="locc"></div>
<div>Type </div>
<input type="text" name="type" onblur='tye(this)' value="{{old('type')}}">
<div id="typ"></div>

                                <div class="form-group @if($errors->first('image')) has-danger @endif">
                                    <label for="image">Image <small></label>
                                    <div class="fake-input">
                                        <input id="uploadFile" disabled="disabled" type="text">
                                        <div class="fileUpload">
                                            <input class="form-control-file" id="image" name="image" type="file" accept="image/x-png,image/gif,image/jpeg">
                                        </div>
                                    </div>
                                   
                                    @if($errors->first('image'))
                                        <label class="error">{{$errors->first('image')}}</label>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                <h5>Image</h5>
                                <div class="img" id="img">
                                    <img src="{{asset('media/no-image/no-image.png')}}" class=" img-fluid img-thumbnail" alt="San Fran" style="width:120px;">
                                </div><br>
                            </div>
                                
                                
                            </div>
                           
                            </div>
                        </div>
                              <div align="center">
                            <input type="submit" class="btn btn-lg btn btn-primary" onblur='onclick(this.value)' name="submit" value="Submit">
                            </div>
</div>
</div>
</body>
</form>
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




function number(name)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("num");
           if(name.value!='')
                     {
                     
                        if(name.value.length >=5)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 5 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}
function book(b)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("name");
           if(b.value!='')
                     {
                     
                        if(b.value.length >=5)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 5 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}

function author(al)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("au");
           if(al.value!='')
                     {
                     
                        if(al.value.length >=5)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 5 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}

function publish(pb)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("pl");
           if(pb.value!='')
                     {
                     
                        if(pb.value.length >=5)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 5 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}

function loca(lo)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("locc");
           if(lo.value!='')
                     {
                     
                        if(lo.value.length >=5)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 5 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}


function tye(tp)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("typ");
           if(tp.value!='')
                     {
                     
                        if(tp.value.length >=1)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 1 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}


function imge(im)
{
    var regx=/^[0-9a-zA-Z]+$/;
           var no=document.getElementById("img");
           if(im.value!='')
                     {
                     
                        if(im.value.length >=5)
                        {
                            no.textContent="";
                        }
                     
                        else
                          {
                            no.textContent="atleast 5 character";
                            no.style.color='red';
                            }
                           }
                        else{
    
                            no.textContent="required";
                            no.style.color='red'; 
}
}




 
</script>