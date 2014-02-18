<?php

if ($this->get('request')->getMethod() == 'POST') {
    $infoUser = '<p class="error">';
    $error = false;
    if ($_POST['spam-check'] != 'noSpam') {
        $infoUser .='SPAM detected little bastard';
    }

    if (isset($_POST['email']) && !filter_var($input_email, FILTER_VALIDATE_EMAIL)) {
        $from = strip_tags($_POST['email']);
    } else {
        $infoUser .='Merci d\'entrer une adresse mail correcte <br /> ';
        $error = true;
    }

    if (isset($_POST['name']) && strlen($_POST['name']) > 2) {
        $name = strip_tags($_POST['name']);
    } else {
        $infoUser .='Merci d\'entrer un nom correcte <br /> ';
        $error = true;
    }

    if (isset($_POST['message']) && strlen($_POST['message']) > 5) {
        $msg = strip_tags($_POST['message']);
    } else {
        $infoUser .='Merci d\'entrer un message correcte <br /> ';
        $error = true;
    }

    if (isset($_POST['subject'])) {
        $subject = strip_tags($_POST['subject']);
    }

    if (preg_match('/[\n\r]/', $_POST['name']) || preg_match('/[\n\r]/', $_POST['email']) || preg_match('/[\n\r]/', $_POST['subject']) || preg_match('/[\n\r]/', $_POST['message'])) {
        $infoUser .= 'En-têtes interdites dans les champs du formulaire<br />';
        $error = true;
    }
    $infoUser .= '</p>';


    if ($error == false) {
        $subject = "Message from $input_name: $input_subject";
        $from = $input_email;
        $to = 'bancarel.valentin@gmail.com';

        $msg = "Ce mail a été envoyé par le formulaire contact de votre protefolio par $input_name: $input_email";
        $msg .= 'Voici le message qui vous est adressé :';
        $msg .= '***************************';
        $msg .= $input_message;

        $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($input_email)
                ->setTo($to)
                ->setBody($msg);


        if ($this->get('mailer')->send($message)) {
            $infoUser = '<p class="success">Votre mail a bien été envoyer !</p>';
        } else {
            $infoUser = '<p class="error">Il y a eu un probleme lors de l\'envoi du mail merci de reessayer ou de l\'envoyer directement a <a href="mailto:bancarel.valentin@gmail.com">bancarel.valentin@gmail.com</a>!</p>';
        }
    } else {
        $infoUser .= '';
    }
}
return $this->render('BancarelValentinPortefolioBundle:Default:contact.html.twig', array('onglet' => 'contact', 'message' => $infoUser));
?>