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
        if ($_POST) {
            if (Form::validate($_POST, ['assistancePseudo', 'assistanceEmail', 'assistanceObject', 'assistanceTitle', 'assistanceMessage'])) {
                if ($_SESSION['member']['pseudo'] === $_POST['assistancePseudo']) {
                    $pseudo = strip_tags($_POST['assistancePseudo']);
                    $email = strip_tags($_POST['assistanceEmail']);
                    $messageObject = $_POST['assistanceObject'];
                    $assistanceTitle = strip_tags($_POST['assistanceTitle']);
                    $assistanceMessage = strip_tags($_POST['assistanceMessage']);

                    $memberModel = new MembersModel;
                    $memberEmailModel = new MembersEmailModel;
                    $assistanceMessageModel = new assistanceMessagesModel;

                    $memberArray = $memberModel->findOnMultipleTables(['members', 'members_email'], ['members.pseudo' => $pseudo, 'members_email.email' => $email], ['members.id' => 'members_email.member_id']);

                    if ($memberArray) {
                        $member = $memberModel->hydrate($memberArray);
                        $memberEmail = $memberEmailModel->hydrate($memberArray);
                        $messageDate = 'now';
                        $assistanceMessage = $assistanceMessageModel->setMessage_object($messageObject)
                            ->setAssistance_title($assistanceTitle)
                            ->setAssistance_message($assistanceMessage)
                            ->setMessage_date($messageDate)
                            ->setMember_id($member->getId());

                        $assistanceMessage->create();
                        $_SESSION['success'] = 'Votre message a été envoyé avec succès';
                        header('location:/assistance');
                        exit;
                    } else {
                        $_SESSION['error'] = 'Pseudo ou email non valide';
                    }
                } else {
                    $_SESSION['error'] = 'Ce pseudo n\'est pas le votre, petit coquin !';
                }
            } else {
                $_SESSION['error'] = 'Tous les champs doivent être remplis';
            }
        }

        $assistanceForm = new Form;

        $assistanceForm->initForm('post', '#', ['id' => 'assistanceForm', 'class' => 'col-8 offset-2 col-lg-8 offset-lg-2'])
            ->initDiv(['class' => 'border formBorder p-4'])
            ->initDiv(['class' => 'row my-4'])
            ->addLabelFor('assistancePseudo', 'Votre pseudo', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 p-0 mb-2'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'assistancePseudo', ['id' => 'assistancePseudo', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('assistanceEmail', 'Votre email', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('email', 'assistanceEmail', ['id' => 'assistanceEmail', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('assistanceObject', 'Objet du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addSelect('assistanceObject', ['default' => '-- Choisissez une option', 'contact' => 'Message de contact', 'assistance' => 'Besoin d\'assistance'], ['id' => 'assistanceObject', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('assistanceTitle', 'Titre du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'assistanceTitle', ['id' => 'assistanceTitle', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('assistanceMessage', 'Votre message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 col-xl-2 offset-xl-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-8 ms-0 ms-md-2 p-0'])
            ->addTextarea('assistanceMessage', '', ['id' => 'assistanceMessage', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initdiv(['class' => 'row'])
            ->addButton('submit', 'assistanceButton', 'Envoyer', ['id' => 'assistanceButton', 'class' => 'blurButton button greenlightBac whiteCol boxShadow col-12 col-md-2 offset-md-3 mt-2', 'disabled' => true])
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/assistance', ['assistanceForm' => $assistanceForm->create()]);
    }
}
