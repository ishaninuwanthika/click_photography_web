<?php 
require_once '../../app/global/url.php';
include_once ROOT_PATH.'/app/global/Gvariables.php';
// include_once ROOT_PATH.'/db/db.php';
include_once ROOT_PATH.'/mail/mails.php';
require_once ROOT_PATH.'/assets/vendors/validation/gump.class.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if (isset($_POST['send_contact_us_mail'])) {

    $result = 0;
    $error = 0;
    $mail = 0;
    $message = "Failed to send email!";
    $redirectURL = null;

    $gump = new GUMP();
    $_POST = $gump->sanitize($_POST); // You don't have to sanitize, but it's safest to do so.

    $gump->validation_rules(array(
        'name' => 'required',
        'email' => 'required',
    ));

    $gump->filter_rules(array(
        'name' => 'trim',
        'email' => 'trim',
    ));

    $validated_data = $gump->run($_POST);

    if($validated_data === false) {
        $error = $gump->get_errors_array(true);
        $message = "Please fill all the required fields";
    }else{
        $detailArray = array();
        $detailArray['name'] = $validated_data['name'];
        $detailArray['email'] = $validated_data['email'];
        $detailArray['subject'] = $validated_data['subject'];
        $detailArray['phone'] = $validated_data['phone'];
        $detailArray['message'] = $validated_data['message'];

        $mail = $eCommerceMailObj->sendContactUsMail($detailArray);

        if ($mail['result'] == 1) {
            $result = 1;
            $message = 'Mail sent successfully!';
            $error = $mail;
            $redirectURL = URL.'get_in_touch';

            $auditArr = array(
                'action' => 'Contact Us mail sending',
                'description' => $message
            );
        }

    } // Validation end 

    echo json_encode(array('result'=>$result,'status'=>$mail['result'], 'message'=>$message, 'error'=>$error, 'redirectURL'=>$redirectURL));
    }

}

?>