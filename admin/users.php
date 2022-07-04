<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from users where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from users order by id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders bg-info">
	   <div class="row">
		  <div class="col-xl-12 ">
			 <div class="card">
					 	<div class="row bg-info">
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
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table table-striped table-bordered">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Email</th>
							   <th>Mobile</th>
							   <th>Date</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody id="myTable" style="background-color:;">
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['mobile']?></td>
							    <td><?php echo $row['date']?></td> 
							   <td>
								<?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>