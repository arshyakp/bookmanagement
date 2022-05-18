<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
form{
      background-image: url("img/profile.jpg");
    }
</style>
<form method="post" action="{{url('changeprofile')}}" enctype="multipart/form-data" >

{{csrf_field()}}
@foreach($session as $key=> $sess)
<br><br><br>
<div align="center">
<div class="well" style="width:300px;">
<strong>First Name</strong>
<div class="form-group">
<input type="text" name="firstname" class="form-control" onblur='namevalidation(this)' value="{{$sess->firstname}}" ><br>
</div>
<div id='name'></div>
<div class="form-group">
<strong>Last Name</strong>
<input type="text" name="lastname" class="form-control" onblur='lastvalidation(this)' value="{{$sess->lastname}}"><br>
<div id='last'></div>
<div class="form-group">
<strong>Address</strong>
<input type="text" name="addrs" class="form-control" onblur='addresvalidation(this)' value="{{$sess->address}}"><br>
<div id='add'></div>
<div class="form-group">
<strong>Phone Number</strong>
<input type="text" name="phno" class="form-control" onblur='phonevalidation(this)' value="{{$sess->phnumber}}"><br><br>
<div id='ph'></div>
<div class="form-group">
<input type="submit" name="change" class="btn btn-success" value="Change">
</div>
@endforeach
</form>
<script>
 function namevalidation(inputtext)
       {
         
           var regx=/^[0-9a-zA-Z]+$/;
           var name=document.getElementById("name");
                        if(inputtext.value!='')
                     {
                        if(inputtext.value.length >=5)
                         {
                            
                             if(inputtext.value.match(regx))
                          {
                             name.textContent="";
                            }
                         
                          else
                           {
                              name.textContent="invalid input:only character ";
                              name.style.color='red';
                            }
                          }
                         else
                          {
                            name.textContent="atleast 5 character";
                             name.style.color='red';
                            }
                         }
                       else
                        {
                         name.textContent="Required";
                         name.style.color='red';  
                       }
                     }

function lastvalidation(lastinput)
          {
                      var regx=/^[0-9a-zA-Z]+$/;
                      var lname=document.getElementById('last');
                      if(lastinput.value!='')
                       { 
                        if(lastinput.value.length >=5)
                       {
                           if(lastinput.value.match(regx))
                           {
                      lname.textContent="";
                       }
                       
                       else{
                           lname.textContent="invalid input:only characters";
                           lname.style.color="red";
                       }
                       }
                         else
                        {
                      lname.textContent="atleast 5 character";
                      lname.style.color='red';
                         } 
                   
                       }
                     else
                        {
                     lname.textContent="Required";
                      lname.style.color='red';  
                      }
                        }


                        
   function phonevalidation(ph)
{
                        var nu=/^[0-9]+$/;
                        var phno=document.getElementById('ph');
                       if(ph.value!='')
                       {
                     if(ph.value.length ==10)
                         {
                         if(ph.value.match(nu))
                           {
                           phno.textContent="";
               
                         }
                      else
                      {
                     phno.textContent="only number"
                     phno.style.color='red';
                     }
                   }
                else
               {
                phno.textContent="atleast 10 digit";
                phno.style.color='red';
              } 
             }  
           else
                {
               phno.textContent="Required";
               phno.style.color='red';  
              }
           }

function addresvalidation(inputtext)
       {
         
           var regx=/^[0-9a-zA-Z]+$/;
           var name=document.getElementById("add");
                        if(inputtext.value!='')
                     {
                        if(inputtext.value.length >=5)
                         {
                            
                             if(inputtext.value.match(regx))
                          {
                             name.textContent="";
                            }
                         
                          else
                           {
                              name.textContent="invalid input:only character ";
                              name.style.color='red';
                            }
                          }
                         else
                          {
                            name.textContent="atleast 5 character";
                             name.style.color='red';
                            }
                         }
                       else
                        {
                         name.textContent="Required";
                         name.style.color='red';  
                       }
                     }
</script>