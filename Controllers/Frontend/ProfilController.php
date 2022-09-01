<?php

namespace Projet5\Controllers\Frontend;

use Projet5\Controllers\Controller;
use Projet5\Models\Frontend\MembersModel;
use Projet5\Models\Frontend\MembersEmailModel;
use Projet5\Core\Form;

class ProfilController extends Controller
{
    public function displayProfil(int $id)
    {
        $errors = array();
        $hits = array();

        $memberModel = new MembersModel;
        $memberEmailModel = new MembersEmailModel;

        $memberArray = $memberModel->findOnMultipleTables(['members', 'members_email'], ['members.id' => $id, 'members_email.member_id' => $id]);

        $member = $memberModel->hydrate($memberArray);
        $memberEmail = $memberEmailModel->hydrate($memberArray);

        if ($_POST) {
            if (FORM::validate($_POST, ['changeMdpOldPassword', 'changeMdpPassword', 'changeMdpPasswordConfirm'])) {
                if (password_verify($_POST['changeMdpOldPassword'], $member->getPassword())) {
                    if (strlen($_POST['changeMdpPassword']) >= 8) {
                        if ($_POST['changeMdpPassword'] === $_POST['changeMdpPasswordConfirm']) {
                            $newPass = password_hash($_POST['changeMdpPassword'], PASSWORD_ARGON2I);
                            $memberModel->setPassword($newPass)
                                ->setInscription_date($member->getInscription_date()->format('Y-d-m H:i:s'));

                            $member->update();

                            $hits['message'] = 'Le changement de mot de passe a été effectué';
                        } else {
                            $errors['message'] = 'Les mots de passe ne sont pas identiques';
                        }
                    } else {
                        $errors['message'] = 'Le nouveau mot de passe n\'est pas valide';
                    }
                } else {
                    $errors['message'] = 'L\'ancien mot de passe est incorrect';
                }
            } else {
                $errors['message'] = 'Tous les champs doivent être remplis';
            }

            if ($errors) {
                Form::displayError($errors);
            } elseif ($hits) {
                Form::displayHits($hits);
            }
        }

        $changeMdpForm = new Form;

        $changeMdpForm->initForm('post', '#', ['id' => 'changeMdpForm', 'class' => 'col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 my-2 p-4'])
            ->initDiv(['class' => 'row formBorder p-4'])
            ->initDiv(['class' => 'row d-flex flex-column mb-3'])
            ->addLabelFor('changeMdpOldPassword', 'Votre ancien mot de passe', ['class' => 'darkBrownCol col-12 p-0 mt-3 mb-2'])
            ->initDiv(['class' => 'col-12 ms-0 ms-md-2 p-0'])
            ->addInput('password', 'changeMdpOldPassword', ['id' => 'changeMdpOldPassword', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row d-flex flex-column mb-3'])
            ->initDiv(['class' => 'd-flex justify-content-center flex-wrap col-12 p-0 mt-3 mb-1'])
            ->addLabelFor('changeMdpPassword', 'Votre nouveau mot de passe', ['class' => 'darkBrownCol me-3'])
            ->addSpan('8 caractères minimum', ['class' => 'greenlightCol'])
            ->endDiv()
            ->initDiv(['class' => 'col-12 ms-0 ms-md-2 mt-2 p-0'])
            ->addInput('password', 'changeMdpPassword', ['id' => 'changeMdpPassword', 'class' => 'formBorder bladeBrownBac form-control w-100 mb-2'])
            ->endDiv()
            ->endDiv()
            ->initDiv(['class' => 'row d-flex flex-column mb-3'])
            ->addLabelFor('changeMdpPasswordConfirm', 'Confirmez votre nouveau mot de passe', ['class' => 'darkBrownCol col-12 p-0 mt-2 mb-2'])
            ->initDiv(['class' => 'col-12 ms-md-2 p-0'])
            ->addInput('password', 'changeMdpPasswordConfirm', ['id' => 'changeMdpPasswordConfirm', 'class' => 'formBorder bladeBrownBac form-control w-100'])
            ->endDiv()
            ->endDiv()
            ->initdiv(['class' => 'row my-3'])
            ->initdiv(['class' => 'd-flex justify-content-center col-12 mt-2'])
            ->addButton('submit', 'changeMdpButton', 'confirmer', ['id' => 'changeMdpButton', 'class' => 'blurButton greenlightBac whiteCol boxShadow col-12 p-0 ms-md-2 mb-1', 'disabled' => true])
            ->endDiv()
            ->endDiv()
            ->endDiv()
            ->endForm();
        $this->render('Frontend/profil', ['changeMdpForm' => $changeMdpForm->create(), 'member' => $member, 'memberEmail' => $memberEmail, 'errors' => $errors, 'hits' => $hits]);
    }
}
