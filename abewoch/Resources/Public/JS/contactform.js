$(document).ready(function() {
	var message1 = 'bitte füllen sie dieses feld aus';
	var messageEmailNotValid = 'bitte geben sie eine gültige email-adresse an';
	$('#contact_form').bootstrapValidator({
			// To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
			feedbackIcons: {
				valid: 'glyphicon glyphicon-ok',
				invalid: 'glyphicon glyphicon-remove',
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				first_name: {
					validators: {
						stringLength: {
							min: 2,
						},
						notEmpty: {
							message: message1
						}
					}
				},
				last_name: {
					validators: {
						stringLength: {
							min: 2,
						},
						notEmpty: {
							message: message1
						}
					}
				},
				email: {
					validators: {
						notEmpty: {
							message: message1
						},
						emailAddress: {
							message: messageEmailNotValid
						}
					}
				},
				phone: {
					validators: {
						notEmpty: {
							message: message1
						},
						//phone: {
							//message: 'Please supply a valid phone number with area code'
						//}
					}
				},
				address: {
					validators: {
						stringLength: {
							min: 8,
						},
						notEmpty: {
							message: message1
						}
					}
				},
				city: {
					validators: {
						stringLength: {
							min: 4,
						},
						notEmpty: {
							message: message1
						}
					}
				},
				zip: {
					validators: {
						notEmpty: {
							message: message1
						},
						//zipCode: {
							//country: 'CH',
							//message: 'Please supply a vaild zip code'
						//}
					}
				},
				comment: {
					validators: {
						stringLength: {
							min: 0,
							max: 200,
							message:'Please enter at least 10 characters and no more than 200'
						},
						notEmpty: {
							message: message1
						}
					}
				}
			}
		})
		.on('success.form.bv', function(e) {
			$('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
			$('#contact_form').data('bootstrapValidator').resetForm();
			// Prevent form submission
			e.preventDefault();

			// Get the form instance
			var form = $(e.target);

			// Get the BootstrapValidator instance
			var bv = form.data('bootstrapValidator');


			// Use Ajax to submit form data

			var formData = form.serialize();
			console.log(formData);
			$.ajax({
				type: 'POST',
				url: form.attr('action'),
				data: formData
			});

			//$.post($form.attr('action'), $form.serialize(), function(result) {
			//	console.log(result);
			//}, 'json');
		});
});

