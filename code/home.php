<?php

if($_REQUEST['submit']) {

        $validator = new validator();
        $errors = $validator->contact_me_validator($_REQUEST);

        if(empty($errors))
        {
                $tpl->assign('data', $_REQUEST);
                $body=$tpl->fetch('contact_me_message.tpl');

                $mail = new mail();
                $mail->send_email($body);

                $tpl->assign('success', "1");
        }
        else
        {
                $tpl->assign('errors', $errors);
                $tpl->assign('success', "0");
                $tpl->assign('name', $_REQUEST['name']);
                $tpl->assign('email', $_REQUEST['email']);
                $tpl->assign('message', $_REQUEST['message']);
        }

	$tpl->assign('show_contact', 'yes');
}

$tpl->display('home.tpl');

?>
