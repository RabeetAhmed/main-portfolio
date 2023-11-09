<?php $page = 'contact'; include 'header.php';?>

<title>Rabeet Ahmed - Contact</title>



<!-- About -->
<div class="pb-0 pb-sm-2">
	<h1 class="title title--h1 title__separate">Contact</h1>
</div>

<!-- Contact -->
<div class="map" id="map">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.8482734420504!2d67.13879831501595!3d24.834861852399282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb1a7dcf8d4f6dbd!2zMjTCsDUwJzA1LjUiTiA2N8KwMDgnMjcuNiJF!5e0!3m2!1sen!2s!4v1654624258250!5m2!1sen!2s"
		width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<h2 class="title title--h2">Contact Form</h2>


<form action="action/insert.php" method="post" class="contact-form" data-toggle="validator">
	<div class="row">
		<div class="form-group col-12 col-md-6">
			<input type="text" class="input form-control" id="nameContact" name="nameContact" placeholder="Full name"
				required="required" autocomplete="on" oninvalid="setCustomValidity('Fill in the field')"
				onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-6">
			<input type="email" class="input form-control" id="emailContact" name="emailContact"
				placeholder="Email address" required="required" autocomplete="on"
				oninvalid="setCustomValidity('Email is incorrect')" onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-12">
			<textarea class="textarea form-control" id="messageContact" name="messageContact" placeholder="Your Message"
				rows="4" required="required" oninvalid="setCustomValidity('Fill in the field')"
				onkeyup="setCustomValidity('')"></textarea>
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-start">
			<div id="validator-contact" class="hidden"></div>
		</div>
		<div class="col-12 col-md-6 order-1 order-md-2 text-end">
			<button type="submit" name="submit" class="btn"><i class="font-icon icon-send"></i> Send
				Message</button>
		</div>
	</div>
</form>
</div><!-- /box-outer -->
</div><!-- /col -->
</div><!-- /sticky-parent -->
</div><!-- /container -->
</main>

<?php include 'footer.php';?>