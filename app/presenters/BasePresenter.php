<?php

namespace App\Presenters;

use Nette;
use App\Model\UserManager;
use Tomaj\Form\Renderer\BootstrapRenderer;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	protected $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

	public function beforeRender()
	{

	}

}
