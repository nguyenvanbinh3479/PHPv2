<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class TheLoai_Controller extends Base_Controller
{
    /**
    * action index: show all theloais
    * method: GET
    */
    public function index()
    {        
        $this->model->load('TheLoai');
        $list_theloai = $this->model->TheLoai->all();
        $data = array(
            'title' => 'index',
            'list_theloai' => $list_theloai
        );

        // Load view
        $this->view->load('theloais/index', $data);
    }

    /**
    * action show: show a TheLoai
    * method: GET
    */
    public function show()
    {        
        $this->model->load('TheLoai');
        $theloai = $this->model->TheLoai->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'theloai' => $theloai
        );

        // Load view
        $this->view->load('theloais/show', $data);
    }

    /**
    * action create: create a TheLoai
    * method: GET
    */
    public function create()
    {        
        $this->view->load('theloais/create');
    }

     /**
    * action store: save a TheLoai to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('TheLoai');
        $this->model->TheLoai->ten = $_POST['ten'];
        $this->model->TheLoai->anh = $_POST['anh'];
        $this->model->TheLoai->save();

        go_back();
    }

    /**
    * action edit: show form edit a TheLoai
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('TheLoai');
        $theloai = $this->model->TheLoai->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'theloai' => $theloai
        );

        // Load view
        $this->view->load('theloais/edit', $data);
    }

    /**
    * action edit: update TheLoai database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('TheLoai');
        $theloai = $this->model->TheLoai->findById($_POST['id']);
        $theloai->ten = $_POST['ten'];
        $theloai->anh = $_POST['anh'];         
        $theloai->update();

        go_back();
    }

    /**
    * action delete: show form edit a TheLoai
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('TheLoai');
        $theloai = $this->model->TheLoai->findById($_GET['id']);
        $theloai->delete();

        go_back();
    }
}
