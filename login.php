<?php 
require('top.php');
if(isset($_SESSION['USER_LOGIN'])  && $_SESSION['USER_LOGIN']=='yes'){
	unset($_SESSION['cart']);

	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<!-- Start Bradcaump area -->
       
        <!-- End Bradcaump area -->
        
		<!-- Start Contact Area -->
        <section class="bgr" style="background-image: url(images/b.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: transparent;
        height: 100%;


        ">
            <div class="container">
                <div class="row">
					<div class="col-md-4">
						<div class="contact-form-wrap mt--60">
					 
							</div>
							<div class="col-xs-12">
										<div class="col-xs-12">
								<div class="text-center">
									<h3 class="animated" style="color:darkorange; margin-right: 60px;">Login</h3>
								</div>
								<form id="login-form" method="post" style="border:2px solid; padding:10px; background-color:whitesmoke; width:70%;  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;">
									<div class=""  > 
										<div class="form-group">
											<input type="text" name="login_email" id="login_email" placeholder="Your Email*" style="width:100%">
										</div>
										<span class="field_error" id="login_email_error"></span>
									</div>
									<div class="">
										<div class=" form-group">
											<input type="password" name="login_password" id="login_password" placeholder="Your Password*" style="width:100%">
										</div>
										<span class="field_error" id="login_password_error"></span>
									</div>
									
									<div class="text-center">
										<button type="button" class="btn btn-danger" onclick="user_login()">Login</button>
									</div>
								</form>
								<div class="form-output login_msg">
									<p class="form-messege field_error"></p>
								</div>
							</div>
						</div> 
                
				</div>
				<div class="col-md-4">
					<div>
						<img src="images/girl.png" style="height: 500px;   ">
					</div>
				</div>

					<div class="col-md-4 bg-primary">
						<div class="">
							<div class="col-xs-12">
								<div class="text-center">
									<h3 class="animated" style="color:darkorange">Register here</h3>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="register-form" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%">
										</div>
										<span class="field_error" id="name_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="email" id="email" placeholder="Your Email*" style="width:100%">
										</div>
										<span class="field_error" id="email_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%">
										</div>
										<span class="field_error" id="mobile_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" name="password" id="password" placeholder="Your Password*" style="width:100%">
										</div>
										<span class="field_error" id="password_error"></span>
									</div>
									
									<div class=" text-center">
										<button type="button" class="btn btn-danger" style="margin-top: 10px;" onclick="user_register()">Register</button>
									</div>
								</form>
								<div class="form-output register_msg">
									<p class="form-messege field_error"></p>
								</div>
							</div>
						</div> 
                
				</div>
					
            </div>
        </section>
    
   
        <style>
        	#imgg{
        		background-repeat: no-repeat;
        		width: 100%;
        		height: 40px;
        		background-position: center;
        		background-size: cover;
        	}

        	.animated
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 20px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
.contact-box.name input{
	height: 60px;
	padding: 10px;
}

        </style>
<?php require('footer.php')?>        