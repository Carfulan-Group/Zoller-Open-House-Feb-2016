jQuery(document).ready(function($) {
	
	$('.required').focus(function(event) {	// Change input border color back on click
		$(this).css('border-color', '#ccc');
	});

	$('#submit-button').click(function(){
		$approvedInput = 0,
		$counter = 0;

		$('.required').each(function(index, el) {
			$counter ++;
			if ( $(this).val().length > 0 ){
				$approvedInput++;
			} else {
				$(this).css('border-color', 'red');
			}
		});

		if ( $counter > $approvedInput ){
			$('#contact-results').html("<div class='alert alert-danger' role='alert'>Please fill in the <strong>missing fields!</strong></div>");
		} else {
			ajaxSubmit();
		}
	});

	// Retrieve form values

	function ajaxSubmit(){
		$fname = $('#fname').val(),
		$lname = $('#lname').val(),
		$email = $('#email').val(),
		$company = $('#company').val();

		if ($('#day1:checked, #day2:checked').length == 2) {
			$days = "2nd and 3rd Feb";
		} else if ($('#day2').prop('checked')) {
			$days = "3rd Feb";
		} else if ($('#day1').prop('checked')) {
			$days = "2nd Feb";
		}

		var dataString = 'fname='+ $fname + '&lname=' + $lname + '&email=' + $email + '&company=' + $company + '&days=' + $days;
		// alert (dataString);return false;

		$.ajax({
			type: "POST",
			url: "partials/form-processor.php",
			data: dataString,
			success: function() {
				$('#contact_form').html("<div id='message'></div>");
				$('#message').html("<h2>Contact Form Submitted!</h2>")
				.append("<p>We will be in touch soon.</p>")
				.hide()
				.fadeIn(1500, function() {
				$('#message').append("<img id='checkmark' src='images/check.png' />");
			});
			}
		});

		$('#contact-results').html("<div class='alert alert-success' role='alert'><strong>You are now signed up!</strong> To register more visitors, please submit the form again with updated details. Thank you.</div>");
	}	// End of ajaxSubmit


});