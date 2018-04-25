<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Profile_Controller extends Base_Controller
{

    public function index()
    {        
        // Load view
        $this->view->load('profile/profile');
    }

}