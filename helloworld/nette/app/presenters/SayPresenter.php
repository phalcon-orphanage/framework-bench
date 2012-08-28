<?php

/**
 * Homepage presenter.
 */
class SayPresenter extends Nette\Application\UI\Presenter
{

	public function renderHello()
	{
		$this->template->say= 'Hello!';
	}

}
