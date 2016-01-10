<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en-us" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CodeIgniter Shopping Cart</title>

<link href="<?php echo base_url(); ?>assets/css/core.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.32.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script>
$("#submit").click(function(){
$.ajax({  
    type:"post",  
    data: "id=",  
    url:"<?php echo site_url('AJAX/testAJAX')?>",  
    success: function(data){  
               alert(data);  
    },  

     error: function() {  
               alert("ajax error");  
     }  
})}); 
</script>
</head>
<body>

<div id="wrap">

	<?php $this->load->view($content); ?>
	
	<div class="cart_list">
		<h3>Your shopping cart</h3>
		<div id="cart_content">
			<?php $this->load->view('cart/Cart.php'); ?>
		</div>
	</div>
	<?php echo site_url('AJAX/testAJAX')?>
<input type = "text" id = "Message" />
<button id = "submit">Submit</button>
</div>
</body>
</html>