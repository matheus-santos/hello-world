<?php

class BaseController extends Controller {

    protected $template = array();
    protected $bundle   = array();

    /**
     * BaseController constructor
     */
    function __construct() 
    {
        // Template format
        $this->template = (object) array(
            'main'       => 'template/main',
            'components' => array('template/header', 'template/footer'),
            'composer'   => array('template/navbar')
        );

        // User data
        $this->bundle['user'] = array(
            'name'  => 'Matheus',
            'email' => 'matheus@treefrog.com'
        );

        // Sharing important data across all views
        View::share('bundle',  $this->bundle);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

}
