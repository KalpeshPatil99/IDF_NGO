<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php');
}
include 'header_open.php';
include 'header_close.php';
include 'nav.php';
include 'sidebar.php';
?>


<div class="col-lg-9 col-md-8" style="overflow-x:hidden; width: 80%; margin: auto;">
	<div class="col-md-12 table-responsive">          
		<table class="table table-bordered " style="text-align: center; border-radius: 5px; margin-top: 20px;">
		  	<thead>
			    <tr style="background-color: #EFEEEE">
			      <th scope="col" class="tb_head">Scholarship Name</th>
			      <th scope="col" class="tb_head">Scholarship Description</th>
			      <th scope="col" class="tb_head">Scholarship Type</th>
			      <th scope="col" class="tb_head">Reward</th>
			      <th scope="col" class="tb_head">Approve Scholarship</th>
			    </tr>
		  	</thead>
		  	<tbody>
				
	            <?php
	            include '../Admin_modules/manage_scholarship.php';
	            foreach ($sch_fetch as $key => $value) {?>
	                    <tr>
	                        <td><?php echo $value['name'];?></td>
	                        <td><?php echo $value['description'];?></td>
	                        <td><?php echo $value['scholarship_type'];?></td>
	                        <td><?php echo $value['reward'];?></td>
	                        <td>
                    			<form action="view_scholarship.php" method="post">
                    				<input type="hidden" name="sch_id" value="<?php echo $value['sch_id'];?>" />
                    				<button class="btn-approve" type="submit" name="submit">APPROVE</button>
                    			</form>
                    		</td>
	                    </tr>
	                
	                <?php 
	                }
	            ?>
					    
			</tbody>
		</table>
	</div>
</div>

		
<?php include 'footer.php';
?>