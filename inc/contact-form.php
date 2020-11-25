<?php


// process submitted form
function clashvibes_process_contact_form() {

  // get the nonce
  // if ( isset( $_POST['myplugin_nonce_field'] ) ) :

  //     $nonce = $_POST['myplugin_nonce_field'];

  //   else:
  //     $nonce = false;

  // endif;

  // sanitise form data
  if ( isset( $_POST['message_name'] ) ) :

  //   // verify nonce
  //   if ( ! wp_verify_nonce( $nonce, 'contact_form_action' ) ) :

  //     wp_die( 'Incorrect nonce!' );

  //   else :

        $name = sanitize_text_field( $_POST[ 'message_name' ] );

        if ( !empty( $name )  ) :

          echo '<p>Your name is '. $name .'.</p>';

        else:

          echo '<p>Please enter your name!</p>';

        endif;

  //   endif;

  endif;

  if ( isset( $_POST['message_email'] ) ) :
    // verify nonce
    // if ( ! wp_verify_nonce( $nonce, 'contact_form_action' ) ) :

    //   wp_die( 'Incorrect nonce!' );

    // else :

        $email = sanitize_email( $_POST[ 'message_email' ] );

        if ( !empty( $email) )  :

          echo '<p>Your email is '. $email .'.</p>';

        else :

          echo '<p>Please enter your email!</p>';

        endif;

  //   endif;

  endif;

  if ( isset( $_POST['message_email'] ) ) :

    // verify nonce
    // if ( ! wp_verify_nonce( $nonce, 'contact_form_action' ) ) :

    //   wp_die( 'Incorrect nonce!' );

    // else :

      $text_input = sanitize_text_field( $_POST[ 'message_text' ] );

      if ( !empty( $text_input ) ) :

        echo '<p>Your text is '. $text_input .'.</p>';

      else :

        echo '<p>Please enter some text!</p>';

      endif;

  //   endif;

  // endif;

  endif;
}


// display form
function clashvibes_contact_form() {

?>


  <div id="contactform">
    <div class="wpcf7">
    <form method="post">
    <p>
    <label for="message_name">Name: <span>*</span> <br>
      <input type="text" name="message_name" value="">
    </label>
    </p>
    <p>
    <label for="message_email">Email: <span>*</span> <br>
      <input type="text" name="message_email" value="">
    </label>
    </p>
    <p>
    <label for="message_text">Message: <span>*</span> <br>
      <textarea type="text" name="message_text"></textarea>
    </label>
    </p>
      <input type="submit">
    </p>
    <?php wp_nonce_field( 'contact_form_action', 'contact_nonce_field', false ); ?>
    </form>
    </div>

  </div>

<?php



}

clashvibes_contact_form();
clashvibes_process_contact_form();
