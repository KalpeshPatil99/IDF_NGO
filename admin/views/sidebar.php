<!--Sidebar-->
	<div class="col-lg-2 col-md-4 topics" style="overflow-y: hidden; overflow-x:hidden; width: 20%;">
		<h3 style="margin-top: 0px;">Dashboard</h3>
		<ul class="categories">
			<?php
			    $link = $_SERVER['PHP_SELF'];
			    $link_array = explode('/',$link);
			    $page = end($link_array);
			?>
			<a href="home.php">
				<li <?php if($page=="home.php") { ?>  class="active"   <?php   }  ?> style="margin: 15px 0;">
					<span class="fa fa-home"></span>&nbsp;&nbsp;Home
				</li>
			</a>
			<hr>
			<a href="scholarship.php">
				<li <?php if($page=="scholarship.php") { ?>  class="active"   <?php   }  ?> style="margin: 15px 0;">
					<span class="fa fa-file-text-o"></span>&nbsp;&nbsp;Add Scholarship
				</li>
			</a>
			<a href="all_scholarship.php">
				<li <?php if($page=="all_scholarship.php") { ?>  class="active"   <?php   }  ?> style="margin: 15px 0;">
					<span class="fa fa-file-text-o"></span>&nbsp;&nbsp;Ongoing Scholarships
				</li>
			</a>
			<a href="view_scholarship.php">
				<li <?php if($page=="view_scholarship.php") { ?>  class="active"   <?php   }  ?> style="margin: 15px 0;">
					<span class="fa fa-file-text-o"></span>&nbsp;&nbsp;View Scholarships
				</li>
			</a>
			<hr>
			<a href="students.php">
				<li <?php if($page=="students.php") { ?>  class="active"   <?php   }  ?> style="margin: 15px 0;">
					<span class="fa fa-user"></span>&nbsp;&nbsp;View Students
				</li>
			</a>
			<hr>
			<a href="org.php">
				<li <?php if($page=="org.php") { ?>  class="active"   <?php   }  ?> style="margin: 15px 0;">
					<span class="fa fa-user"></span>&nbsp;&nbsp;View Organizations
				</li>
			</a>
		</ul>
	</div>
<!--Sidebar-->