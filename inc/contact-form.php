<?php
// process submitted form
function clashvibes_process_contact_form() {

  // get the nonce
	// if ( !isset( $_POST['contact_nonce_field'] ) ) {

	// 	$nonce = $_POST['contact_nonce_field'];

	// } else {

	// 	$nonce = false;

	// }

	// if ( !wp_verify_nonce( $nonce, 'contact_form_action' ) ) {

  //   wp_die( 'Incorrect nonce!' );

  // } else {

	// 	$name = sanitize_text_field( $_POST[ 'message_name' ] );

	// 	if ( !empty( $name ) ) {

	// 		echo '<p>Your name is '. $name .'.</p>';

	// 	} else {

	// 		echo '<p>Please enter your name!</p>';

  //   }

  //   $email = sanitize_email( $_POST[ 'message_email' ] );

	// 	if ( !empty( $email ) ) {

	// 		echo '<p>Your email is '. $email .'.</p>';

	// 	} else {

	// 		echo '<p>Please enter your email!</p>';

  //   }

  //   $text_input = sanitize_text_field( $_POST[ 'message_text' ] );

	// 	if ( !empty( $text_input ) ) {

	// 		echo '<p>Your text is '. $text_input .'.</p>';

	// 	} else {

	// 		echo '<p>Please enter some text!</p>';

	// 	}

  // }

  $name = sanitize_text_field( $_POST[ 'message_name' ] );

		if ( !empty( $name ) ) {

			echo '<p>Your name is '. $name .'.</p>';

		} else {

			echo '<p>Please enter your name!</p>';

    }

    $email = sanitize_email( $_POST[ 'message_email' ] );

		if ( !empty( $email ) ) {

			echo '<p>Your email is '. $email .'.</p>';

		} else {

			echo '<p>Please enter your email!</p>';

    }

    $text_input = sanitize_text_field( $_POST[ 'message_text' ] );

		if ( !empty( $text_input ) ) {

			echo '<p>Your text is '. $text_input .'.</p>';

		} else {

			echo '<p>Please enter some text!</p>';

		}

}


// display form
function clashvibes_contact_form() {

?>


  <div id="contactform">
    <div class="wpcf7">
    <form method="post">
    <p>
    <label for="message_name">Name: <span>*</span> <br>
      <input type="text" name="message_name" value="<?php echo esc_attr( $_POST['message_name'] ); ?>">
    </label>
    </p>
    <p>
    <label for="message_email">Email: <span>*</span> <br>
      <input type="text" name="message_email" value="<?php echo esc_attr( $_POST['message_email'] ); ?>">
    </label>
    </p>
    <p>
    <label for="message_text">Message: <span>*</span> <br>
      <textarea type="text" name="message_text"><?php echo esc_textarea( $_POST['message_text'] ); ?></textarea>
    </label>
    </p>
      <input type="submit">
    </p>

    </form>
    </div>
    <?php  //wp_nonce_field( 'contact_form_action', 'contact_nonce_field', false ); ?>
  </div>

<?php



}

clashvibes_contact_form();
clashvibes_process_contact_form();
