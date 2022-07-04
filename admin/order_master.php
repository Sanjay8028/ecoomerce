<?php
require('top.inc.php');

$sql="select * from users order by id desc";
$res=mysqli_query($con,$sql);
?>

<div class="container bg-info mt-5">
		<div class="row">
			 	<div class="col-md-6">
				<div class="card-body">
				   <h4 class="box-title">USERS </h4>
				</div>
			</div>
				<div class="col-md-6 text-right">
				<div class="card-body">
				   <!-- <h4 class="">Fitter </h4> -->
				   <input type="text" id="myInput" name="" placeholder="search fitter...">
				</div>
			</div>
		</div>
	
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>date</th>
                <th>Address</th>
                <th>payment type</th>
                <th>payment status</th>
                <th>order status</th>
            </tr>
        </thead>
							<tbody id="myTable">
								<?php
								$res=mysqli_query($con,"select * from `order` order by id desc");
								while($row=mysqli_fetch_assoc($res)){
								?>
								<tr>
									<td class="product-add-to-cart"><a href="order_master_detail.php?id=<?php echo $row['id']?>"> <?php echo $row['id']?></a></td>
									<td class="product-name"><?php echo $row['added_on']?></td>
									<td class="product-name">
									<?php echo $row['address']?>,
									<?php echo $row['city']?>,
									<?php echo $row['pincode']?>
									</td>
									<td class="product-name"><?php echo $row['payment_type']?></td>
									<td class="product-name"><?php echo $row['payment_status']?></td>
									<td class="product-name"><?php echo $row['order_status']?></td>
									
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<script type="text/javascript">
							$(document).ready(function () {
    $('#example').DataTable();
});
						</script>
					 
			 
<?php
require('footer.inc.php');
?>