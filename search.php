<?php 
require('top.php');
 
	$str=mysqli_real_escape_string($con,$_GET['str']);
	if($str!=''){
		$get_product=get_product($con,'','','',$str);
	}else{
		?>
		<script>
		window.location.href='index.php';
		</script>
		<?php
 
	
}										
?>
<style>
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
  font-size: 25px;
  position: absolute;
  top: 25px;
  right: 1px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  /*text-align: center;*/
}
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
 
 
                <div class="container bg-info">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">&nbsp; Search</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
					<?php if(count($get_product)>0){?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                              
                               
                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <?php
										foreach($get_product as $list){
										?>
										<!-- Start Single Category -->
										<div class="col-md-4 col-lg-2 col-sm-4 col-xs-12">
											<div class="category">
												<div class="ht__cat__thumb">
											 
													 
												 

													<a href="product.php?id=<?php echo $list['id']?>">
												<img src="admin/media/<?php echo $list['image']?>" height="200" width="160">
											</a>
												 <div class="overlay">
											 
											 		 
									    <a href=" #" class="icon" title="wish">
									  
									    <i class="fa fa-heart" style="color:red"></i>
									  
							 
								     &nbsp;&nbsp;

									  </a>
									    <a href=" product.php?id=<?php echo $list['id']?>" class="icon" title="view">
									  
							 
									    <i class="fa fa-eye" style="color:black"></i>
							 
									

									  </a>

									  </div>
												</div>
												
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
                                    </div>
							   </div>
                            </div>
                        </div>
                    </div>
					<?php } else { 
						 echo '

						 <div class="container text-center ">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    Product Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, product not found!
                </div>
                <div class="error-actions">
                    <a href="index.php" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="contact.php" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>



						 ';
						


						
					} ?>
                
				</div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- End Banner Area -->
 
  <!--    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">  <i class="fas fa-search iconn"></i></button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <form action="search.php" method="get">
                  <input type="text" name="str" placeholder="Search... " value="" class="inputt input-field" style="background-color:whitesmoke; padding: 4px;" >
            </form>
 
      </div>
    </div>
  </div>
</div> -->

  <!--  <form action="search.php" method="get">
                                         <div class="form-group input-icons header__right">
                                              <i class="fa fa-search iconn"></i>
                                           <input type="text" name="str" placeholder="Search... " value="" class="inputt input-field" style="background-color:whitesmoke; padding: 4px;" > 
                                       </div> -->
                                       <!-- <button type="submit">search</button> -->
                                   <!-- </form> -->

                                 <!--     <div class="input-icons">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text"> -->