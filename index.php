<?php
$pageTitle = "Zoller Open House Signup";
$meta = "Come and join us at the Zoller UK open house on the 2nd and 3rd of February 2016";
include "partials/header.php";
?>

<section class="page-title">
	<h1 class="col-sm-6">Zoller UK Open House</h1>
	<h2 class="col-sm-6">2nd - 3rd February 2016</h2>
</section>
<section class="row signup-content-container">
	<div class="col-sm-6 vertical-padding-large">
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus molestie lacus libero, eu dapibus justo vestibulum eget. Pellentesque viverra, orci a vehicula tincidunt, urna magna ullamcorper nisl, eu facilisis leo ante id neque.</p>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus molestie lacus libero, eu dapibus justo vestibulum eget. Pellentesque viverra, orci a vehicula tincidunt, urna magna ullamcorper nisl, eu facilisis leo ante id neque.</p>
	</div>
	<div id="signup-form" class="col-sm-6 vertical-padding-large">
		<span class="lead">Sign Up</span>
		<?php include 'partials/form.php'; ?>
	</div>
</section>
<section id="map" class="row">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2407.648128677515!2d-1.7104706841789745!3d52.882751979884546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a1b5e3cb60ccd%3A0xf22160ef787f1edb!2sZoller+UK!5e0!3m2!1sen!2suk!4v1450187767324" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php
include "partials/footer.php";
?>