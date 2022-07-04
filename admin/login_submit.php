<?php
require('connection.inc.php');
require('functions.inc.php');

$msg='';

if(isset($_POST['submit'])){

$name=get_safe_value($con,$_POST['username']);
// $email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);
$mobile=get_safe_value($con,$_POST['mobile']);
 
	// $added_on=date('Y-m-d h:i:s');
	$sql=mysqli_query($con,"insert into admin_users (username,password,mobile) values('$name','$password',$mobile)");
 
 
}
?> 


<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

      <style>
         .bg1{
               background: linear-gradient(to right, yellow, #d8363a, #dd3675, lightblue);
            }
      </style>

   </head>
   <body class="bg" id="body">
 	<script>
    
    function changeBack()
    {
        var back = document.getElementById('colorPicker').value;    
        document.getElementById('colorMsg').style.background = back ;
    }    
</script>


   
    
<!-- <div id="colorMsg"></div> -->



<select   id="colorPicker" onchange="JavaScript:changeBack()">
    <option value="transparent">None</option>
    <option value="yellow">Yellow</option>
    <option value="salmon">Salmon</option>
    <option value="lightblue">Light Blue</option>
    <option value="limegreen">Lime Green</option>
    <option value="cyan">Cyan</option>
    <option value="violet">Violet</option>
    <option value="red">Red</option>
</select>
<div id="colorMsg">
 
      <div class="sufee-login d-flex align-content-center flex-wrap">
      
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="post" id="colorPicker">
                     <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                     </div>
                  
                          <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                     </div>

                       <div class="form-group">
                        <label>mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Username" required>
                     </div>
                    
                     <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					</form>
					<div class="field_error"><?php echo $msg?></div>
               </div>
            </div>
         </div>
      </div>
  </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>