		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"></a>
				</div>			

			    <div class="navbar-inner">  
			         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
			            <ul class="nav navbar-nav navbar-right">
			                <?php if (function_exists('getNavMenu')): ?>
			                    <?php echo getNavMenu('MainMenu'); ?>
			                <?php endif; ?>
			            </ul>
			        </div>
			    </div>
			</div>
		</nav>