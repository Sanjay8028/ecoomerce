 <?php 
require('top.php');

 

?>
<style>
    

.buttons-cart a {
    background: orange; none repeat scroll 0 0;
    /* color: #3f3f3f;
</style>
 
        <!-- End Bradcaump area -->
 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr style="background-color: grey; color: darkorange;">
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">products_NAME</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(isset($_SESSION['cart'])){
                                            foreach($_SESSION['cart'] as $key=>$val){
                                            $productArr=get_product($con,'','',$key);
                                            $pname=$productArr[0]['name'];
                                            $mrp=$productArr[0]['mrp'];
                                            $price=$productArr[0]['price'];
                                            $image=$productArr[0]['image'];
                                            $qty=$val['qty'];
                                            ?>
                                            <tr>
                                                <td class=""><a href="#"><img src="admin/media/<?php echo $image?>" height="100" width="100" /></a></td>
                                                <td class=""><a href="#"><?php echo $pname?></a>
                                                 <!--    <ul  class="pro__prize">
                                                        <li class="old__prize">MRP <?php echo $mrp?></li>
                                                        <li>price <?php echo $price?></li>
                                                    </ul> -->
                                                </td>
                                                <td class=""><span class="amount"><?php echo $price?></span></td>

                                                 <td class=""><input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>"
                                             onclick="manage_cart('<?php echo $key?>','update')"> 
                                                </td>
                                                <td class=""><?php echo $qty*$price?></td>
                                                <td class=""><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','remove')"><i class="icon-trash icons"></i></a></td>
                                            </tr>

                                            <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">

                                          
                                        <div class="buttons-cart">
                                            <a href="index.php">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                            <a href="checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        
                                        
<?php require('footer.php')?>        