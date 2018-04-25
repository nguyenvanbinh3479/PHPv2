<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class CaSi_Controller extends Base_Controller
{
    /**
    * action index: show all CaSis
    * method: GET
    */
    public function index()
    {        
        $this->model->load('CaSi');
        $list_casi = $this->model->CaSi->all();
        $data = array(
            'title' => 'index',
            'list_casi' => $list_casi
        );

        // Load view
        $this->view->load('casis/index', $data);
    }

    /**
    * action show: show a CaSi
    * method: GET
    */
    public function show()
    {        
        $this->model->load('CaSi');
        $casi = $this->model->CaSi->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'casi' => $casi
        );

        // Load view
        $this->view->load('casis/show', $data);
    }

    /**
    * action create: create a casi
    * method: GET
    */
    public function create()
    {        
        $this->view->load('casis/create');
    }

     /**
    * action store: save a casi to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('CaSi');
        $this->model->CaSi->ten = $_POST['ten'];
        $this->model->CaSi->thong_tin = $_POST['thong_tin'];
        $this->model->CaSi->anh = $_POST['anh'];
        $this->model->CaSi->save();

        go_back();
    }

    /**
    * action edit: show form edit a CaSi
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('CaSi');
        $casi = $this->model->CaSi->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'casi' => $casi
        );

        // Load view
        $this->view->load('casis/edit', $data);
    }

    /**
    * action edit: update CaSi database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('CaSi');
        $casi = $this->model->CaSi->findById($_POST['id']);
        $casi->ten = $_POST['ten'];
        $casi->thong_tin = $_POST['thong_tin'];
        $casi->anh = $_POST['anh'];    
        $casi->update();

        go_back();
    }

    /**
    * action delete: show form edit a CaSi
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('CaSi');
        $casi = $this->model->CaSi->findById($_GET['id']);
        $casi->delete();

        go_back();
    }
}
