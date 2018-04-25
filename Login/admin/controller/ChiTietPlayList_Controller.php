<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class ChiTietPlayList_Controller extends Base_Controller
{
    /**
    * action index: show all chitietplaylists
    * method: GET
    */
    public function index()
    {        
        $this->model->load('ChiTietPlayList');
        $list_chitietplaylist = $this->model->ChiTietPlayList->all();
        $data = array(
            'title' => 'index',
            'list_chitietplaylist' => $list_chitietplaylist
        );

        // Load view
        $this->view->load('chitietplaylists/index', $data);
    }

    /**
    * action show: show a ChiTietPlayList
    * method: GET
    */
    public function show()
    {        
        $this->model->load('ChiTietPlayList');
        $chitietplaylist = $this->model->ChiTietPlayList->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'chitietplaylist' => $chitietplaylist
        );

        // Load view
        $this->view->load('chitietplaylists/show', $data);
    }

    /**
    * action create: create a ChiTietPlayList
    * method: GET
    */
    public function create()
    {        
        $this->view->load('chitietplaylists/create');
    }

     /**
    * action store: save a ChiTietPlayList to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('ChiTietPlayList');
        $this->model->ChiTietPlayList->playlist_id = $_POST['playlist_id'];
        $this->model->ChiTietPlayList->baihat_id = $_POST['baihat_id'];
        $this->model->ChiTietPlayList->save();

        go_back();
    }

    /**
    * action edit: show form edit a ChiTietPlayList
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('ChiTietPlayList');
        $chitietplaylist = $this->model->ChiTietPlayList->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'chitietplaylist' => $chitietplaylist
        );

        // Load view
        $this->view->load('chitietplaylists/edit', $data);
    }

    /**
    * action edit: update ChiTietPlayList database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('ChiTietPlayList');
        $chitietplaylist = $this->model->ChiTietPlayList->findById($_POST['id']);
        $chitietplaylist->playlist_id = $_POST['playlist_id'];
        $chitietplaylist->baihat_id = $_POST['baihat_id'];        
        $chitietplaylist->update();

        go_back();
    }

    /**
    * action delete: show form edit a ChiTietPlayList
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('ChiTietPlayList');
        $chitietplaylist = $this->model->ChiTietPlayList->findById($_GET['id']);
        $chitietplaylist->delete();

        go_back();
    }
}
