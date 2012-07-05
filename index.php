<?php
	include 'includes/helpers.php';
	
	$themeFilePattern = "assets/themes/[id]/prettify.css";
	
	// Theme ID
	$id = getValue( $_REQUEST, 'id', '');
	if ( empty ($id) ) 
	{
		// TODO: redirect to error page
		//die( 'missing input params: id' );
		//exit;
		header( 'Location: /prettify-js/?id=bootstrap' );
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
<?php
	$pageHost = getValue( $_SERVER, 'HTTP_HOST' );
	$pageUrl = getValue( $_SERVER, 'SCRIPT_NAME' );
	$pageUrl = "http://" . $pageHost . $pageUrl;
	
	$pageName = getValue( $_SERVER, 'SCRIPT_NAME' );
	$pageName = basename( $pageName, ".php" );
	
	$id = getValue( $_REQUEST, "id" );
	
	$themes = array();
	$themes['bootstrap'] = array(
		'name' => 'Bootstrap',
		'link' => '/prettify-js/?id=bootstrap'
		);
	$themes['tomorrow-night-blue'] = array(
		'name' => 'Tomorrow Night Blue',
		'link' => '/prettify-js/?id=tomorrow-night-blue'
		);
	$themes['solarized-dark'] = array(
		'name' => 'Solarized Dark',
		'link' => '/prettify-js/?id=solarized-dark'
	);
	$themes['sons-of-obsidian'] = array(
		'name' => 'Sons of Obsidian',
		'link' => '/prettify-js/?id=sons-of-obsidian'
	);
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<title><?php echo $themes[$id]['name']; ?> Theme | Prettify.JS | Demo | stanleyhlng.com</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<meta name="keyword" content="Syntax Highlight Script" />
		
		<link rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.min.css" />
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
		<link rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap-responsive.css" />		
    	
    	<!--	
		<link rel="shortcut icon" href="../vendor/stanleyhlng/icons/favicon.ico" />
		//-->
	</head>
	
	<body name="top">

		<div id="fb-root"></div>
	
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

			<header id="overview" class="jumbotron masthead">
				<h1>
					<strong>"<?php echo ucfirst($id); ?>"</strong> Theme 
					<small>for <a target="_blank" href="http://code.google.com/p/google-code-prettify/">Prettify.JS</a></small>
					</h1>
				<p class="lead">Beautify the code snippets in a web page.  <!--Here's the themes for <a target="_blank" href="http://code.google.com/p/google-code-prettify/">Prettify.JS</a>.
					//-->
				</p>
				<p>
					<a onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download <?php echo $themes[$id]['name']; ?>']);" class="btn btn-primary btn-large" href="<?php echo $file; ?>">Download<small>(<?php echo $id . DIRECTORY_SEPARATOR . basename(($file)); ?>)</small></a>
				</p>
				<div class="bs-links">
					<ul class="quick-links">
						<li class="follow-btn">
<a href="https://twitter.com/stanleyhlng" class="twitter-follow-button" data-show-count="false">Follow @stanleyhlng</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</li>
						<li class="tweet-btn">
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</li>
						<li class="like-btn">
<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $pageUrl; ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=160922734042810" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:20px;" allowTransparency="true"></iframe>
						</li>
					</ul>
				</div>
			</header>
			
			<!-- section: steps -->
			<section id="steps">
				<div class="page-header">
					<h1>
						Steps to Apply Prettify.JS.
						<small>a step-by-step guide to beautify your code</small>
					</h1>
					<!--
					<p>Take the <code>&lt;pre&gt;</code> element and add two optional clases <code>prettyprint</code> <code>linenums</code> for enhanced rendering.</p>
					//-->
				</div>

				<!-- step 1 -->
				<div class="row">
					<div class="span12">
						<h2><small>1/</small> Download Prettify.JS</h2>
					</div>
					<div class="span12">
						<p>
							<div><blockquote>Download the files directly from the web.</blockquote></div>
<pre>
								
	# All-in-one package
	http://code.google.com/p/google-code-prettify/downloads/list

	# prettify.css
	http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.css
	
	# prettify.js
	http://google-code-prettify.googlecode.com/svn/trunk/src/prettify.js

</pre>	
						</p>
						<p>
							<div><blockquote>Checkout the source code in command line.</blockquote></div>
							<div>
<pre>
								
	# Non-members may check out a read-only working copy anonymously over HTTP.
	svn checkout http://google-code-prettify.googlecode.com/svn/trunk/ google-code-prettify-read-only

</pre>	
							</div>
						</p>
						
					</div>
				</div>
				<!-- /step 1 -->

				<!-- step 2 -->
				<div class="row">
					<div class="span12">
						<h2><small>2/</small> Insert CSS and JS Files</h2>
					</div>
					<div class="span12">
						<p>
							<div><blockquote>Embed external CSS file.</blockquote></div>
<pre class="prettyprint linenums">

<?php
$markup = <<<MARKUP
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="path/to/prettify.css" />
  </head>
</html>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
						<p>
							<div><blockquote>Embed external JS file</blockquote></div>
<pre class="prettyprint linenums">

<?php
$markup = <<<MARKUP
<!DOCTYPE html>
<html>
  <body>
    <script type="text/javascript" src="path/to/prettify.js"></script>
  </body>
</html>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>						
					</div>
				</div>
				<!-- /step 2 -->

				<!-- step 3 -->
				<div class="row">
					<div class="span12">
						<h2><small>3/</small> Insert Code Snippets</h2>
					</div>
					<div class="span12">
						<p>
							<div><blockquote>Put the code segments in <code>&lt;pre class="prettyprint"&gt; ...	code segments ... &lt;/pre&gt;</code> or <code>&lt;code class="prettyprint"&gt; ... code segments ... &lt;/code&gt</code> and it will be pretty printed.</blockquote></div>
<pre class="prettyprint linenums">

<?php
$code = <<<CODE
<!DOCTYPE html>
<html>
  <head>
    <title>Demo | Prettify.JS | stanleyhlng.com</title>
  </head>
  <body>
    <h1>Hello, World!</h1>
  </body>
</html>
CODE;
$code = htmlentities( $code );

$markup = <<<MARKUP
<pre class="prettyprint linenums">
{$code}
</pre>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
						<div class="alert">All the code segments inside <code>&lt;pre&gt;</code> are encoded.</div>
					</div>
				</div>
				
				<!-- /step 3 -->

				<!-- step 4 -->
				<div class="row">
					<div class="span12">
						<h2><small>4/</small> Kickstart Prettify.JS</h2>
					</div>
					<div class="span12">
						<p>
							<div><blockquote>Insert JQuery JavaScript library.</blockquote></div>
<pre class="prettyprint linenums">

<?php
$markup = <<<MARKUP
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></scirpt>

MARKUP;

echo htmlentities( $markup );

?>

</pre>				
						</p>
					
						<p>
							<div><blockquote>Call <code>prettyPrint()</code> method once the document is ready.</blockquote></div>
<pre class="prettyprint linenums">

<?php
$markup = <<<MARKUP
<script type="text/javascript">
	
(function(jQuery){
	
  jQuery( document ).ready( function() {
		
    prettyPrint();
		
  } );

}(jQuery))
	
</script>

MARKUP;

echo htmlentities( $markup );

?>

</pre>				
						</p>
					</div>	
				</div>
				<!-- /step 4 -->
	
				<!-- step 5 -->
				<div class="row">
					<div class="span12">
						<h2><small>5/</small> That's All.  Here's an Example</h2>						
					</div>
					<div class="span6">
						<p>
							<div class="label">BEFORE PRETTIFY</div>
<pre>

<?php

$markup = <<<MARKUP
<!DOCTYPE html>
<html>
  <head>
    <title>Demo | Prettify.JS | stanleyhlng.com</title>
  </head>
  <body>
    <h1>Hello, World!</h1>
  </body>
</html>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
					</div>
					<div class="span6">
						<p>
							<div class="label">AFTER PRETTIFY</div>						
<pre class="prettyprint linenums">

<?php

$markup = <<<MARKUP
<!DOCTYPE html>
<html>
  <head>
    <title>Demo | Prettify.JS | stanleyhlng.com</title>
  </head>
  <body>
    <h1>Hello, World!</h1>
  </body>
</html>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
					</div>
				</div>
				<!-- /step 5 -->
				
				<!-- step 6 -->
				<div class="row">
					<div class="span12">
						<h2><small>6/</small> Wait.  Make It More Prettier</h2>				
					</div>			
					<div class="span12">
						<p>
							<div><blockquote>You can add your own stylesheet file, e.g. <code>prettify-[YOUR THEME].css</code> to make the code more prettier.</blockquote></div>
<pre class="prettyprint linenums">

<?php
$markup = <<<MARKUP
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="path/to/prettify.css" />
    <link rel="stylesheet" type="text/css" href="path/to/prettify-[YOUR THEME].css" />
  </head>
</html>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
					</div>
				</div>
				<!-- /step 6 -->
				
			</section>
			
			<!-- section: Examples -->
			<section id="examples">
				<div class="page-header">
					<h1>
						More Examples.
						<small>beautify your code in different languages</small>
					</h1>
					<p>
						<div>
							<blockquote>
								You can beautify your code segment in different languages by inserting <code>lang-[language]</code> class.  Here's an example of <code>lang-html</code>.
						
							</blockquote>
						</div>
					</p>
				</div>
				<div class="row">
					<div class="span6">
						<p>
							<div class="label">THE MARKUP</div>
<pre class="prettyprint linenums">

<?php
$code = <<<CODE
<!DOCTYPE html>
<html>
  <head>
    <title>Demo | Prettify.JS | stanleyhlng.com</title>
  </head>
  <body>
    <h1>Hello, World!</h1>
  </body>
</html>
CODE;
$code = htmlentities( $code );

$markup = <<<MARKUP
<pre class="prettyprint linenums lang-html">
{$code}
</pre>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
					</div>
					<div class="span6">
						<p>
							<div class="label">PRETTIFY FOR SPECIFIC LANGUAGE</div>						
<pre class="prettyprint linenums lang-html">

<?php

$markup = <<<MARKUP
<!DOCTYPE html>
<html>
  <head>
    <title>Demo | Prettify.JS | stanleyhlng.com</title>
  </head>
  <body>
    <h1>Hello, World!</h1>
  </body>
</html>

MARKUP;

echo htmlentities( $markup );

?>

</pre>
						</p>
					</div>				
				</div>
				<div class="row">
					<div class="span12">
						<div class="subnav">
							<ul class="nav nav-pills">
								<?php foreach ($languages as $language): ?>
								<li>
									<a href="#<?php echo $language['id']; ?>"><?php echo $language['name']; ?></a>
								</li>
								<?php endforeach; ?>
							</ul>
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="span12"></div>
				</div>
				<?php $index = 1; ?>
				<?php foreach ($languages as $language): ?>
				<div class="row code-language" id="<?php echo $language['id']; ?>">
					<div class="span12">
						<h2>
							<small><?php echo $index; ?>/ </small>
							<?php echo $language['name']; ?>
						</h2>
<div class="code-wrapper">
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
				</div>
				<?php $index = $index + 1; ?>
				<?php endforeach; ?>
			</section>
  
			<hr />
			
			<?php include 'includes/site_footer.php' ?>

		</div>
	
		<script type="text/javascript" src="assets/libraries/jquery/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/libraries/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/libraries/prettify/js/prettify.js"></script>		
		<script type="text/javascript" src="assets/libraries/prettify/js/lang-css.js"></script>				
		<script type="text/javascript" src="assets/javascripts/prettify-js.js"></script>
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-33173093-1']);
		  _gaq.push(['_setDomainName', 'stanleyhlng.com']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>		
	</body>

</html>