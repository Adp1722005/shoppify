<section class="fnavbar">
		<div class="navbar-fixed">
		<nav>
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">Shoppify</a>
		      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">Menu</i></a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="/shoppify" class="hvr-grow">Home</a></li>
		        <li><a href="/shoppify/about-shoppify.php" class="hvr-grow">About Us</a></li>
		        <li><a href="product-categories.php" class="hvr-grow">Categories</a></li>
		        <li><a href="products.php" class="hvr-grow">Products</a></li>
		        <li><a href="#" class="hvr-grow" onclick="toggleModal('Contact Info', 'You can contact us directly by calling to this number +91-9876543210. Check the bottom Footer Section of the website for more info.');">Contact</a></li>
		        
		        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#" class="hvr-grow">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php" class="hvr-grow">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="hvr-grow modal-trigger" data-target="modal1">Login</a></li>
		        		<li><a href="#" class="hvr-grow modal-trigger" data-target="modal2">Register</a></li>';
		        	}

		        ?>
		        
		      </ul>
		    </div>
		  </nav>
		</div>

		  <ul class="sidenav" id="mobile-demo">
		    <li><a href="/shoppify">Home</a></li>
	        <li><a href="/shoppify/about-shoppify.php">About Us</a></li>
	        <li><a href="product-categories.php">Categories</a></li>
	        <li><a href="products.php">Products</a></li>
	        <li><a href="#" onclick="toggleModal('Contact Info', 'You can contact us directly by calling to this number +91-9876543210. Check the bottom Footer Section of the website for more info.');">Contact</a></li>

	        <?php

		        	if (isset($_SESSION['user'])) {
		        		echo '<li><a href="#">Hi, '.$_SESSION['user'].'</a></li>
		        		<li><a href="logout.php">Logout</a></li>';
		        	} else {
		        		echo '<li><a href="#" class="modal-trigger" data-target="modal1">Login</a></li>
		        		<li><a href="#" class="modal-trigger" data-target="modal2">Register</a></li>';
		        	}

		        ?>
		  </ul>
	</section>