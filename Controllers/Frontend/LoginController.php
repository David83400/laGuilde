<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;

class loginController extends controller
{
    /**
     * Connexion des membres
     *
     * @return void
     */
    public function connection()
    {
        //if (Form::validate($_POST, ['pseudo', 'password'])) {
        if (isset($_POST['formConnect'])) {
            if ((!empty($_POST['pseudo'])) && (!empty($_POST['email'])) && (!empty($_POST['pass']))) {
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
        }
        // $membersModel = new MembersModel;
        // $memberArray = $membersModel->findOneByPseudo(strip_tags($_POST['pseudo']));

        // if (!$memberArray) {
        //     $_SESSION['error'] = 'Informations incorrectes';
        //     // var_dump($_SESSION['error']);
        //     // die;
        //     header('location:/login/connection');
        //     exit;
        // }

        // $member = $membersModel->hydrate($memberArray);

        // if (password_verify($_POST['password'], $member->getPassword())) {
        //     $member->setSession();
        //     header('location:/home');
        //     exit;
        // } else {
        //     $_SESSION['error'] = 'Informations incorrectes';
        //     header('location:/login/connection');
        //     exit;
        // }
        //}



        //$form = new Form;

        // $form->initForm('post', 'login', ['class' => 'form', 'id' => 'formLogin'])
        // ->addLabelFor('pseudo', 'Votre pseudo :', ['class' => 'pseudo'])
        // ->addInput('text', 'pseudo', ['id' => 'pseudo', 'required' => true])
        //     //->addLabelFor('email', 'Votre Email :', ['class' => 'email'])
        //     //->addInput('email', 'email', ['id' => 'email', 'required' => true])
        //     ->addLabelFor('password', 'Votre mot de passe :', ['class' => 'password'])
        //     ->addInput('password', 'password', ['id' => 'password', 'required' => true])
        //     //->addSelect('select', ['1' => 'France', '2' => 'Angleterre'], ['id' => 'select'])
        //     //->addTextarea('contact', 'Votre message :')
        //     ->addButton('Me connecter', ['class' => 'btn btn-primary'])
        //     ->endForm();

        $this->render('Frontend/login/connection');
    }

    /**
     * Inscription des membres
     *
     * @return void
     */
    public function register()
    {
        // on vérifie si le formulaire est valide
        //if (Form::validate($_POST, ['pseudo', 'password'])) {
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
        //}

        // $form = new Form;

        // $form->initForm('post', '#', ['class' => 'form', 'id' => 'formRegister'])
        // ->addLabelFor('pseudo', 'Votre pseudo :')
        // ->addInput('pseudo', 'pseudo', ['id' => 'pseudo'])
        // //->addLabelFor('email', 'Votre Email :')
        // //->addInput('email', 'email', ['id' => 'email'])
        // ->addLabelFor('password', 'Votre mot de passe :')
        // ->addInput('password', 'password', ['id' => 'password'])
        // //->addSelect('select', ['1' => 'France', '2' => 'Angleterre'], ['id' => 'select'])
        // //->addTextarea('contact', 'Votre message :')
        // ->addButton('M\'inscrire')
        // ->endForm();

        $this->render('Frontend/login/register', [/*'registerForm' => $form->create()*/]);
    }

    public function logout()
    {
        unset($_SESSION['member']);
        header('location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
