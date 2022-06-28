<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;
use Projet5\Core\Form;

class loginController extends controller
{
    /**
     * Connexion des membres
     *
     * @return void
     */
    public function connection()
    {
        if (Form::validate($_POST, ['pseudo', 'password'])) {
            $membersModel = new MembersModel;
            $memberArray = $membersModel->findOneByPseudo(strip_tags($_POST['pseudo']));
            if (!$memberArray) {
                $_SESSION['error'] = 'Informations incorrectes';
                header('location:/login/connection');
                exit;
            }

            $member = $membersModel->hydrate($memberArray);

            if (password_verify($_POST['password'], $member->getPassword())) {
                $member->setSession();
                header('location:/home');
                exit;
            } else {
                $_SESSION['error'] = 'Informations incorrectes';
                header('location:/login/connection');
                exit;
            }
        }

        $connectionForm = new Form;

        $connectionForm->initForm('post', '#', ['class' => 'row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4'])
            ->initDiv(['class' => 'row my-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'pseudo', ['id' => 'pseudo', 'class' => 'bladeBrownBac form-control w-100', 'placeholder' => 'Votre pseudo'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'email', ['id' => 'email', 'class' => 'bladeBrownBac form-control w-100', 'placeholder' => 'Votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'password', ['id' => 'password', 'class' => 'bladeBrownBac form-control w-100', 'placeholder' => 'Votre mot de passe'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->addButton('submit', 'formConnect', 'envoyer', ['class' => 'greenlightBac whiteCol boxShadow col-12 mb-1 ps-0'])
            ->endDiv()
            ->initDiv(['class' => 'row mt-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addLink('#', 'Mot de passe oublié ?', ['class' => 'greenLightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addLink('/login/register', 'Vous n\'avez pas encore de compte ?', ['class' => 'greenLightCol'])
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/login/connection', ['connectionForm' => $connectionForm->create()]);
    }

    /**
     * Inscription des membres
     *
     * @return void
     */
    public function register()
    {
        // on vérifie si le formulaire est valide
        if (Form::validate($_POST, ['pseudo', 'password'])) {
            // On nettoie l'adresse email
            $pseudo = strip_tags($_POST['pseudo']);
            // On chiffre le mot de passe
            $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);

            // On hydrate le membre
            $member = new MembersModel;

            $member->setPseudo($pseudo)
                ->setPassword($pass);

            // On stocke le membre en base de données
            $member->create();
        }

        $registerForm = new Form;

        $registerForm->initForm('post', '#', ['class' => 'row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4 p-sm-5'])
            ->initDiv(['class' => 'row mt-4 mb-1'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'pseudo', ['id' => 'pseudo', 'class' => 'bladeBrownBac form-control w-100 mb-1', 'placeholder' => 'Votre pseudo'])
            ->addSpan('5 à 19 caractères', ['class' => 'greenLightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'email', ['id' => 'email', 'class' => 'bladeBrownBac form-control', 'placeholder' => 'Votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'emailConfirm', ['id' => 'emailConfirm', 'class' => 'bladeBrownBac form-control', 'placeholder' => 'Confirmez votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-1'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'password', ['id' => 'password', 'class' => 'bladeBrownBac form-control mb-1', 'placeholder' => 'Votre mot de passe'])
            ->addSpan('8 caractères minimum', ['class' => 'greenLightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'passwordConfirm', ['id' => 'passwordConfirm', 'class' => 'bladeBrownBac form-control', 'placeholder' => 'Confirmez votre mot de passe'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->addButton('submit', 'formRegister', 'S\'inscrire', ['class' => 'greenlightBac whiteCol boxShadow col-12 mb-1 ps-0'])
            ->endDiv()
            ->endForm();
        $this->render('Frontend/login/register', ['registerForm' => $registerForm->create()]);
    }

    public function logout()
    {
        unset($_SESSION['member']);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
