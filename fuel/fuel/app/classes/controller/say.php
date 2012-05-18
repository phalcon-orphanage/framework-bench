<?php

class Controller_Say extends Controller
{

	/**
	 * The basic say message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(View::forge('say/hello'));
	}

}
