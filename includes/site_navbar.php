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
			<a class="brand" href="/prettify-js/">demo.stanleyhlng.com/prettify-js/</a>
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