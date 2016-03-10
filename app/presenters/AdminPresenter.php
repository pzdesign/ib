<?php

namespace App\Presenters;

use Nette;
use App\Model;


class AdminPresenter extends BasePresenter
{

	public function renderDefault()
	{
        if (!$this->getUser()->isLoggedIn()) {
            $this->redirect('Sign:in');
        }
		$this->template->anyVariable = 'any value';
		
	}

}
