<!DOCTYPE html>
<html>
<head>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>
<style>
body  {
  background-color: #cccccc;
}
</style>
</head>
<body>
<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
 <br /><br />
 <div class="container">
 
   <div class="container-fluid">
    
    <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <input type="submit" name="post" id="post" value="Notify" /></a>
      <ul class="dropdown-menu"></ul>
     </li>
    </ul>
   </div>
  
  <br />
  <form method="post" id="comment_form" align="center">
   <div class="form-group">
    <label>Enter Subject</label>
    <input type="text" name="subject" id="subject" >
   </div>
   <div class="form-group">
    <label>Enter Comment</label>
    <textarea name="comment" id="comment"  rows="5"></textarea>
   </div>
   <div class="form-group">
    <input type="submit" name="post" id="post" value="Post" />
   </div>
  </form>
 </div>
</body>
</html>