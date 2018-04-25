<?php
class LuotNghe_Model{
	public $id;
	public $baihat_id;
	public $user_id;
	public $ngay;

	public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from luotnghes';
		$result = mysqli_query($conn, $sql);
		$list_luotnghe = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $luotnghe = new LuotNghe_Model();
            $luotnghe->id = $row['id'];
            $luotnghe->baihat_id = $row['baihat_id'];
            $luotnghe->user_id = $row['user_id'];
            $luotnghe->ngay = $row['ngay'];
            $list_luotnghe[] = $luotnghe;            
        }

        return $list_luotnghe;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO luotnghes (baihat_id, user_id, ngay) VALUES (?, ?, ?)");
		$stmt->bind_param("iis", $this->baihat_id, $this->user_id, $this->ngay);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from luotnghes where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $luotnghe = new LuotNghe_Model();
        $luotnghe->id = $row['id'];
        $luotnghe->baihat_id = $row['baihat_id'];
        $luotnghe->user_id = $row['user_id'];
        $luotnghe->ngay = $row['ngay'];

        return $luotnghe;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from luotnghes where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE luotnghes SET baihat_id=?, user_id=?, ngay=? WHERE id=?");
		$stmt->bind_param("iisi", $this->baihat_id, $this->user_id, $this->ngay, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}

	public function login($baihat_id, $user_id)
	{
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM luotnghes WHERE baihat_id = '" . $baihat_id . "' and user_id = '" . $user_id . "'";
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $luotnghe = new LuotNghe_Model();
        $luotnghe->id = $row['id'];
        $luotnghe->baihat_id = $row['baihat_id'];
        $luotnghe->user_id = $row['user_id'];
        $luotnghe->ngay = $row['ngay'];

        return $luotnghe;
	}
}