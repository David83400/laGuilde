<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;
use Projet5\Models\Frontend\MembersEmailModel;
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
        $membersModel = new MembersModel();
        $membersEmailModel = new MembersEmailModel();


        if ($_POST) {
            if (Form::validate($_POST, ['pseudo', 'email', 'password'])) {
                $memberArray = $membersModel->findOnMultipleTables(['members', 'members_email'], ['members.pseudo' => strip_tags($_POST['pseudo']), 'members_email.email' => strip_tags($_POST['email'])]);

                if (!$memberArray) {
                    $_SESSION['error'] = 'Informations incorrectes';
                    header('location:/login/connection');
                    exit;
                }

                $member = $membersModel->hydrate($memberArray);
                $memberEmail = $membersEmailModel->hydrate($memberArray);

                if (password_verify($_POST['password'], $member->getPassword())) {
                    $member->setSession();
                    $memberEmail->setSession();

                    if (isset($_POST['rememberMe'])) {
                        setcookie('pseudo', $_SESSION['member']['pseudo'], time() + 365 * 24 * 3600, '/', 'laguilde', false, true);
                        setcookie('email', $_SESSION['memberEmail']['email'], time() + 365 * 24 * 3600, '/', 'laguilde', false, true);
                    }

                    if (isset($_SESSION['member']['is_admin']) && $_SESSION['member']['is_admin'] === 1) {
                        $_SESSION['success'] = 'Vous êtes connecté à l\'administration';
                        header('location:/admin');
                        exit;
                    } else {
                        $_SESSION['success'] = 'Vous vous êtes connecté avec succès';
                        header('location:/home');
                        exit;
                    }
                } else {
                    $_SESSION['error'] = 'Informations incorrectes';
                    header('location:/login/connection');
                    exit;
                }
            } else {
                $_SESSION['error'] = 'Tous les champs doivent être remplis';
                header('location:/login/connection');
                exit;
            }
        }


        $connectionForm = new Form;

        $connectionForm->initForm('post', '#', ['class' => 'row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4'])
            ->initDiv(['class' => 'row my-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'pseudo', ['id' => 'pseudo', 'class' => 'formBorder bladeBrownBac form-control w-100', 'placeholder' => 'Votre pseudo'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'email', ['id' => 'email', 'class' => 'formBorder bladeBrownBac form-control w-100', 'placeholder' => 'Votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'password', ['id' => 'password', 'class' => 'formBorder bladeBrownBac form-control w-100', 'placeholder' => 'Votre mot de passe'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('checkbox', 'rememberMe', ['id' => 'rememberMe', 'class' => 'formBorder bladeBrownBac'])
            ->addLabelFor('rememberMe', 'Se souvenir de moi', ['class' => 'darkBrownCol ps-3'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->addButton('submit', 'formConnect', 'envoyer', ['class' => 'greenlightBac whiteCol boxShadow col-12 mb-1 ps-0'])
            ->endDiv()
            ->initDiv(['class' => 'row mt-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addLink('#', 'Mot de passe oublié ?', ['class' => 'greenlightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addLink('/login/register', 'Vous n\'avez pas encore de compte ?', ['class' => 'greenlightCol'])
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
        if ($_POST) {
            if (Form::validate($_POST, ['pseudo', 'email', 'emailConfirm', 'password', 'passwordConfirm'])) {

                $pseudo = strip_tags($_POST['pseudo']);
                $email = strip_tags($_POST['email']);
                $pass = password_hash($_POST['password'], PASSWORD_ARGON2I);

                $memberModel = new MembersModel;
                $memberEmailModel = new MembersEmailModel;

                $memberPseudo = $memberModel->findOneByPseudo($pseudo);

                if (!$memberPseudo) {
                    // var_dump($memberPseudo);
                    // die;
                    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $memberEmail = $memberEmailModel->findOneByEmail($email);

                        if (!$memberEmail) {
                            $memberModel->setPseudo($pseudo)
                                ->setPassword($pass);

                            $memberModel->create();

                            $member = $memberModel->findBy(['pseudo' => $pseudo, 'password' => $pass]);
                            $memberId = $member['0']->id;
                            $memberEmailModel->setEmail($email)
                                ->setMember_Id($memberId);

                            $memberEmailModel->create();

                            $memberArray = $memberModel->findOnMultipleTables(['members', 'members_email'], ['members.pseudo' => $pseudo, 'members_email.email' => $email]);

                            if ($memberArray) {
                                $member = $memberModel->hydrate($memberArray);
                                $memberEmail = $memberEmailModel->hydrate($memberArray);

                                $memberModel->setSession();
                                $memberEmailModel->setSession();

                                if (isset($_POST['rememberMe'])) {
                                    setcookie('pseudo', $_SESSION['member']['pseudo'], time() + 365 * 24 * 3600, '/', 'laguilde', false, true);
                                    setcookie('email', $_SESSION['memberEmail']['email'], time() + 365 * 24 * 3600, '/', 'laguilde', false, true);
                                }

                                if (isset($_SESSION['member']['is-admin']) && $_SESSION['member']['is-admin'] === 0) {
                                    $_SESSION['success'] = 'Votre compte a été créé avec succès !';
                                    header('location:/home');
                                    exit;
                                }
                            } else {
                                $_SESSION['error'] = 'Une erreur s\'est produite, veuillez recommencer';
                                header('location:/login/register');
                                exit;
                            }
                        } else {
                            $_SESSION['error'] = 'Cet email est déjà associé à un compte';
                            header('location:/login/register');
                            exit;
                        }
                    } else {
                        $_SESSION['error'] = 'L\'email n\'est pas conforme';
                        header('location:/login/register');
                        exit;
                    }
                } else {
                    var_dump($memberPseudo);
                    die;
                    $_SESSION['error'] = 'Ce pseudo est déjà utilisé';
                    header('location:/login/register');
                    exit;
                }
            } else {
                $_SESSION['error'] = 'Tous les champs doivent être remplis';
                header('location:/login/register');
                exit;
            }
        }

        $registerForm = new Form;

        $registerForm->initForm('post', '#', ['class' => 'row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4 p-sm-5'])
            ->initDiv(['class' => 'row mt-4 mb-1'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'pseudo', ['id' => 'pseudo', 'class' => 'formBorder bladeBrownBac form-control w-100 mb-1', 'placeholder' => 'Votre pseudo'])
            ->addSpan('5 à 19 caractères', ['class' => 'greenlightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'email', ['id' => 'email', 'class' => 'formBorder bladeBrownBac form-control', 'placeholder' => 'Votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'emailConfirm', ['id' => 'emailConfirm', 'class' => 'formBorder bladeBrownBac form-control', 'placeholder' => 'Confirmez votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-1'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'password', ['id' => 'password', 'class' => 'formBorder bladeBrownBac form-control mb-1', 'placeholder' => 'Votre mot de passe'])
            ->addSpan('8 caractères minimum', ['class' => 'greenlightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'passwordConfirm', ['id' => 'passwordConfirm', 'class' => 'formBorder bladeBrownBac form-control', 'placeholder' => 'Confirmez votre mot de passe'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('checkbox', 'rememberMe', ['id' => 'rememberMe', 'class' => 'bladeBrownBac'])
            ->addLabelFor('rememberMe', 'Se souvenir de moi', ['class' => 'darkBrownCol ps-3'])
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
        header('location: /home');
        exit;
    }
}
