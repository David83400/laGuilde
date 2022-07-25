<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Core\Form;
use Projet5\Models\Frontend\MembersModel;
use Projet5\Models\Frontend\MembersEmailModel;
use Projet5\Models\Frontend\AssistanceMessagesModel;

class AssistanceController extends Controller
{
    public function display()
    {
        $errors = array();

        if ($_POST) {
            if (Form::validate($_POST, ['pseudo', 'email', 'object', 'assistanceTitle', 'assistanceMessage'])) {
                $pseudo = strip_tags($_POST['pseudo']);
                $email = strip_tags($_POST['email']);
                $messageObject = $_POST['object'];
                $assistanceTitle = strip_tags($_POST['assistanceTitle']);
                $assistanceMessage = strip_tags($_POST['assistanceMessage']);

                $memberModel = new MembersModel;
                $memberEmailModel = new MembersEmailModel;
                $assistanceMessageModel = new assistanceMessagesModel;

                $memberArray = $memberModel->findOnMultipleTables(['members', 'members_email'], ['members.pseudo' => $pseudo, 'members_email.email' => $email], ['members.id' => 'members_email.member_id']);

                if ($memberArray) {
                    $member = $memberModel->hydrate($memberArray);
                    $memberEmail = $memberEmailModel->hydrate($memberArray);

                    $assistanceMessage = $assistanceMessageModel->setMessage_object($messageObject)
                        ->setAssistance_title($assistanceTitle)
                        ->setAssistance_message($assistanceMessage)
                        ->setMember_id($member->getId());

                    $assistanceMessage->create();
                    $_SESSION['success'] = 'Votre message a été envoyé avec succès';
                    header('location:/assistance');
                    exit;
                } else {
                    $errors['message'] = 'Pseudo ou email non valide';
                }
            } else {
                $errors['message'] = 'Tous les champs doivent être remplis';
            }

            if ($errors) {
                Form::displayError($errors);
            }
        }

        $assistanceForm = new Form;

        $assistanceForm->initForm('post', '', ['class' => 'col-8 offset-2 col-lg-8 offset-lg-2'])
            ->initDiv(['class' => 'border formBorder p-4'])
            ->initDiv(['class' => 'row my-4'])
            ->addLabelFor('pseudo', 'Votre pseudo', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 p-0 mb-2'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'pseudo', ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('email', 'Votre email', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('email', 'email', ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('object', 'Objet du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addSelect('object', ['' => '-- Choisissez une option', 'contact' => 'Message de contact', 'assistance' => 'Besoin d\'assistance'], ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('assistanceTitle', 'Titre du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'assistanceTitle', ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('assistanceMessage', 'Votre message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 col-xl-2 offset-xl-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-8 ms-0 ms-md-2 p-0'])
            ->addTextarea('assistanceMessage', '', ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initdiv(['class' => 'row'])
            ->addButton('submit', 'assistanceForm', 'Envoyer', ['class' => 'button greenlightBac whiteCol boxShadow col-12 col-md-2 offset-md-3 mt-2'])
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/assistance', ['assistanceForm' => $assistanceForm->create(), 'errors' => $errors]);
    }
}
