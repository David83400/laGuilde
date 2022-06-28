<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Core\Form;

class HomeController extends Controller
{
    public function display()
    {
        $contactForm = new Form;

        $contactForm->initForm('post', '#', ['class' => 'col-8 offset-2 col-lg-8 offset-lg-2'])
            ->initDiv(['class' => 'formBorder p-4'])
            ->initDiv(['class' => 'row my-4'])
            ->addLabelFor('pseudo', 'Votre pseudo', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 p-0 mb-2'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'pseudo', ['class' => 'bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('email', 'Votre email', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('email', 'email', ['class' => 'bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('contactTitle', 'Titre du message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-4 ms-0 ms-md-2 p-0'])
            ->addInput('text', 'contactTitle', ['class' => 'bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->addLabelFor('contactMessage', 'Votre message', ['class' => 'darkBrownCol col-12 col-md-3 col-lg-2 offset-lg-1 col-xl-2 offset-xl-1 ps-2 p-lg-0'])
            ->initDiv(['class' => 'col-12 col-md-8 ms-0 ms-md-2 p-0'])
            ->addTextarea('contactMessage', '', ['class' => 'bladeBrownBac w-100'])
            ->endDiv()
            ->endDiv()
            ->initdiv(['class' => 'row'])
            ->addButton('submit', 'formContact', 'Envoyer', ['class' => 'button greenlightBac whiteCol boxShadow col-12 col-md-2 offset-md-3 mt-2'])
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/home', ['contactForm' => $contactForm->create()]);
    }
}
