<?php
require('conn_db_apie_pNA9530cVnzI.php');

require 'recaptcha.php';



$errormsg = '';
$successmsg = '';


        if (!empty($_POST)) {
            $captcha = new Recaptcha('6LdNbHQpAAAAADef7VEhj_30NeBJ7VVG9rg02Hnx');
        
            if ($captcha->checkCode($_POST['g-recaptcha-response']) == false) {
                $errormsg = "Captcha faux"; // Message d'erreur ReCAPTCHA
            } else {
                // Le ReCAPTCHA est valide, traitez le formulaire ici
        if (!empty($_POST['devis_first_name']) && !empty($_POST['devis_last_name']) && !empty($_POST['devis_message']) && !empty($_POST['devis_email']) && !empty($_POST['devis_tel'])) {
            $devis_first_name = htmlspecialchars($_POST['devis_first_name']);
            $devis_last_name = htmlspecialchars($_POST['devis_last_name']);
            $devis_message = htmlspecialchars($_POST['devis_message']);
            $devis_email = htmlspecialchars($_POST['devis_email']);
            $devis_tel = htmlspecialchars($_POST['devis_tel']);
            $devis_company = htmlspecialchars($_POST['devis_company']);
            $devis_type_company = htmlspecialchars($_POST['devis_type_company']);
            $devis_type_site = htmlspecialchars($_POST['devis_type_site']);
            $devis_design = htmlspecialchars($_POST['devis_design']);
            $devis_date_send = date('Y-m-d H:i:s');
            $devis_condition = isset($_POST['devis_condition']) ? $_POST['devis_condition'] : 'non';

            $insertDevis = $conn->prepare('INSERT INTO dev_devis (devis_first_name, devis_last_name, devis_message, devis_email, devis_tel, devis_company,devis_type_company, devis_type_site, devis_design, devis_date_send, devis_condition) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
            $insertDevis->execute(array($devis_first_name, $devis_last_name,$devis_message, $devis_email, $devis_tel, $devis_company,$devis_type_company, $devis_type_site, $devis_design, $devis_date_send, $devis_condition));

            $to = "";
            $subject = "Nouveau devis soumis";
            $message = "Un nouveau devis a été soumis avec les détails suivants:\n\n";
            $message .= "Nom: $devis_first_name\n";
            $message .= "Prénom: $devis_last_name\n";
            $message .= "email: $devis_email\n";
            $message .= "tel: $devis_tel\n";
            $message .= "message: $devis_message\n";

            if (mail($to, $subject, $message)) {
                $successmsg = "Devis envoyé et e-mail envoyé avec succès !";
            } else {
                $errormsg = "Erreur lors de l'envoi du devis.";
            }
        } else {
            $errormsg = "Veuillez remplir tout les champs";
        }
    }
}



?>