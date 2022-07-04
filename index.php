<?php require('top.php');
error_reporting(0);
?>
<style>
     .bg1{
        background-image: url(images/v8.png);
        background-position: center;
        height: 50px;
        width: 100%;
 
        background-size: cover;
        /*background-color: pink;*/

    }
    .new1{
        background: lightblue;
    }
</style>
<!--  <section>
    <div>
        <img src="images/v8.png" class="">
    </div>
     
 </section> -->
     <div class=" bg-primary">
                    <div class="row ">
                        <div class="col-md-7 text-center" style="margin-top: px;">
                            <div style="padding-top: 10px;">
                            <h1 style="color:pink; font-size: 30px; margin-left: 50px;">Faishion </h1>
                            <h3 style="color:darkorange; font-size: 22px; margin-top: -15px;"> Shopping Online</h3>
                            <p style="color:whitesmoke;">  The shoping comes with a business with a resolution of digital india.</p> <br> 
                            <button type="button" class="btn btn-danger" style="margin-bottom:20px;"><a href="index.php">shop NOW</a></button>
                            </div> 
                        </div>
                        <div class="col-md-5" style="margin-bottom:20px;">

                           <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/v1.png" alt="Los Angeles" style="width:100%; padding: 20px;">
      </div>

      <div class="item">
        <img src="images/v7.png" alt="Chicago" style="width:100%; padding: 20px">
      </div>
    
      <div class="item">
        <img src="images/v1.png" alt="New york" style="width:100%; padding: 20px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
 
 <div class="container" style="background-color:;"><br>

                 
                            <h2 class="text-center text-info mt-4">New Arrivals</h2>
                            <div class="row">

  
                 
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
							<?php
							$get_product=get_product($con,4);
							foreach($get_product as $list){
							?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id']?>">
                                                <img src="admin/media/<?php echo $list['image']?>" height="200" width="150">
                                        </a>
                                    </div>
                                    
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['name']?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize">MRP -><?php echo $list['mrp']?> RS </li>
                                            <li> PRICE -><?php echo $list['price']?>/-</li>
                                        </ul>
                                        <ul>
                                                  <div class="stars" style="color:orange;">
  
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <br>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Category Area -->
        <!-- Start Product Area -->
            
 <section class="new1">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <br>
                <br>
                <h1 class="" style="color:darkorange; font-size: 25px;"><b>BEST SELLER</b></h1>
                <br>
                <p class="text-info">Lorem Ipsum has been the industry's standard dummy text</p>
                <br>
                
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
                <div class="col-md-3">
            <!-- <div class="text-center"> -->
                   <div class="card">
                                    <div class="card-body pop">

                                    <img src="images/sue2.png" height="150px;" width="150px;">
                                      <div style="text-align:center; ">
                    <span class="price"><strong>Price : 1200/- </strong> </span>
                         
                            <h3>SHIRT</h3>
                            <div class="stars" style="color:orange;">
  
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                      
                        </div>
                                  </div>
                               </div>
                </div>
            </div>
                    <div class="col-md-3">
            <!-- <div class="text-center"> -->
                   <div class="card">
                                    <div class="card-body pop">

                                    <img src="images/s.png" height="150px;" width="150px;">
                                      <div style="text-align:center; ">
                    <span class="price"><strong>Price : 1200/- </strong> </span>
                         
                            <h3>SHIRT</h3>
                            <div class="stars" style="color:orange;">
  
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                      
                    
                        </div>
                                  </div>
                               </div>
                </div>
            </div>
                    <div class="col-md-3">
            <!-- <div class="text-center"> -->
                   <div class="card">
                                    <div class="card-body pop">

                                    <img src="images/mm3.png" height="150px;" width="150px;">
                                      <div style="text-align:center; ">
                    <span class="price"><strong>Price : 1200/- </strong> </span>
                         
                            <h3>SHIRT</h3>
                            <div class="stars" style="color:orange;">
  
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                           
                        
                                  </div>
                               </div>
                </div>
            </div>
        <div class="col-md-3">
            <!-- <div class="text-center"> -->
                   <div class="card">
                                    <div class="card-body pop">

                                    <img src="images/op1.png" height="150px;" width="150px;">
                                      <div style="text-align:center; ">
                    <span class="price"><strong>Price : 1200/- </strong> </span>
                         
                            <h3>SHIRT</h3>
                            <div class="stars" style="color:orange;">
  
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                       
                    
                        </div>
                                  </div>
                               </div>
                </div>
            </div>
           
        </div>


    </div>


            


</section>
        <!-- End Product Area -->
<?php require('footer.php')?>        