<?php
class Album_Model{
	public $id;
  	public $anh;
	public $ten;
	public $casi_id;
	public $theloai_id;
	

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from albums';
		$result = mysqli_query($conn, $sql);
		$list_album = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $album = new Album_Model();
            $album->id = $row['id'];
            $album->anh = $row['anh'];
            $album->ten = $row['ten'];
            $album->casi_id = $row['casi_id'];
            $album->theloai_id = $row['theloai_id'];
            $list_album[] = $album;            
        }

        return $list_album;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO albums (anh, ten, casi_id, theloai_id) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssii", $this->anh, $this->ten, $this->casi_id, $this->theloai_id);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from albums where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $album = new Album_Model();
        $album->id = $row['id'];
        $album->anh = $row['anh'];
        $album->ten = $row['ten'];
        $album->casi_id = $row['casi_id'];
        $album->theloai_id = $row['theloai_id'];
        return $album;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from albums where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE albums SET anh=?, ten=?, casi_id=?, theloai_id=? WHERE id=?");
		$stmt->bind_param("ssiii", $this->anh, $this->ten, $this->casi_id, $this->theloai_id, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
}
