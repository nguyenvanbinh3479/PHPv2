<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class TacGia_Controller extends Base_Controller
{
    /**
    * action index: show all users
    * method: GET
    */
    public function index()
    {
        $this->model->load('TacGia');
        $list_tacgia = $this->model->TacGia->all();
        $data = array(
            'title' => 'index',
            'list_tacgia' => $list_tacgia
        );

        // Load view
        $this->view->load('tacgias/index', $data);
    }

    /**
    * action show: show a user
    * method: GET
    */
    public function show()
    {
        $this->model->load('TacGia');
        $tacgia = $this->model->TacGia->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'tacgia' => $tacgia
        );

        // Load view
        $this->view->load('tacgias/show', $data);
    }

    /**
    * action create: create a user
    * method: GET
    */
    public function create()
    {
        $this->view->load('tacgias/create');
    }

     /**
    * action store: save a user to database
    * method: POST
    */
    public function store()
    {
        $this->model->load('TacGia');
        $this->model->TacGia->anh = $_POST['anh'];
        $this->model->TacGia->ten = $_POST['ten'];
        $this->model->TacGia->thongtin = $_POST['thongtin'];
        $this->model->TacGia->save();

        go_back();
    }

    /**
    * action edit: show form edit a user
    * method: GET
    */
    public function edit()
    {
        $this->model->load('TacGia');
        $tacgia = $this->model->TacGia->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'tacgia' => $tacgia
        );

        // Load view
        $this->view->load('tacgias/edit', $data);
    }

    /**
    * action edit: update user database
    * method: POST
    */
    public function update()
    {
        $this->model->load('TacGia');
        $tacgia = $this->model->TacGia->findById($_POST['id']);
        $tacgia->anh = $_POST['anh'];
        $tacgia->ten = $_POST['ten'];
        $tacgia->thongtin = $_POST['thongtin'];
        $tacgia->update();

        go_back();
    }

    /**
    * action delete: show form edit a user
    * method: GET
    */
    public function delete()
    {
        $this->model->load('TacGia');
        $tacgia = $this->model->TacGia->findById($_GET['id']);
        $tacgia->delete();

        go_back();
    }
}
#sssss
