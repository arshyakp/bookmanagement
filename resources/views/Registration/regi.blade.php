<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.form-group
{
  width:300px;
}
body
  {
    background-image: url("img/high.jpg");
  }

</style>


<form method="post" action="{{url('regi/create')}}" enctype="multipart/form-data" >
{{csrf_field()}}
<div align="center">
<div class="container-fluid">
<br><br>
<div class="well" style="width:350px;">
<div class="row">
<body>

<strong>First Name</strong><br>
<input type="text" name="firstname"  onblur='namevalidation(this)' value="{{old('firstname')}}" ><br>
<div id='name'></div>

<strong>Last Name</strong><br>
<input type="text" name="lastname"  onblur='lastvalidation(this)'  value="{{old('lastname')}}"><br>
<div id='last'></div>

<strong>Address</strong><br>
<input type="text" name="addrs"  onblur='addressvalidation(this)' value="{{old('addres')}}"><br>
<div id='addrs'></div>

<strong>Phone Number</strong><br>
<input type="text" name="phno"  onblur='phonevalidation(this)' value="{{old('phno')}}"><br>
<div id='ph'></div>

<strong>Email</strong><br>

<input type="text" name="email"   onblur='emailvalidation(this)'value="{{old('email')}}"><br>
<div id='mail'></div>

<strong>Password</strong><br>
<input type="password" name="password" onblur='passwordvalidation(this)'  value="{{old('password')}}"><br>
<div id='pass'></div>

<strong>type</strong><br>
<input type="text" name="type"  onblur='typevalidation(this)' value="{{old('type')}}">
<div id='typz'></div><br><br>

<input type="submit" name="submit" class="btn btn-larag btn btn-success " onclick='val(this.value)' value="Register">

<p>already registerd</p><a href='login'>login</a>
</body>
</div>
</div>
</div>
</div>
<form>

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

function addressvalidation(addrs)
              {
                      var regx=/^[0-9a-zA-Z]+$/;
                       var address=document.getElementById('addrs');
                       if(addrs.value!='')
                         {
                    if(addrs.value.length >=5)
                     {
                     address.textContent="";
                       }
                        else
                        {
                        address.textContent="atleast 5 character";
                          address.style.color='red';
                        } 
                    }
                     else
                          {
                         address.textContent="Required";
                           address.style.color='red';  
                        }
                 }


 function emailvalidation(emaill)
{
    
                           var emails=document.getElementById('mail');
                           var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                           if(emaill.value!='')
                           {
                            if(emaill.value.match(mailformat))
                          {
                      emails.textContent="";
                         }
                         else
                      {
                   emails.textContent="invalid email";
                   emails.style.color='red';
                       }
                    }
                     else
                     {
                    emails.textContent="required";
                    emails.style.color='red';
                    }
                 }

function passwordvalidation(ph)
{
                        var nu=/^[0-9]+$/;
                        var phno=document.getElementById('pass');
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
     


    function typevalidation(type)
{
                       var regx=/^[0-9a-zA-Z]+$/;
                        var typee=document.getElementById('typz');
                       if(type.value!='')
                       {
                     if(type.value.length ==10)
                         {
                         if(type.value.match(nu))
                           {
                            typee.textContent="";
               
                         }
                      else
                      {
                        typee.textContent="only number"
                        typee.style.color='red';
                     }
                   }
                else
               {
                typee.textContent="atleast 10 digit";
                typee.style.color='red';
              } 
             }  
           else
                {
                  typee.textContent="Required";
                  typee.style.color='red';  
              }
           }

    
</script>
</body>
</html>