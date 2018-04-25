<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Playlist_Controller extends Base_Controller
{
    /**
    * action index: show all playlists
    * method: GET
    */
    public function index()
    {        
        $this->model->load('Playlist');
        $list_playlist = $this->model->Playlist->all();
        $data = array(
            'title' => 'index',
            'list_playlist' => $list_playlist
        );

        // Load view
        $this->view->load('playlists/index', $data);
    }

    /**
    * action show: show a playlist
    * method: GET
    */
    public function show()
    {        
        $this->model->load('Playlist');
        $playlist = $this->model->Playlist->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'playlist' => $playlist
        );

        // Load view
        $this->view->load('playlists/show', $data);
    }

    /**
    * action create: create a Playlist
    * method: GET
    */
    public function create()
    {        
        $this->view->load('playlists/create');
    }

     /**
    * action store: save a Playlist to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('Playlist');
        $this->model->Playlist->user_id = $_POST['user_id'];
        $this->model->Playlist->ten = $_POST['ten'];
        $this->model->Playlist->anh = $_POST['anh'];
        $this->model->Playlist->save();

        go_back();
    }

    /**
    * action edit: show form edit a Playlist
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('Playlist');
        $playlist = $this->model->Playlist->findById($_GET['id']);
        $data = array(
            'title' => 'edit',
            'playlist' => $playlist
        );

        // Load view
        $this->view->load('playlists/edit', $data);
    }

    /**
    * action edit: update Playlist database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('Playlist');
        $playlist = $this->model->Playlist->findById($_POST['id']);
        $playlist->user_id = $_POST['user_id'];
        $playlist->ten = $_POST['ten'];
        $playlist->anh = $_POST['anh'];      
        $playlist->update();

        go_back();
    }

    /**
    * action delete: show form edit a Playlist
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('Playlist');
        $playlist = $this->model->Playlist->findById($_GET['id']);
        $playlist->delete();

        go_back();
    }
}
