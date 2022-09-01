<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;
use Projet5\Models\Frontend\MembersEmailModel;
use Projet5\Core\Form;

class loginController extends controller
{
    /**
     * Method to manage connection of members
     *
     * @return void
     */
    public function connection()
    {
        $membersModel = new MembersModel();
        $membersEmailModel = new MembersEmailModel();


        if ($_POST) {
            if (Form::validate($_POST, ['connectionPseudo', 'connectionEmail', 'connectionPassword'])) {
                $pseudo = strip_tags($_POST['connectionPseudo']);
                $email = strip_tags($_POST['connectionEmail']);

                $memberArray = $membersModel->findOnMultipleTables(['members', 'members_email'], ['members.pseudo' => $pseudo, 'members_email.email' => $email], ['members.id' => 'members_email.member_id']);

                if ($memberArray) {
                    $member = $membersModel->hydrate($memberArray);
                    $memberEmail = $membersEmailModel->hydrate($memberArray);

                    if (password_verify($_POST['connectionPassword'], $member->getPassword())) {
                        $member->setSession();
                        $memberEmail->setSession();

                        if (isset($_POST['connectionRememberMe'])) {
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

        $connectionForm->initForm('post', '#', ['id' => 'connectionForm', 'class' => 'row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4'])
            ->initDiv(['class' => 'row my-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'connectionPseudo', ['id' => 'connectionPseudo', 'class' => 'formBorder bladeBrownBac form-control w-100', 'placeholder' => 'Votre pseudo'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'connectionEmail', ['id' => 'connectionEmail', 'class' => 'formBorder bladeBrownBac form-control w-100', 'placeholder' => 'Votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('password', 'connectionPassword', ['id' => 'connectionPassword', 'class' => 'formBorder bladeBrownBac form-control w-100', 'placeholder' => 'Votre mot de passe'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('checkbox', 'connectionRememberMe', ['id' => 'connectionRememberMe', 'class' => 'formBorder bladeBrownBac'])
            ->addLabelFor('rememberMe', 'Se souvenir de moi', ['class' => 'darkBrownCol ps-3'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->addButton('submit', 'connectionButton', 'envoyer', ['id' => 'connectionButton', 'class' => 'blurButton greenlightBac whiteCol boxShadow col-12 mb-1 ps-0', 'disabled' => true])
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
     * Method to manage inscription of members
     *
     * @return void
     */
    public function register()
    {
        if ($_POST) {
            if (Form::validate($_POST, ['registerPseudo', 'registerEmail', 'registerEmailConfirm', 'registerPassword', 'registerPasswordConfirm'])) {

                $pseudo = strip_tags($_POST['registerPseudo']);
                $email = strip_tags($_POST['registerEmail']);
                $pass = password_hash($_POST['registerPassword'], PASSWORD_ARGON2I);

                $memberModel = new MembersModel;
                $memberEmailModel = new MembersEmailModel;

                $memberPseudo = $memberModel->findOneByPseudo($pseudo);

                if (!$memberPseudo) {
                    if (filter_var($_POST['registerEmail'], FILTER_VALIDATE_EMAIL)) {
                        $memberEmail = $memberEmailModel->findOneByEmail($email);

                        if (!$memberEmail) {
                            $inscriptionDate = 'now';
                            $memberModel->setPseudo($pseudo)
                                ->setPassword($pass)
                                ->setInscription_date($inscriptionDate);

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

                                if (isset($_POST['registerRememberMe'])) {
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

        $registerForm->initForm('post', '#', ['id' => 'registerForm', 'class' => 'row boxShadow col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-3 p-4 p-sm-5'])
            ->initDiv(['class' => 'row mt-4 mb-1'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('text', 'registerPseudo', ['id' => 'registerPseudo', 'class' => 'formBorder bladeBrownBac form-control w-100 mb-1', 'placeholder' => 'Votre pseudo'])
            ->addSpan('5 à 19 caractères', ['class' => 'greenlightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'registerEmail', ['id' => 'registerEmail', 'class' => 'formBorder bladeBrownBac form-control', 'placeholder' => 'Votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('email', 'registerEmailConfirm', ['id' => 'registerEmailConfirm', 'class' => 'formBorder bladeBrownBac form-control', 'placeholder' => 'Confirmez votre email'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-1'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('password', 'registerPassword', ['id' => 'registerPassword', 'class' => 'formBorder bladeBrownBac form-control mb-1', 'placeholder' => 'Votre mot de passe'])
            ->addSpan('8 caractères minimum', ['class' => 'greenlightCol'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('password', 'registerPasswordConfirm', ['id' => 'registerPasswordConfirm', 'class' => 'formBorder bladeBrownBac form-control', 'placeholder' => 'Confirmez votre mot de passe'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row mb-4'])
            ->initDiv(['class' => 'col-12 mb-2 p-0'])
            ->addInput('checkbox', 'registerRememberMe', ['id' => 'registerRememberMe', 'class' => 'bladeBrownBac'])
            ->addLabelFor('rememberMe', 'Se souvenir de moi', ['class' => 'darkBrownCol ps-3'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row'])
            ->addButton('submit', 'registerButton', 'S\'inscrire', ['id' => 'registerButton', 'class' => 'blurButton greenlightBac whiteCol boxShadow col-12 mb-1 ps-0', 'disabled' => true])
            ->endDiv()
            ->endForm();
        $this->render('Frontend/login/register', ['registerForm' => $registerForm->create()]);
    }

    /**
     * Method to manage logout of members
     *
     * @return void
     */
    public function logout()
    {
        unset($_SESSION['member']);
        header('location: /home');
        exit;
    }
}
