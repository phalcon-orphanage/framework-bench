<?php

class Say_Controller extends Base_Controller
{

    public function action_hello()
    {
        return View::make('say.hello');
    }

}