<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class YeuThich_Controller extends Base_Controller
{
    /**
    * action index: show all yeuthichs
    * method: GET
    */
    public function index()
    {        
        $this->model->load('YeuThich');
        $this->model->load('BaiHat');
        $this->model->load('User');
        $list_yeuthich = $this->model->YeuThich->all();
        $list_baihat = $this->model->BaiHat->all();
        $list_user = $this->model->User->all();
        $data = array(
            'title' => 'index',
            'list_yeuthich' => $list_yeuthich,
            'list_baihat' => $list_baihat,
            'list_user' => $list_user
        );

        // Load view
        $this->view->load('yeuthichs/index', $data);
    }

    /**
    * action show: show a YeuThich
    * method: GET
    */
    public function show()
    {        
        $this->model->load('YeuThich');
        $yeuthich = $this->model->YeuThich->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'yeuthich' => $yeuthich
        );

        // Load view
        $this->view->load('yeuthichs/show', $data);
    }

    /**
    * action create: create a YeuThich
    * method: GET
    */
    public function create()
    {        
        $this->model->load('BaiHat');
        $this->model->load('User');

        $list_baihat = $this->model->BaiHat->all();
        $list_user = $this->model->User->all();

        $data = array(
            'title' => 'index',
            'list_baihat' => $list_baihat,
            'list_user' => $list_user,
        );

        $this->view->load('yeuthichs/create',$data);

    }

     /**
    * action store: save a YeuThich to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('YeuThich');
        $this->model->YeuThich->baihat_id = $_POST['baihat_id'];
        $this->model->YeuThich->user_id = $_POST['user_id'];
        $this->model->YeuThich->ngay = $_POST['ngay'];
        $this->model->YeuThich->save();

        go_back();
    }

    /**
    * action edit: show form edit a YeuThich
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('YeuThich');
        $this->model->load('BaiHat');
        $this->model->load('User');
        $yeuthich = $this->model->YeuThich->findById($_GET['id']);
        $list_baihat = $this->model->BaiHat->all();
        $list_user = $this->model->User->all();
        $data = array(
            'title' => 'edit',
            'yeuthich' => $yeuthich,
            'list_baihat' => $list_baihat,
            'list_user' => $list_user
        );

        // Load view
        $this->view->load('yeuthichs/edit', $data);
    }

    /**
    * action edit: update YeuThich database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('YeuThich');
        $yeuthich = $this->model->YeuThich->findById($_POST['id']);
        $yeuthich->baihat_id = $_POST['baihat_id'];
        $yeuthich->user_id = $_POST['user_id'];          
        $yeuthich->ngay = $_POST['ngay'];          
        $yeuthich->update();

        go_back();
    }

    /**
    * action delete: show form edit a YeuThich
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('YeuThich');
        $yeuthich = $this->model->YeuThich->findById($_GET['id']);
        $yeuthich->delete();

        go_back();
    }
}
