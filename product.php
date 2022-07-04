


<?php 
require('top.php');

if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
        
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
	}
}else{
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>

 <!-- Start Bradcaump area -->
 <style>
     .fr__btn:hover {
    background: darkorange; none repeat scroll 0 0;
    color: #fff;
}



.fr__btn {
    background: orange; none repeat scroll 0 0;
    color: #fff;
}
body{
    background-color: lightgrey;
}


/*****************globals*************/
 

/*# sourceMappingURL=style.css.map */
 </style>
 <!-- <div class="container"> -->
  
        <div class="col-md-12 text-center mt-4">
            <div style="color:darkorange; font-size: 20px;  font-family: sans-serif; font: bold; text-align:;"> 

     <a class="" href="categories.php?id=<?php echo $get_product['0']['categories_id']?>"><?php echo $get_product['0']['categories']?></a>
     <span class=""><i class="zmdi zmdi-chevron-right"></i></span>
     <span class=""><b><?php echo $get_product['0']['name']?></b></span>
 </div>
 <hr style="border:1px solid;">
                                

            
        </div>
    </div>
</div>
 

 
     
        <section class=" bg-warning ">
            <!-- Start Product Details Top -->
            <div class="">
                <div class="container">

                    <div class="row">
                        <div class="col-md-5 text-right" >


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
  <img style="height:450px; width:450px;" src="admin/media/<?php echo $get_product['0']['image']?>"> 
      </div>

      <div class="item">
       <img style="height:450px; width:450px;" src="admin/media/<?php echo $get_product['0']['image']?>" class="im" height="270" width=""> 
      </div>
    
      <div class="item">
     <img style="height:450px; width:450px;" src="admin/media/<?php echo $get_product['0']['image']?>" height="270" width=""> 
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
                        <div class="col-md-7 smt-40 xmt-40">
                                     <div style="border:1px solid; padding:22px; background-color: lightblue; color: darkred;" >

                            <div class="">
                                <p style="background-color:darkred; width: 40px; color:whitesmoke;">new*</p>
                        
                                <h2><?php echo $get_product['0']['name']?></h2>
                                <!-- <div  class="pro__prize"> -->
                                    <p class="">MRP :  <?php echo $get_product['0']['mrp']?>/-</p>
                                   
                                    <p> PRICE <?php echo $get_product['0']['price']?>/-</p>
                                </div>
                                <ul>
                                          <div class="stars" style="color:orange;">
  
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <br>
                                </ul>
                                <p class="pro__info"><?php echo $get_product['0']['short_desc']?></p>
                                <div class="ht__pro__desc">
                                    <div class="sin__desc">
                                        <p><span>Availability:</span> In Stock</p>
                                    </div>
									<div class="sin__desc">
                                        <p><span>Qty:</span> 
										<select id="qty">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										</p>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>Categories:</span></p>
                                        <ul class="pro__cat__list">
                                            <li><a href="#"><?php echo $get_product['0']['categories']?></a></li>
                                        </ul>
                                </div>
                                    
                                
									
                            
								<a class="fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')">Add to cart</a>&nbsp;
                                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                 &nbsp;
                                <!-- <button type="button" class="btn btn-danger"> -->
                                <a href="index.php" class="fv-btn" style="color:; padding: 13px;">countinue shoping</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area 
	  Start Product Description -->

        <section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View -->
                        <ul class="pro__details__tab" role="tablist">
                            <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">description</a></li>
                        </ul>
                        <!-- End List And Grid View -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ht__pro__details__content">
                            <!-- Start Single Content -->
                            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                                <div class="pro__tab__content__inner">
                                    <?php echo $get_product['0']['description']?>
                                </div>
                            </div>
                            <!-- End Single Content -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Description -->
        
										
<?php require('footer.php')?>  
<style>
    .im{
        height: 300px;
    }
</style>      