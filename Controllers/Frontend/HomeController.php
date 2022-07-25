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
            if (Form::validate($_POST, ['pseudo', 'email', 'contactTitle', 'contactMessage'])) {
                $pseudo = strip_tags($_POST['pseudo']);
                $email = strip_tags($_POST['email']);
                $contactTitle = strip_tags($_POST['contactTitle']);
                $contactMessage = strip_tags($_POST['contactMessage']);

                if (preg_match('/^[a-zA-Z0-9éèê_-]+$/', $_POST['pseudo'])) {
                    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
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
                                ->setVisitor_id($visitorInfo->id);

                            $contactMessage->create();

                            $_SESSION['success'] = 'Votre message a été envoyé avec succès';
                            header('location:/home');
                            exit;
                        } else {
                            $visitor = $visitorModel->hydrate($visitorArray);

                            $contactMessage = $contactMessageModel->setContact_title($contactTitle)
                                ->setContact_message($contactMessage)
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

        $contactForm->initForm('post', '', ['class' => 'col-8 offset-2 col-lg-8 offset-lg-2'])
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
            ->addLabelFor('contactTitle', 'Titre du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'contactTitle', ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('contactMessage', 'Votre message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 col-xl-2 offset-xl-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-8 ms-0 ms-md-2 p-0'])
            ->addTextarea('contactMessage', '', ['class' => 'formBorder bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initdiv(['class' => 'row'])
            ->addButton('submit', 'contactForm', 'Envoyer', ['class' => 'button greenlightBac whiteCol boxShadow col-12 col-md-2 offset-md-3 mt-2'])
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/home', ['contactForm' => $contactForm->create(), 'errors' => $errors]);
    }
}
