$(document).ready(function() { //因为CI框架应用了mod_rewrite模块，所以url不需要写"index.php/cart" 
	var link = "/index.php/";
	$("#submit").click(function() {
		var id = $(this).find('input[name=product_id]').val();
		var qty = $(this).find('input[name=quantity]').val(); 
		$.post(link + "ajax/testAJAX",{product_id: id,quantity: qty, ajax: '1'
				}, function(data){ 
				}) return false; }); }); 