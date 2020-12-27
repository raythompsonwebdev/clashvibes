<?php
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
