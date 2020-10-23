<html>
<head>
<style>
body  {
  background-image: url("images/mainback.jpg");
  background-color: #cccccc;
}
</style>
</head>
<body>
<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			

			<li><a href="search_result.php">Medicines</a></li>
<li><a href="reminder.php">Event Handler</a></li>
<li><a href="yoga.php">Healthcare</a></li>
			<li><a href="contact.php">Contact Doctor</a></li>
			
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="register.php">Register</a></li>';
				}
			?>
			
	
	</ul>
</body>

</html>