<?php

class HomeController extends BaseController {

    private $_folder = 'home';

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function index()
    {
        $data = array();
        $view = $this->_folder . '/main';

        // Template
        return View::make($this->template->main)
            ->nest('view', $view, $this->bundle);
    }

}
