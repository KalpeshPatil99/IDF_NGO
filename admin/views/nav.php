	<nav class="navbar navbar-static-top">
  	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">Brand</a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      
	      <ul class="nav navbar-nav navbar-right">
	        <a href="#"><img src="images/man.png" onclick="showTooltip()" class="user" id="user"></a>
	        <div class="custom_tooltip text-center" id="tooltip" style="visibility: hidden;">
	    		<ul class="settings_head">
	    			<li><a href="logout.php?logout"><span class="fa fa-sign-out"></span>&nbsp;&nbsp;Sign Out</a></li>
	    		</ul>
	    	</div>
	      </ul>
	    </div><!-- /.navbar-collapse -->

	    		<script>
					function showTooltip() {
					    var x = document.getElementById("tooltip");
					  	if (x.style.visibility == "hidden"){
					  		x.style.visibility = "visible"
					  	}else{
					  		x.style.visibility = "hidden"
					  	}
					}
				</script>

  </div><!-- /.container-fluid -->
</nav>
