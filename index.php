<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title>Prettify.JS | Demo | stanleyhlng.com</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css" />
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="assets/stylesheets/prettify-js.css" />
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap-responsive.css" />		
    		
		<link rel="shortcut icon" href="../vendor/stanleyhlng/icons/favicon.ico" />
	</head>
	
	<body>
	
		<?php include 'includes/site_navbar.php'; ?>
	
		<div class="container">
		
			<!-- Hero unit -->
			<div class="hero-unit">
				<h1>Prettify.JS</h1>
				<p>A JavaScript module and CSS file that allows syntax highlight of source code snippets in a web page.</p>
				<p>This is a demo page for prettify.js.  It explains what it is and how to make use of it.</p>
				<!--
				<p><a class="btn btn-primary btn-large">Learn more</a></p>		
				//-->
			</div>

			<section id="markup">
				<div class="page-header">
					<h2>Markup</h2>
					<p>
						<pre class="prettyprint linenums">
							<script type="text/javascript">
								(function(){
									console.log("Hello, World");
								}())
							</script>
						</pre>
					</p>
				</div>
			</section>

			<section id="css-styles">
				<div class="page-header">
					<h1>CSS Styles</h1>
				</div>
			</section>

			<section id="color-themes">
				<div class="page-header">
					<h1>Color Themes</h1>
				</div>
			</section>
			
			<section id="useful-links">
				<div class="page-header">
					<h1>Useful Links</h1>
				</div>
			</section>

			<!-- Example row of columns -->
			<!--
		    <div class="row">
		    	<div class="span4">
		        	<h2>Heading</h2>
		           		<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          <p><a class="btn" href="#">View details &raquo;</a></p>
		        </div>
		        <div class="span4">
		          <h2>Heading</h2>
		           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
		          <p><a class="btn" href="#">View details &raquo;</a></p>
		       </div>
		        <div class="span4">
		          <h2>Heading</h2>
		          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		          <p><a class="btn" href="#">View details &raquo;</a></p>
		        </div>
		      </div>		
			..-->
			<hr />
			
			<?php include 'includes/site_footer.php' ?>

		</div>
	
		<script type="text/javascript" src="../lib/jquery/js/jquery.min.js"></script>
		<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" sre="assets/javascripts/prettify-js.js"></script>
	</body>

</html>