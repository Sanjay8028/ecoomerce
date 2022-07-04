<?php 
require('top.php');
if(isset($_GET['id']) && $_GET['id']!=''){
	$cat_id=mysqli_real_escape_string($con,$_GET['id']);
	if($cat_id>0){
		$get_product=get_product($con,'',$cat_id);
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
<style>
/*	.hw{
		display: none;
		text-align: center;
	 
	}
	.ht__cat__thumb:hover + .hw{
		display: block;
	 
		 

	}*/

.ht__cat__thumb {
  position: relative;
  display: ;

  
}

 

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .1s ease;
  background-color: wheat;
  display: block;
}

.ht__cat__thumb:hover .overlay {
  opacity: 1;
  border: 4px solid;
}

.icon {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 25px;
  right: 1.5px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  /*text-align: center;*/
}

.fas:hover {
  color: orange;
}
.fa-heart{
	background-color: whitesmoke;

}
 

</style>
 
                <div class="bg-info">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                        	<nav>
                   
                                  <a class="breadcrumb-item" href="index.php">HOME</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">&nbsp; Product</span>
                                </nav>
                                <div class="text-left">
                                  <select style="width:15%; color: darkorange;  margin-left: 30px; margin-top: -30px;">
             		<option>Defoult filtter</option>
             		<option>price high to low</option>
             		<option>price low to high</option>
             		<option>sort by rating</option>
             		<option>sort by discount</option>
             	</select>
             </div>
                            </div>


                        </div>

                    </div>
 
   
           
                <section class="sec">
            
               
					<?php if(count($get_product)>0){?>
                  
             
                            <!-- Start Product View -->
                            <div class="container sec">
                            <div class="row sec">
                          
                                        <?php
										foreach($get_product as $list){
										?>
										<!-- Start Single Category -->
										<div class=" col-sm-2 col-xs-12 category">

											<div class="category">

												<div class="ht__cat__thumb"> 
													<a href="product.php?id=<?php echo $list['id']?>">
												<img src="admin/media/<?php echo $list['image']?>" height="200" width="160" style="padding: px;
												" >
											</a>
											 
											 <div class="overlay">
											 
											 		 
									    <a href=" #" class="icon" title="wish">
									  
									    <i class="fa fa-heart" style="color:red; background-color:white; width: 30px; height: 30px; border-radius: 100%; text-align: ; padding:4px;"></i>
									  
							 
								     &nbsp; &nbsp;  
								     &nbsp;   
								    

									  </a>
									    <a href=" product.php?id=<?php echo $list['id']?>" class="icon" title="view">
									  
							 
									    <i class="fa fa-eye" style="color:black; background-color:white; width: 30px; height: 30px; border-radius: 100%; text-align: ; padding:4px;"></i>
							 
									

									  </a>

									  </div>
												</div>
											<!-- 	<div class="hw">
													<div style="color:darkred; font-size:20px;">wish &nbsp; &nbsp;<i class="fas fa-heart"></i></div>
												</div> -->
												
												<div class="fr__product__inner">
													<h4><a href="#"><?php echo $list['name']?></a></h4>
													<ul class="">
														<li class="">mrp:<?php echo $list['mrp']?>/-</li>
														<li>price: <?php echo $list['price']?>/-</li>
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
																<ul class="">
														<li class="">mrp:<?php echo $list['short_desc']?></li>
									 
													</ul>
												</div>
											</div>
										</div>
										<?php } ?>
                               
                       
					<?php } else { 
						// echo "Data not found";
					} ?>
                
		 
		</div>
 
</section>

        <!-- End Product Grid -->
        <!-- End Banner Area -->
 <?php require('footer.php'); ?>
 <style>
 .category :hover{
 		background-color: gray;
 		/*border: 2px solid;*/
 	}


 	.ht__cat__thumb {
    background-color: darkblue;

    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;

}

 	
 	.ht__cat__thumb :hover {
    background-color: transparent;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;


}
.sec{

	margin-bottom: 8px;
	background-color: wheat;

	}

 </style>
