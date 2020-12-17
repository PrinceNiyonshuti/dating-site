
function Ben_way_to_get_element(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}


function login1(){

 Ben_way_to_get_element('Message1').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";

 var username1=$('#username1').val();
 var password1=$('#password1').val();
 
 $.ajax({
     type:'POST',
     url: 'js/login1.php',
     data:{
         username1:username1,
         password1:password1,
 
     },
     
     success: function (response){
         $("#Message1").html(response);
     }
 
 });
 
 }


//////////////////////////////////////////////////////////////////////////////////////////////
// new user

function new_client(){
        Ben_way_to_get_element('new_client_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Account for you . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var f_name=Ben_way_to_get_element('f_name').value;
        var dob=Ben_way_to_get_element('dob').value;
        var gender=Ben_way_to_get_element('gender').value;
        var country=Ben_way_to_get_element('country').value;
        var city=Ben_way_to_get_element('city').value;
        var email=Ben_way_to_get_element('email').value;
        var prog=Ben_way_to_get_element('prog').value;
        var username=Ben_way_to_get_element('username').value;
        var password=Ben_way_to_get_element('password').value;
      
        formdata.append('f_name',f_name);
        formdata.append('dob',dob);
        formdata.append('gender',gender);
        formdata.append('country',country);
        formdata.append('city',city);
        formdata.append('email',email);
        formdata.append('prog',prog);
        formdata.append('username',username);
        formdata.append('password',password);
      
        ajax1.open('POST', 'account/client_data/new_client.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('new_client_message').innerHTML=ajax1.responseText;
      
        }; 
}

