<?php

class SayController extends CController
{
	public $layout=false;

	public function actionHello()
	{
		die($this->render('hello'));
	}

}
