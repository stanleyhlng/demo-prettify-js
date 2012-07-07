<?php
	include 'helpers.php';
	
	$themeFilePattern = "assets/themes/[id]/prettify.css";
	
	// Theme ID
	$id = getValue( $_REQUEST, 'id', '');
	if ( empty ($id) ) 
	{
		// TODO: redirect to error page
		//die( 'missing input params: id' );
		//exit;
		header( 'Location: /prettify-js/?id=bootstrap-light' );
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
	$themes['bootstrap-light'] = array(
		'name' => 'Bootstrap Light',
		'link' => '/prettify-js/?id=bootstrap-light'
		);
	$themes['solarized-dark'] = array(
		'name' => 'Solarized Dark',
		'link' => '/prettify-js/?id=solarized-dark'
	);
	$themes['sons-of-obsidian-dark'] = array(
		'name' => 'Sons of Obsidian Dark',
		'link' => '/prettify-js/?id=sons-of-obsidian-dark'
	);
	$themes['google-code-light'] = array(
		'name' => 'Google Code Light',
		'link' => '/prettify-js/?id=google-code-light'
	);
	$themes['tomorrow-night-blue'] = array(
		'name' => 'Tomorrow Night Blue',
		'link' => '/prettify-js/?id=tomorrow-night-blue'
	);
	$themes['tomorrow-night-light'] = array(
		'name' => 'Tomorrow Night Light',
		'link' => '/prettify-js/?id=tomorrow-night-light'
	);
	$themes['tomorrow-night-eighties'] = array(
		'name' => 'Tomorrow Night Eighties',
		'link' => '/prettify-js/?id=tomorrow-night-eighties'
	);
	asort( $themes );
?>