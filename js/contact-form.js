jQuery(document).ready(function ($) {
	$('#myform').submit(function () {
		var abort = false
		$('div.error').remove()
		$(':input[required]').each(function () {
			if ($(this).val() === '') {
				$(this).after('<div class="error">This is a required field</div>')
				abort = true
			}
		}) // go through each required value
		if (abort) {
			return false
		} else {
			postData = $('#myform').serialize()

			$.post(
				'process.php',
				postData + '&action=submit&ajaxrequest=1',
				function (msg) {
					if (msg) {
						$('#myform').before(msg)
					}
				}
			)
			return false
		}
	}) //on submit
}) // ready
