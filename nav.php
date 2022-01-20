<div id="nav">
<!-- 	<img src="images/logo.jpg"> -->
 	<ul class="menu">
		
		<?php
			
			//use PHP to determine the name of the current file
			$currentPage = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
			
			//use the name of the current file to
			//determine how to display the navigation
			//if the page is index...
			
			
			
			if($currentPage == "contact"){
				//then style it differently
				echo '<li class="menu_list_active"><a href="contact.php">Contact</a></li>';
			}
			else{
				//if this page is not index, show a link to index
				echo '<li class="menu_list"><a href="contact.php">Contact</a></li>';
			}
			
			if($currentPage == "enquiry"){
				//then style it differently
				echo '<li class="menu_list_active"><a href="enquiry.php">Enquiry</a></li>';
			}
			else{
				//if this page is not index, show a link to index
				echo '<li class="menu_list"><a href="enquiry.php">Enquiry</a></li>';
			}
			
			
			if($currentPage == "menu"){
				//then style it differently
				echo '<li class="menu_list_active"><a href="menu.php">Menu</a></li>';
			}
			else{
				//if this page is not index, show a link to index
				echo '<li class="menu_list"><a href="menu.php">Menu</a></li>';
			}
			
			if($currentPage == "about"){
				//then style it differently
				echo '<li class="menu_list_active"><a href="about.php">About</a></li>';
			}
			else{
				//if this page is not index, show a link to index
				echo '<li class="menu_list"><a href="about.php">About</a></li>';
			}
			
			
			if($currentPage == "index"){
				//then style it differently
				echo '<li class="menu_list_active"><a href="index.php">Home</a></li>';
			}
			else{
				//if this page is not index, show a link to index
				echo '<li class="menu_list"><a href="index.php">Home</a></li>';
			}
			
			
			
		?>		
	</ul>

</div>




