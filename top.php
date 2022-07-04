<?php
error_reporting(0);
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bits ecommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>

       <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
 
<style>
    .bg__cat--1 {
    background-color: whitesmoke;
}
.news__input input {
    background: white;
    border: 1px solid #f1ecec;
    height: 50px;
    padding: 0 24px;
}
     .bg-dark{

                  background: black;
                   /*linear-gradient(to right, lightblue, #d8363a, #dd3675, lightblue);*/
            height: 70px;
            /*position: fixed;*/
        }

        .inputt{
            /*border-radius: 25px;*/
            background-color: whitesmoke;
            width: 100%;
             margin-bottom: 10px;
 
            /*margin-left: 50px;*/
        }
      
   .htc__shopping__cart .ht{
    background: #c43b68;
    border-radius: 100%;
    color: #fff;
    /*padding: 2px;*/
    position: absolute;
   /* padding-right: 10px;
    margin-bottom: 20px;*/
    margin-left: -10px;
      margin-top: -4px;
    padding-top: 2px;
    height: 17px;
    width: 17px;
    font-size: 9px;
    text-align: center;
    justify-content: center;


}



 





.category :hover{
        background-color: gray;
    }
img{
    padding: 2px;

}

    .ht__cat__thumb {
    background-color: darkblue;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;

}

    
    .ht__cat__thumb :hover {
    background-color: green;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;

}
.text{
    color: white;
}
.text :hover{
    color: darkred;
}
.main__menu  li  a {
    color: #333333;
    display: block;
    font-size: 14px;
     height: 80px; 
    line-height: 70px;
    position: relative;
    text-transform: uppercase;
    font-family: 'Poppins', sans-serif;
}
.container {
    width: px;
}
.main__menu{
    width: ;
}
.logo{
    height: 70px;
}

   .input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
        
        }
          
        .iconn {
            margin-right: 12px;
            margin-bottom: 5px;
            
        }
     /*     
        .input-field {
        
            /*text-align: center;*/
        }

 

  
  .main__menu li {
     position: relative; 
    margin: 0 12px;
}   
 
 .w3-container, .w3-panel {
     padding: 0.00em 0px; 
 
 }
 .header__right{
    height: 68px;
 }

</style>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <header id="" class="bg-dark">
            <div id="" class="">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2"> 
                                <div class="logo">
                                 <!--     <a href="index.php"><h4 style="color: darkorange; font-size:20PX; font-family: cursive; background-color:wheat; padding:10px"></h4></a> -->

                                           <a href="index.php"><img src="images/logo/1.png" height="50px" width="120px"></a>

                                </div>
                            </div>
                            <div class="col-md-5">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                    
                                        <?php
										foreach($cat_arr as $list){
											?>
											<li><a href="categories.php?id=<?php echo $list['id']?>" style="color: pink; " class="cat"  ><?php echo $list['categories']?></a></li>

											<?php
										}
										?>

                         
                         
                                      </ul>
                                      <div>
                                          
                                      </div>
                                                                     
                                </nav>
                               
   
                            </div>
                            <div class="col-md-1 ">
                                  <div class="header__right">
                                <div style="color:">
                                     <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">  <i class="fas fa-search iconn"></i></button>
                                      <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <form action="search.php" method="get">
                  <input type="text" name="str" placeholder="Search for product name... " value="" style=" padding: 7px;" >
            </form>
 
      </div>
    </div>
  </div>

                                 </div>
                            </div>
                            
                              
                            

                                
                            </div>
                            <div class="col-md-1">
                                <div class="header__right">
                            
                                        <a href="contact.php"><span class="text" style="font-size: 12px;">Contact us</span></a>
                                    </div>
                        </div>

                            <div class="col-md-3">

                                <div class="header__right">
                                    <div class="">
                                        <?php if(isset($_SESSION['USER_LOGIN'])){

											echo '<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a> <a href="my_order.php"><span style="color:yellow;">my order</span></a>';
										}else{
											echo '<a href="login.php"><button type="button" class="btn btn-primary">Login/sigup</button></a>';
										}
                                        
										?>

										
                                    </div>
                                          <div class="row">

                                    <div class="htc__shopping__cart text">
                                         &nbsp; &nbsp;         &nbsp; &nbsp;<?php echo ($_SESSION['USER_NAME'])?> 
                                    
                                        <a class=" " href="#"><i class="fa fa-heart" style="color:wheat; font-size: 20px;"></i></a>
                                                <a href=""><span class="ht">12</span></a>

&nbsp;
&nbsp;



 
                                           <a  href="#"><i class="fa fa-shopping-cart" style="color:whitesmoke;"></i></a> 
                                        <a href="cart.php"><span class="htc__qua"><?php echo $totalProduct?></span></a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            
             
                </div>
            </div>

        </header>

           <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <!-- <script src="js/plugins.js"></script> -->
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>