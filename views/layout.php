<?php
session_start();

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Trendy Blog a Blogging Category Bootstrap Responsive Website Template  | Home :: w3layouts</title>
<base href="http://localhost/news/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- Custom Theme files -->
<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
</head>

<body>
	<!-- menu -->
	
	    <?php

	    if(isset($_COOKIE['thanhcong'])){
	    ?>
	    <div class="fixed-top alert alert-success" style="z-index: 2000; position: fixed;right:10px;bottom: 10px;">
	    	<?=$_COOKIE['thanhcong']?>
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	  	</div>
	    <?php
	    }
	    ?>
	  
	<?php
	include('views/menu.php');
	?>
		<!-- Collect the nav links, forms, and other content for toggling -->
	
	<!-- //menu -->
	<div id="datasearch">
		<?php

		include("views/$view.php");

		?>
	</div>

<!-- footer -->
	
	<div class="footer">
		<div class="container">
			<div class="footer-bottom">
				<div class="footer-bottom-left-whtree-agileinfo">
					<p>&copy 2017 Trendy Blog. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts.</a></p>
				</div>
				<div class="footer-bottom-right-whtree-agileinfo">
					<ul>
						<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
						<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
						<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="public/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
<script>
	$(document).ready(function(){
		$('.btnSearch').click(function(){
			var keyword = $('.txtSearch').val();
			//alert(keyword)
			$.ajax({
				url:"http://localhost/news/search.php",
				type:"POST",
				data:{tukhoa:keyword},
				success:function(data){
					$('#datasearch').html(data)
				},
				error:function(){
					console.log('thất bại')
				}
			})
		})
	})
</script>
</html>