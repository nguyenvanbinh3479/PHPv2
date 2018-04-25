<?php 
class YeuThich_Model{
    public $baihat_id;
    public $user_id;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from yeuthichs';
		$result = mysqli_query($conn, $sql);
		$list_yeu_thich = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $yeu_thich = new YeuThich_Model();
            $yeu_thich->baihat_id = $row['baihat_id'];
            $yeu_thich->user_id = $row['user_id'];
            $list_yeu_thich[] = $yeu_thich;            
        }

        return $list_yeu_thich;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO yeuthichs (baihat_id, user_id) VALUES (?, ?)");
		$stmt->bind_param("ii", $this->baihat_id, $this->user_id);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from yeuthichs where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $yeu_thich = new YeuThich_Model();
        $yeu_thich->baihat_id = $row['baihat_id'];
        $yeu_thich->user_id = $row['user_id'];

        return $yeu_thich;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from yeuthichs where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE yeuthichs SET baihat_id=?, user_id=? WHERE id=?");
		$stmt->bind_param("iii", $this->baihat_id, $this->user_id, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
}
