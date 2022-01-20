<!doctype html>
<html lang="en">
	
	<head>
		<title>Punjabi Feast</title>
		<meta charset="utf-8">
		<link href="css/css_style.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet"> 
		<link href="lightbox/dist/css/lightbox.css" rel="stylesheet" />
		<link rel="icon"vtype="image/png" href="images/logo_name.png">
	</head>
	
	<body onload="position_at_top();expand()">
		<div style="position:absolute;align:center;color:red;margin-top:200px;"  id="test"></div>

		<script>


		var themessage="\n\nWelcome to Punjabi Feast!"
		var fontsize=20

		var appearfor=4000
		
		function position_at_top(){
		if (document.layers)
		document.test.top=pageYOffset
		else if (document.all){
		test.innerHTML='<div align=center><font face="Arial">'+themessage+'</font></div>'
		setTimeout("test.style.top=document.body.scrollTop+10;test.style.left=document.body.scrollLeft+10",100)
		}
		else if (document.getElementById){
		document.getElementById("test").innerHTML='<div align=center><font face="Arial">'+themessage+'</font></div>'
		document.getElementById("test").style.top=pageYOffset
		}
		}

		function expand(){
		if (document.layers){
		document.test.document.write('<div align=center style="font-size:'+fontsize+'px"><font face="Arial">'+themessage+'</font></div>')
		document.test.document.close()
		}
		else if (document.all)
		test.style.fontSize=fontsize+'px'
		else if (document.getElementById)
		document.getElementById("test").style.fontSize=fontsize+'px'
		fontsize+=5
		if (fontsize>90){
		if (document.layers)
		setTimeout("document.test.visibility='hide'",appearfor)
		else if (document.all)
		setTimeout("test.style.visibility='hidden'",appearfor)
		else if (document.getElementById)
		setTimeout("document.getElementById('test').style.visibility='hidden'",appearfor)
		return
		}
		else
		setTimeout("expand()",50)
		}

</script>
		
		<!--
			Student Name: Kriti Saini
			Student ID: A01220388
 		-->
 		
	 	
 		<!-- navigation bar replaced with nav.php file -->
		
		<?php
			include("nav.php");
		?>
		
		<!-- navigation bar replaced with nav.php file -->
 		
	 	<?php
			include("header.inc");
		?>
 
		
 		
 		
 		<div id="content">
 			<h2>Punjabi Feast</h2>
			<p>We know it's more than just food when it comes from home.</p>
 		
 			
 			<br />
 			<h3>Check Offers</h3>
 			<p>There are a number of <a class="change_bg" href="meal_packages.php">meal packages</a> provided by us.<br />But we can always customise it as per your needs.<br /><a class="change_bg" href="contact.php">Contact Us</a> if you want to want to place an order.</p>
 			<p>Also check our <a class="change_bg" href="menu.php">menu</a> to add additional items to your tiffin.</p>
 			
 			<br />
 				
 				
 				 <table class="gallery">
 				 <h3>Photo Gallery</h3>
 				 	<tr class="gallery_row">
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food1.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food1_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food2.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food2_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food3.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food3_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food4.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food4_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food5.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food5_t.jpg"></a></td>
 				 	</tr>
 				 	<tr class="gallery_row">
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food6.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food6_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food7.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food7_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food8.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food8_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food9.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food9_t.jpg"></a></td>
 				 		<td class="gallery_d"><a href="lightbox/dist/images/food10.jpg" data-lightbox="roadtrip"> <img src="lightbox/dist/images/food10_t.jpg"></a></td>
 				 	</tr>
 				 </table> 
 				
 				
 				
 			<br/>
 			<br />
 			
 			
 			
 		</div>
 		
 		
 		<!-- navigation bar replaced with nav.php file -->
 		
	 	<?php
			include("footer.inc");
		?>
 		
 	<script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>		
	</body>
	
	
	
</html>