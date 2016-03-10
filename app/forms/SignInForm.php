<?php

use Nette\Application\UI,
    Nette\ComponentModel\IContainer;

class SignInForm extends UI\Form {

    public function __construct(IContainer $parent = NULL, $name = NULL) {
        parent::__construct($parent, $name);

        $this->addText('username', 'Login')->addRule($this::MAX_LENGTH, 'Login is way too long', 50)->setRequired('Please enter your Login.');
        $this->addPassword('password', 'Password')->addRule($this::MAX_LENGTH, 'Password is way too long', 50)->setRequired('Please enter your Password.');
        $this->addCheckbox('remember', 'Keep me signed in');
        $this->addSubmit('send', 'Sign in');
    }

}
