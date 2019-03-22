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
			      <th scope="col" class="tb_head">Name</th>
			      <th scope="col" class="tb_head">Email</th>
			      <th scope="col" class="tb_head">Institution</th>
			      <th scope="col" class="tb_head">Age</th>
			      <th scope="col" class="tb_head">Family Income</th>
			      <th scope="col" class="tb_head">Highest Qualification</th>
			    </tr>
		  	</thead>
		  	<tbody>
				
	            <?php
	            include '../Admin_modules/fetch_students.php';
	            foreach ($student_fetch as $key => $value) {?>
	                    <tr>
	                        <td><?php echo $value['name'];?></td>
	                        <td><?php echo $value['email'];?></td>
	                        <td><?php echo $value['institution'];?></td>
	                        <td><?php echo $value['age'];?></td>
	                        <td><?php echo $value['income'];?></td>
	                        <td><?php echo $value['high_q'];?></td>
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