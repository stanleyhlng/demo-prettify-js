<?php
	include 'includes/helpers.php';
	
	$themeFilePattern = "assets/themes/[id]/prettify.css";
	
	// Theme ID
	$id = getValue( $_REQUEST, 'id', '');
	if ( empty ($id) ) 
	{
		// TODO: redirect to error page
		die( 'missing input params: id' );
		exit;
	}
	else 
	{
		$file = str_replace( '[id]', $id, $themeFilePattern );
		if ( !file_exists( $file ) ) 
		{
			die( 'File not found: filename = ' . $file );
		}
	}
	
	// Languages
	$languages = array();
	$languages['bash'] = array(
		'id'	=> 'bash',
		'name'	=> 'Bash',
		'file' 	=> 'assets/data/data-bash.txt'
	);
	$languages['c'] = array(
		'id'	=> 'c',
		'name'	=> 'C',
		'file' 	=> 'assets/data/data-c.txt'
	);
	$languages['cc'] = array(
		'id'	=> 'cc',
		'name'	=> 'C++',
		'file' 	=> 'assets/data/data-cc.txt'
	);
	$languages['java'] = array(
		'id'	=> 'java',
		'name'	=> 'Java',
		'file' 	=> 'assets/data/data-java.txt'
	);	
	$languages['js'] = array(
		'id'	=> 'js',
		'name'	=> 'JavaScript',
		'file' 	=> 'assets/data/data-js.txt'
	);
	$languages['coffee'] = array(
		'id'	=> 'coffee',
		'name'	=> 'CoffeeScript',
		'file' 	=> 'assets/data/data-coffee.txt'
	);
	$languages['perl'] = array(
		'id'	=> 'perl',
		'name'	=> 'Perl',
		'file' 	=> 'assets/data/data-perl.txt'
	);
	$languages['python'] = array(
		'id'	=> 'py',
		'name'	=> 'Python',
		'file' 	=> 'assets/data/data-python.txt'
	);
	$languages['sql'] = array(
		'id'	=> 'sql',
		'name'	=> 'SQL',
		'file' 	=> 'assets/data/data-sql.txt'
	);
	$languages['xml'] = array(
		'id'	=> 'xml',
		'name'	=> 'XML',
		'file' 	=> 'assets/data/data-xml.txt'
	);
	$languages['html'] = array(
		'id'	=> 'html',
		'name'	=> 'HTML',
		'file' 	=> 'assets/data/data-html.txt'
	);
	$languages['xhtml'] = array(
		'id'	=> 'xhtml',
		'name'	=> 'XHTML',
		'file' 	=> 'assets/data/data-xhtml.txt'
	);	
	$languages['php'] = array(
		'id'	=> 'php',
		'name'	=> 'PHP',
		'file' 	=> 'assets/data/data-php.txt'
	);
	$languages['xsl'] = array(
		'id'	=> 'xsl',
		'name'	=> 'XSL',
		'file' 	=> 'assets/data/data-xsl.txt'
	);
	$languages['css'] = array(
		'id'	=> 'css',
		'name'	=> 'CSS',
		'file' 	=> 'assets/data/data-css.txt'
	);
	sort( $languages );
?>
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
		<!--
		<link rel="stylesheet" href="assets/libraries/prettify/css/prettify.css" />	
		//-->
		<link rel="stylesheet" href="<?php echo $file; ?>" />
		<link rel="stylesheet" href="assets/stylesheets/bootstrap-docs.css" />
		<link rel="stylesheet" href="assets/stylesheets/prettify-js.css" />
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap-responsive.css" />		
    		
		<link rel="shortcut icon" href="../vendor/stanleyhlng/icons/favicon.ico" />
	</head>
	
	<body data-spy="scroll">
	
		<?php include 'includes/site_navbar.php'; ?>
	
		<div class="container">
		
			<!-- Hero unit -->
			<!--
			<div class="hero-unit">
				<h1>Prettify.JS</h1>
				<p>A JavaScript module and CSS file that allows syntax highlight of source code snippets in a web page.</p>
				<p>This is a demo page for prettify.js.  It explains what it is and how to make use of it.</p>
				<p><a class="btn btn-primary btn-large">Learn more</a></p>		
			</div>
			//-->

			<header id="overview" class="jumbotron subhead">
				<h1><strong>"<?php echo ucfirst($id); ?>"</strong> Theme <small>for Prettify.JS</small></h1>
				<p class="lead">Beautify the code snippets in a web page.  Here's the themes for <a target="_blank" href="http://code.google.com/p/google-code-prettify/">Prettify.JS</a>.</p>
				<div class="subnav">
					<ul class="nav nav-pills">
						<?php foreach ($languages as $language): ?>
						<li>
							<a href="#<?php echo $language['id']; ?>"><?php echo $language['name']; ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</header>

			<?php foreach ($languages as $language): ?>
			<section id="<?php echo $language['id']; ?>">
<!--
				<div class="page-header">
					<h2><?php echo $language['name']; ?></h2>
				</div>
//-->
				<div class="row">
					<div class="span12">
<figure class="code">
<figcaption>
	<span><?php echo $language['name']; ?></span>
</figcaption>
<pre class="prettyprint linenums lang-<?php echo $language['id']; ?>"><?php
	$data = file_get_contents( $language['file'] );
	$data = htmlentities( $data );
	echo $data;
?></pre>
</figure>
					</div>
				</div>
			</section>
			<?php endforeach; ?>
  
			<hr />
			
			<?php include 'includes/site_footer.php' ?>

		</div>
	
		<script type="text/javascript" src="../lib/jquery/js/jquery.min.js"></script>
		<script type="text/javascript" src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/libraries/prettify/js/lang-css.js"></script>				
		<script type="text/javascript" src="assets/libraries/prettify/js/prettify.js"></script>		
		<script type="text/javascript" src="assets/javascripts/prettify-js.js"></script>
	</body>

</html>