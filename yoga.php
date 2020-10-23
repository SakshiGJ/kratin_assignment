<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select *from yoga where yoga_name like '%$search%'";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>

			<!-- start header -->
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
			<!-- end header -->
<div>
<h2>Yoga Aasanas</h2>
<p>Yoga refreshes your mind and spirit. Tones your body. Keeps your internal organs and hormonal system in balance.<br> All the more reason for people of all ages to do yoga. In fact, yoga asanas are one of the few physical <br>exercises you can continue doing as you age. As age progresses, it is more important to focus on HOW YOU DO rather than how much you do. </p>
</div>
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="2" width="100%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="yoga_detail.php?id='.$row['yoga_id'].'">
														<img src="'.$row['yoga_img'].'" width="150" height="100">
														<br>'.$row['yoga_name'].'</a>
													</td>';
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
					<!-- end content -->
					
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
