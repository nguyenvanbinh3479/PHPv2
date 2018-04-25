<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class BaiHat_Controller extends Base_Controller
{
    /**
    * action index: show all baihats
    * method: GET
    */
    public function index()
    {        
        $this->model->load('BaiHat');
        $this->model->load('CaSi');
        $this->model->load('Album');
        $this->model->load('TheLoai');
        $this->model->load('TacGia');
        $list_baihat = $this->model->BaiHat->all();
        $list_casi = $this->model->CaSi->all();
        $list_album = $this->model->Album->all();
        $list_theloai = $this->model->TheLoai->all();
        $list_tacgia= $this->model->TacGia->all();

        $data = array(
            'title' => 'index',
            'list_baihat' => $list_baihat,
            'list_casi' => $list_casi,
            'list_album' => $list_album,
            'list_theloai' => $list_theloai,
            'list_tacgia' => $list_tacgia
        );
       
        $this->view->load('baihats/index', $data);
    }

    /**
    * action show: show a baihat
    * method: GET
    */
    public function show()
    {        
        $this->model->load('BaiHat');
        $baihat = $this->model->BaiHat->findById($_GET['id']);
        $data = array(
            'title' => 'show',
            'baihat' => $baihat
        );

        // Load view
        $this->view->load('baihats/show', $data);
    }

    /**
    * action create: create a baihat
    * method: GET
    */
    public function create()
    {        

        $this->model->load('Album');
        $this->model->load('CaSi');
        $this->model->load('TheLoai');
        $this->model->load('TacGia');

        $list_album = $this->model->Album->all();
        $list_casi = $this->model->CaSi->all();
        $list_theloai = $this->model->TheLoai->all();
        $list_tacgia= $this->model->TacGia->all();

        $data = array(
            'title' => 'index',
            'list_album' => $list_album,
            'list_casi' => $list_casi,
            'list_theloai' => $list_theloai,
            'list_tacgia' => $list_tacgia
        );

        $this->view->load('baihats/create',$data);

    }

     /**
    * action store: save a baihat to database
    * method: POST
    */
    public function store()
    {        
        $this->model->load('BaiHat');
        $this->model->BaiHat->casi_id = $_POST['casi_id'];
        $this->model->BaiHat->album_id = $_POST['album_id'];
        $this->model->BaiHat->theloai_id = $_POST['theloai_id'];
        $this->model->BaiHat->tacgia_id = $_POST['tacgia_id'];
        $this->model->BaiHat->ten = $_POST['ten'];
        $this->model->BaiHat->anh = $_POST['anh'];
        $this->model->BaiHat->loi_bai_hat = $_POST['loi_bai_hat'];
        $this->model->BaiHat->link = $_POST['link'];
        $this->model->BaiHat->save();

        go_back();
    }

    /**
    * action edit: show form edit a baihat
    * method: GET
    */
    public function edit()
    {        
        $this->model->load('BaiHat');
        $this->model->load('CaSi');
        $this->model->load('Album');
        $this->model->load('TheLoai');
        $this->model->load('TacGia');

        $baihat = $this->model->BaiHat->findById($_GET['id']);
        $list_album = $this->model->Album->all();
        $list_casi = $this->model->CaSi->all();
        $list_theloai = $this->model->TheLoai->all();
        $list_tacgia= $this->model->TacGia->all();
        $data = array(
            'title' => 'edit',
            'baihat' => $baihat,
            'list_casi' => $list_casi,
            'list_album' => $list_album,
            'list_theloai' => $list_theloai,
            'list_tacgia' => $list_tacgia
        );

        // Load view
        $this->view->load('baihats/edit', $data);
    }

    /**
    * action edit: update baihat database
    * method: POST
    */
    public function update()
    {        
        $this->model->load('BaiHat');
        $baihat = $this->model->BaiHat->findById($_POST['id']);
        $baihat->casi_id = $_POST['casi_id'];
        $baihat->album_id = $_POST['album_id'];
        $baihat->theloai_id = $_POST['theloai_id'];
        $baihat->tacgia_id = $_POST['tacgia_id'];
        $baihat->ten = $_POST['ten'];
        $baihat->anh = $_POST['anh'];
        $baihat->loi_bai_hat = $_POST['loi_bai_hat'];
        $baihat->link = $_POST['link'];
        $baihat->update();

        go_back();
    }

    /**
    * action delete: show form edit a baihat
    * method: GET
    */
    public function delete()
    {        
        $this->model->load('BaiHat');
        $baihat = $this->model->BaiHat->findById($_GET['id']);
        $baihat->delete();

        go_back();
    }
}
