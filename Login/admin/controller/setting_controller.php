<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Setting_Controller extends Base_Controller
{

    public function index()
    {        
        // Load view
        $this->view->load('setting/setting');
    }

}