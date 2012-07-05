<?php
	include_once 'helpers.php';
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
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!--
			<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        </a>
	        //-->	
			<a class="brand" href="#">demo.stanleyhlng.com/prettify-js/</a>
			<!--
			<div class="nav-collapse">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			//-->

			<ul class="nav pull-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<?php echo strtolower( $themes[$id]['name'] ); ?>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<?php foreach ($themes as $themeId => $theme): ?>
							<?php
								if ( $themeId === $id ) 
								{
									continue;
								}
							?>
						<li><a href="<?php echo $theme['link']; ?>"><?php echo strtolower( $theme['name'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
			</ul>			
		</div>
	</div>
</div>