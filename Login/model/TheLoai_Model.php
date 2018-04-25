<?php
class TheLoai_Model{
	public $id;
    public $ten;
    public $anh;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from theloais';
		$result = mysqli_query($conn, $sql);
		$list_theloai = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $theloai = new TheLoai_Model();
            $theloai->id = $row['id'];
            $theloai->ten = $row['ten'];
            $theloai->anh = $row['anh'];
            $list_theloai[] = $theloai;            
        }

        return $list_theloai;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO theloais (ten, anh) VALUES (?, ?)");
		$stmt->bind_param("ss", $this->ten, $this->anh);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from theloais where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $theloai = new TheLoai_Model();
        $theloai->id = $row['id'];
        $theloai->ten = $row['ten'];
        $theloai->anh = $row['anh'];

        return $theloai;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from theloais where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE theloais SET ten=?, anh=? WHERE id=?");
		$stmt->bind_param("ssi", $this->ten, $this->anh, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
    
}