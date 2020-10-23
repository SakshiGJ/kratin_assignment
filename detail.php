<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from medicine where m_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>


<html >
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
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
									<h1 class="title"><?php echo $row['m_name'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="blue"></td>
												</tr>
												 <tr align="center" >
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="blue"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" >
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['m_img'].'" width="150">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['m_name'].'</td>
															</tr>

															
														
															
																					
															<tr>
																<td align="right">Brand Name </td>
																<td>: </td>
																<td align="left">'.$row['m_brand'].'</td>
																
															</tr>											
									
															
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['m_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="blue"></td>
												</tr>
												 <tr align="center">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="blue"></td>
												</tr>
																		
											 </table>
											 
											 '.$row['m_desc'].'
																				

											 
											 <tr><td colspan=2><hr color="blue"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" >';
												 
												 if(isset($_SESSION['status']))
												 {
													 echo '<td><br><a href="detail.php">Add to cart</a></td>';
													
												}
												
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>
						
							<div id="sidebar">
									<?php
										include("includes/search.inc.php");
									?>
							</div>
		
								<div style="clear: both;">&nbsp;</div>
				
				</div> 
			
						<div id="footer">
									<
										include("includes/footer.inc.php");
									?>
						</div>
						
</body>
</html>
