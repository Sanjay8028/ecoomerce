<?php
require('connection.inc.php');
require('functions.inc.php');
if(isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']!=''){

}else{
	header('location:login.php');
	die();
}
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></script>
      <script src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min"></script>

       
<style>
   
   aside.left-panel {
    background: black;
   }
   .navbar{
      background-color: black;
   }
</style>





   </head>

   <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
   $(document).ready(function () {
    $('#example').DataTable();
});
</script>
   <style >
       .right-panel header.header {
    /*background: #042406;*/
        /*background: linear-gradient(to right, yellow, #d8363a, #dd3675, lightblue);*/
        background-color: gray;
     }
    
     .menutoggle{
      margin-left: 200px;
   

     }
     .navbar .navbar-nav li a{
      color: white;
     }
     .menu-title{
      background-color: orange;
     }
    .menutoggle {
    background-color: transparent;
    color: black!important;
    cursor: pointer;
 }
 
 
   </style>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse ">
               <ul class="nav navbar-nav">
                  <li class="menu-title" style="color:blue;">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="categories.php" > Categories Master</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="product.php" > Product Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="order_master.php" > Order Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > User Master</a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="contact_user.php" > Contact Us</a>
                  </li>
				  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="">
                  <a class="navbar-brand" href="../index.php"><h3 style="color:blue;">Ecommerce</h3></a>
                  <!-- <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a> -->
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">Welcome :<span style="color:greenyellow;"><b><?php echo ($_SESSION['ADMIN']) ?></b></span></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>