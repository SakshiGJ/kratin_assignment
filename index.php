<?php session_start();?>

<html>
<head>
<style>
body  {
  background-image: url("images/mainback.jpg");
  background-color: #cccccc;
}
</style>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>

				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
		

		

				<div id="page">
				
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to
							<?php
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm'];
								}
								else
								{
									echo 'The Elderly care website "M-Care"!!';
								}
							?>
							</h1>
							<div class="entry">
								<br>

								<br>

								<object width="550" height="400">
							
								
								</object>
								<br><br>

							</div>

						</div>

					</div>
				

					<!-- start sidebar -->
							<div id="sidebar">
									<?php
										include("includes/search.inc.php");
									?>
							</div>
							<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			
		
</body>
</html>
