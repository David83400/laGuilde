<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Core\Form;
use Projet5\Models\Frontend\VisitorsModel;
use Projet5\Models\Frontend\ContactMessagesModel;

class HomeController extends Controller
{
    public function display()
    {
        $errors = array();

        if ($_POST) {
            if (Form::validate($_POST, ['contactPseudo', 'contactEmail', 'contactTitle', 'contactMessage'])) {
                $pseudo = strip_tags($_POST['contactPseudo']);
                $email = strip_tags($_POST['contactEmail']);
                $contactTitle = strip_tags($_POST['contactTitle']);
                $contactMessage = strip_tags($_POST['contactMessage']);
                $messageDate = 'now';

                if (preg_match('/^[a-zA-Z0-9éèê_-]+$/', $_POST['contactPseudo'])) {
                    if (filter_var($_POST['contactEmail'], FILTER_VALIDATE_EMAIL)) {
                        $visitorModel = new VisitorsModel;
                        $contactMessageModel = new contactMessagesModel;

                        $visitorArray = $visitorModel->findOneByEmail($email);

                        if (!$visitorArray) {
                            $visitor = $visitorModel->setPseudo($pseudo)
                                ->setEmail($email);

                            $visitorModel->create();

                            $visitorInfo = $visitorModel->findOneByEmail($visitor->getEmail());

                            $contactMessage = $contactMessageModel->setContact_title($contactTitle)
                                ->setContact_message($contactMessage)
                                ->setMessage_date($messageDate)
                                ->setVisitor_id($visitorInfo->id);

                            $contactMessage->create();

                            $_SESSION['success'] = 'Votre message a été envoyé avec succès';
                            header('location:/home');
                            exit;
                        } else {
                            $visitor = $visitorModel->hydrate($visitorArray);

                            $contactMessage = $contactMessageModel->setContact_title($contactTitle)
                                ->setContact_message($contactMessage)
                                ->setMessage_date($messageDate)
                                ->setVisitor_id($visitor->getId());

                            $contactMessage->create();

                            $_SESSION['success'] = 'Votre message a été envoyé avec succès';
                            header('location:/home');
                            exit;
                        }
                    } else {
                        $errors['message'] = 'L\'email enregistré n\'est pas conforme';
                    }
                } else {
                    $errors['message'] = 'Le pseudo enregistré n\'est pas valide';
                }
            } else {
                $errors['message'] = 'Tous les champs doivent être remplis';
            }

            if ($errors) {
                Form::displayError($errors);
            }
        }

        $contactForm = new Form;

        $contactForm->initForm('post', '#', ['id' => 'contactForm', 'class' => 'col-8 offset-2 col-lg-8 offset-lg-2'])
            ->initDiv(['class' => 'border formBorder p-4'])
            ->initDiv(['class' => 'row mt-4 mb-2'])
            ->addLabelFor('contactPseudo', 'Votre pseudo', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 p-0 mb-2'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'contactPseudo', ['id' => 'contactPseudo', 'class' => 'formBorder bladeBrownBac form-control w-100 mb-1'])
            ->addSpan('5 à 19 caractères', ['class' => 'greenlightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('contactEmail', 'Votre email', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('email', 'contactEmail', ['id' => 'contactEmail', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('contactTitle', 'Titre du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'contactTitle', ['id' => 'contactTitle', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('contactMessage', 'Votre message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 col-xl-2 offset-xl-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-8 ms-0 ms-md-2 p-0'])
            ->addTextarea('contactMessage', '', ['id' => 'contactMessage', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initdiv(['class' => 'row'])
            ->addButton('submit', 'contactButton', 'Envoyer', ['id' => 'contactButton', 'class' => 'blurButton button greenlightBac whiteCol boxShadow col-12 col-md-2 offset-md-3 mt-2', 'disabled' => true])
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/home', ['contactForm' => $contactForm->create(), 'errors' => $errors]);
    }
}
