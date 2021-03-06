
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

       <?php echo form_open('backend/login/login_admin');
      
       
       ?>
        <div class="input-group mb-3">
          <input id="user_name" type="text" name="user_name" class="form-control" placeholder="User Name">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
                  
          </div>
         
        </div>
                      <span style="color: red" id="warning" ></span>
           
        <div class="input-group mb-3">
          <input id="password" type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <span style="color: red" id="warning2" ></span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button id="submit" type="submit" class="btn btn-primary btn-block">LOGIN </button>
          </div>
          <!-- /.col -->
        </div>
          <?php echo form_close();?>


      

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_urL()?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/template/dist/js/adminlte.min.js"></script>
 <!-- <script type="text/javascript">  
  
  // Ajax post  
  $(document).ready(function(){  
  $("#submit").click(function(){  
  var user_name = $("#user_name").val();  
  var password = $("#password").val();  
  // Returns error message when submitted without req fields.  
  if(user_name=='')  
  {  
                $('#warning').html("User Name Tidak Boleh Kosong *");
                $("#warning").css("color", "red");
                $("#btn").attr("disabled",true);  
  } 
  else if (password=='')
  {
              $('#warning2').html("Password Tidak Boleh Kosong*");
                $("#warning2").css("color", "red");

  }

  else  
  {  
  // AJAX Code To Submit Form.  
  $.ajax({  
  type: "POST",  
  url:'<?php echo base_url('Backend/Login/login_admin'); ?>',
  data: {user_name:user_name, password: password},  
  cache: false,  
  success: function(result){  
      if(result!=0){  
          // On success redirect.  
      window.location.replace(result);  
      }  
      else  
               $('#warning').html("Username is Used*");
                $("#warning").css("color", "red");
                $("#btn").attr("disabled",true);;  
  }  
  });  
  }  
  return false;  
  });  
  });  
  </script>  -->
</body>
</html>
