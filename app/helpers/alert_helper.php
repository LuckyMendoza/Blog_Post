<?php 
function alert_message($message)
{
	if(lava_instance()->session->has_userdata('status')): ?>
	<div class = "alert alert-success" alert-dismissible= "fade show"  role = "alert" >
		<strong>Success!</strong> <?php echo lava_instance()->session->flashdata($message);?>
		<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>
<?php if(lava_instance()->session->has_userdata('errors')): ?>
	<div class = "alert alert-danger" alert-dismissible= "fade show"  role = "alert" style="text-align: center;">
		<strong>Error!</strong> <?php echo lava_instance()->session->flashdata($message);?>
		<button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
			<span aria-hiden="true">&times;</span>
		</button>
	</div>
<?php endif; 
}
function alert_custom($message) {
	if(lava_instance()->session->has_userdata('status')): ?> 
 		<li style="color: #3c763d;  background-color: #dff0d8; border-color: #d6e9c6; padding: 10px 10px 10px 10px"> 
 			<strong>Success! </strong><?php echo lava_instance()->session->flashdata($message); ?> </li>
 	<?php endif; ?>
 	<?php if(lava_instance()->session->has_userdata('errors')): ?>
 	<li style="color: #a94442; background-color: #f2dede; border-color: #ebccd1; padding: 10px 10px 10px 10px"> 
 		 	<strong>Error! </strong> <?php echo lava_instance()->session->flashdata($message) ?> </li>
 	<?php endif; 
}
?>