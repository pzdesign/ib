<?php

namespace App\Presenters;

use Nette,
    Nette\Forms\Controls,
    Nette\Application\UI\Form;
use App\Model;


class SignPresenter extends BasePresenter
{
    public function actionIn() {
        
        $this->template->passUpdated = false;
    }
    /**
     * Sign-in form factory.
     * @return Nette\Application\UI\Form
     */
    protected function createComponentSignInForm($name) {

        $form = new \SignInForm($this, $name);
        $form->onSuccess[] = array($this, 'signInFormSucceeded');
        return $form;
    }
    public function signInFormSucceeded($form,$values)
    {
        //$register = new UserManager($this->database);
       // $register->add('test','test');       
        if ($values->remember) {
            $this->getUser()->setExpiration('14 days', FALSE);
        } else {
            $this->getUser()->setExpiration('20 minutes', TRUE);
        }
        $values = $form->values;
        try {
            $this->getUser()->login($values->username, $values->password);
            $this->flashMessage('Přihlášení bylo úspěšné.', 'alert-success');
            $this->redirect('Homepage:');
        } catch (Nette\Security\AuthenticationException $e) {
            $this->flashMessage('Nesprávné přihlašovací jméno nebo heslo.', 'alert-danger');
        }
    }

    public function actionOut()
    {
        $this->getUser()->logout();
        $this->flashMessage('Odhlášení bylo úspěšné.', 'alert-success');
        $this->redirect('Homepage:');
    }
}
