<?php

// process submitted form
/*  function clashvibes_process_contact_form() {

    if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):


      if (isset($_POST[ 'message_name' ])) { $name = sanitize_text_field( $_POST[ 'message_name' ] ); }
      //if (isset($_POST[ 'message_email' ])) { $email = sanitize_email( $_POST[ 'message_email' ] ); }
      if (isset($_POST[ 'message_text' ])) {
        $input_text = filter_var($_POST['message_text'], FILTER_SANITIZE_STRING );
      }
      //if (isset($_POST['requesttype'])) { $requesttype = $_POST['requesttype']; }
      //if (isset($_POST['ajaxrequest'])) { $ajaxrequest = $_POST['ajaxrequest']; }

      $formerrors = false;

      if ($name === '') :
        $err_myname = '<div class="error">Sorry, your name is a required field</div>';
        $formerrors = true;
      endif; // input field empty

      // if ( !(preg_match('/[A-Za-z]+, [A-Za-z]+/', $myname)) ) :
      // 	$err_patternmatch = '<div class="error">Sorry, the name must be in the format: Last, First</div>';
      // 	$formerrors = true;
      // endif; // pattern doesn't match


      $formdata = array (
        'myname' => $myname,
        //'mypassword' => $mypassword,
        //'mypasswordconf' => $mypasswordconf,
        'mycomments' => $mycomments,
        //'email' => $email,
      );

      if (!($formerrors)) :
        $to				= 	"ray_thomp@hushmail.com";
        $subject	=		"From $name -- Signup Page";
        $message	=		json_encode($formdata);

        $replyto	=		"From: fromprocessor@iviewsource.com \r\n".
                      "Reply-To: donotreply@iviewsource.com \r\n";

        if (mail($to, $subject, $message)):
          $msg = "Thanks for filling out our form";
          if ( $ajaxrequest ) :
            echo "<script>$('#myform').before('<div id=\"formmessage\"><p>Thanks for filling out our form. An email has been sent with your request</p></div>'); $('#myform').hide();</script>";
          endif;
        else:
          $msg = "Problem sending the message";
        endif; // mail form data

      endif; // check for form errors

    endif; //form submitted

    // sanitise form data
    /*  if ( isset( $_POST['message_name'] ) ) :

            $name = sanitize_text_field( $_POST[ 'message_name' ] );

            if ( !empty( $name )  ) :

              echo '<p>Your name is '. $name .'.</p>';

            else:

              echo '<p>Please enter your name!</p>';

            endif;

      endif;

      if ( isset( $_POST['message_email'] ) ) :

            $email = sanitize_email( $_POST[ 'message_email' ] );

            if ( !empty( $email) )  :

              echo '<p>Your email is '. $email .'.</p>';

            else :

              echo '<p>Please enter your email!</p>';

            endif;

      endif;

      if ( isset( $_POST['message_text'] ) ) :


          $text_input = sanitize_text_field( $_POST[ 'message_text' ] );

          if ( !empty( $text_input ) ) :

            echo '<p>Your text is '. $text_input .'.</p>';

          else :

            echo '<p>Please enter some text!</p>';

          endif;


      endif;
    */

  /*}*/


// display form
function clashvibes_contact_form() {
  if (isset($msg)) :
    echo '<div id="formmessage"><p>', $msg , '</p></div>';
   else :

?>

  <div id="contactform">
    <div class="wpcf7">
      <form id="myform" name="theform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <span id="formerror" class="error"></span>
        <p>
          <label for="message_name">Name: <span>*</span> <br>
            <input type="text" name="message_name" value="<?php if (isset($name)) { echo $myname; } ?>" required pattern="[A-Za-z ]+">
          </label>
        </p>
        <p>
          <label for="message_email">Email: <span>*</span> <br>
            <input type="text" name="message_email" value="<?php if (isset($email)) { echo $email; } ?>"">
          </label>
        </p>
        <p>
          <label for="message_text">Message: <span>*</span> <br>
            <textarea type="text" name="message_text"><?php if (isset($input_text)) { echo $input_text; } ?></textarea>
          </label>
        </p>
          <input type="submit" name="action" value="submit">
        </p>
        <?php //wp_nonce_field( 'contact_form_action', 'contact_nonce_field', false ); ?>
      </form>
    </div>
  </div>


<?php

endif;

}

clashvibes_contact_form();
clashvibes_process_contact_form();
