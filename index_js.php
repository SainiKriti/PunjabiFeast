
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
		
		<!--
			Student Name: Kriti Saini
			Student ID: A01220388
 		-->
 		<div style="position:absolute;left: 200px;top: 250px;}color:red" id="test"></div>

<script>




var themessage="Welcome to Punjabi Feast!"
var fontsize=10

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
	 	
 		<!-- navigation bar replaced with nav.php file -->
		
		<div id="nav">
<!-- 	<img src="images/logo.jpg"> -->
 	<ul class="menu">
		
		<li class="menu_list"><a href="contact.php">Contact</a></li><li class="menu_list"><a href="enquiry.php">Enquiry</a></li><li class="menu_list"><a href="menu.php">Menu</a></li><li class="menu_list"><a href="about.php">About</a></li><li class="menu_list_active"><a href="index.php">Home</a></li>		
	</ul>

</div>




		
		<!-- navigation bar replaced with nav.php file -->
 		
	 	<div id="header">
 			<a href="index.php">
 			<div id="logo">
	 			<img src="images/logo.jpg" alt="Punjabi Feast">
		 	</div>
		 	
		 	<div id="logo_name">
	 			<h1>Punjabi feast</h1>
	 			<p id="font_josefin">Lower Mainland Tiffin Service</p>
	 		</div>
	 		</a>
	 	</div> 
		
 		
 		
 		<div id="content">
 			<h2>Punjabi Feast</h2>
			<p>You know it's more than food when it comes from home.</p>
 		
 			
 			<br />
 			<h3>Offers</h3>
 			<p>There are a number of <a href="meal_packages.php">meal packages</a> provided by us.<br />But we can always customise it as per your needs.<br /><a href="contact.php">Contact Us</a> if you want to want to place an order.</p>
 			<p>Also check our <a href="menu.php">menu</a> to add additional items to your tiffin.</p>
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
 		
	 	<div id=footer>
 			
 			<table class="foot">
 				<tr class="foot_tr">
				    <th class="foot_th">Punjabi Feast</th>
				    <th class="foot_th">Punjabi Feast</th>
				    <th class="foot_th">Our Location</th>
				    <th class="foot_th">Working Hours</th>
				</tr>
				<tr class="foot_tr">
					<td class="foot_td">
						<ul class="foot_menu">
							<li class="foot_menu_list"><a href="index.php">Home</a></li>
							<li class="foot_menu_list"><a href="about.php">About</a></li>
 							<li class="foot_menu_list"><a href="menu.php">Menu</a></li>
							<li class="foot_menu_list"><a href="enquiry.php">Enquiry</a></li>
							<li class="foot_menu_list"><a href="contact.php">Contact Us</a></li>
						</ul>

					</td>
					<td class="foot_td">
						<ul class="foot_menu">
							<li class="foot_menu_list"><a href="meal_packages.php">Meal Packages</a></li>
							<li class="foot_menu_list"><a href="nutrition_chart.php">Nutrition Chart</a></li>
							<li class="foot_menu_list"><a href="help_homeless.php">Help Homeless</a></li>
 							<li class="foot_menu_list"><a href="refund_policy.php">Refund Policy</a></li>
							<li class="foot_menu_list"><a href="career.php">Careers</a></li>
						</ul>

					</td>
					<td class="foot_td">
						<ul class="foot_menu">
							<li class="foot_menu_list">13724, Grosvenor Rd</li>
							<li class="foot_menu_list">V3R5E4, Surrey</li>
 							<li class="foot_menu_list">British Columbia</li>
							<li class="foot_menu_list">+1 604-773-0453</li>
						</ul>

					</td>
					<td class="foot_td">
						<ul class="foot_menu">
							<li class="foot_menu_list">Mon-Fri</li>
							<li class="foot_menu_list">09:00 AM-06:00 PM</li>
 							<li class="foot_menu_list">Sat-Sun & Holidays</li>
							<li class="foot_menu_list">11:00 AM-04:00 PM </li>
<!-- 							<li class="foot_menu_list">@gmail.com</li> -->
						</ul>
					</td>
				</tr>
  
 			</table>
 			<a href="index.php"><img id="logo_1" src="images/logo_name.png" alt="Punjabi Feast"></a>
 			
 		</div> 		
 	<script src="lightbox/dist/js/lightbox-plus-jquery.js"></script>		
	</body>
	
	
	
</html>