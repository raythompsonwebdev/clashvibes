<?php


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))) :
    if (isset($_POST[ 'message_name' ])) {
        $name = sanitize_text_field($_POST[ 'message_name' ]);
    }
    if (isset($_POST[ 'message_email' ])) {
        $email = sanitize_email($_POST[ 'message_email' ]);
    }
    if (isset($_POST[ 'message_text' ])) {
        $input_text = filter_var($_POST['message_text'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['ajaxrequest'])) {
        $ajaxrequest = $_POST['ajaxrequest'];
    }

    $formerrors = false;

    if ($name === '') :
        $err_myname = '<div class="error">Sorry, your name is a required field</div>';
        $formerrors = true;
    endif; // input field empty


    $formdata = array (
    'myname' => $myname,
    'mycomments' => $mycomments,
    'email' => $email,
    );

    date_default_timezone_set('US/Eastern');
    $currtime = time();
    $datefordb = date('Y-m-d H:i:s', $currtime);
  //$salty = dechex($currtime).$mypassword;
    $salted = hash('sha1', $salty);

    if (!($formerrors)) :
        $to             =   "ray_thomp@hushmail.com";
        $subject    =       "From $name -- Signup Page";
        $message    =       json_encode($formdata);

        $replyto    =       "From: fromprocessor@iviewsource.com \r\n".
                                    "Reply-To: donotreply@iviewsource.com \r\n";

        if (mail($to, $subject, $message)) :
            $msg = "Thanks for filling out our form";
            if ($ajaxrequest) :
                echo "<script>$('#myform').before('<div id=\"formmessage\"><p>Thanks for filling out our form. An email has been sent with your request</p></div>'); $('#myform').hide();</script>";
            else :
                echo "<script>$('#myform').before('<div id=\"formmessage\"><p>",$msg,"</p></div>'); $('#myform').hide();</script>";
            endif; // ajaxrequest
        endif; // mail form data
    endif; // check for form errors
endif; //form submitted
