<?php 
class YeuThich_Model{
	public $id;
    public $baihat_id;
    public $user_id;
	public $ngay;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from yeuthichs';
		$result = mysqli_query($conn, $sql);
		$list_yeuthich = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $yeuthich = new YeuThich_Model();
            $yeuthich->id = $row['id'];
            $yeuthich->baihat_id = $row['baihat_id'];
            $yeuthich->user_id = $row['user_id'];
            $yeuthich->ngay = $row['ngay'];
            $list_yeuthich[] = $yeuthich;            
        }

        return $list_yeuthich;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO yeuthichs (baihat_id, user_id, ngay) VALUES (?, ?, ?)");
		$stmt->bind_param("iis", $this->baihat_id, $this->user_id, $this->ngay);
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
        $yeuthich = new YeuThich_Model();
        $yeuthich->id = $row['id'];
        $yeuthich->baihat_id = $row['baihat_id'];	
        $yeuthich->user_id = $row['user_id'];
        $yeuthich->ngay = $row['ngay'];

        return $yeuthich;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from yeuthichs where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE yeuthichs SET baihat_id=?, user_id=?, ngay=? WHERE id=?");
		$stmt->bind_param("iii", $this->baihat_id, $this->user_id, $this->ngay, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
}
