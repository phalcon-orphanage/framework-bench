<?php

class SayController extends Controller
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionHello()
	{
		// renders the view file 'protected/views/hello/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('hello');
	}

}
