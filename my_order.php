 <?php 
require('top.php');
if(!isset($_SESSION['USER_LOGIN'])){
   ?>
   <script>
   window.location.href='index.php';
   </script>
   <?php
}
?>
 
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
 

            <div class="container">
                         <h3 style="color: darkblue; text-align:center; font-size: 20PX; background-color:blue; padding: 10px;">MY ORDER</h3>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">

                                    <table>

                                        <thead>

                                            <tr style="background-color: grey;">
                                                <th class="product-thumbnail">Order ID</th>
                                                <th class="product-name"><span class="nobr">Order Date</span></th>
                                                <th class="product-price"><span class="nobr"> Address </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
                                    <th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
                                    <th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                 <?php 
                                 $uid=$_SESSION['USER_ID'];
                                 $res=mysqli_query($con,"select  * from `order` where user_id='$uid' order by id desc");
                                 while($row=mysqli_fetch_assoc($res)){


                                       
                                     
                                 ?>
                                            <tr style="background-color:orange;">
                                    <td class=""><a href="order_details.php?id=<?php echo $row['id']?> "style="background-color: darkred; font-size: 20PX; color: white; padding: 20PX;" > <?php echo $row['id']?> </a></td>
                                                <td class="product-name"><?php echo $row['added_on']?></td>
                                                <td class="product-name">
                                    <?php echo $row['address']?><br/>
                                    <?php echo $row['city']?><br/>
                                    <?php echo $row['pincode']?>
                                    </td>
                                    <td class="product-name"><?php echo $row['payment_type']?></td>
                                    <td class="product-name"><?php echo ucfirst($row['payment_status'])?></td>
                                    <td class="product-name"><?php echo $row['order_status']?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                        
<?php require('footer.php')?>        