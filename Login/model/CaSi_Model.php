<?php 
class CaSi_Model{
	public $id;
	public $ten;
    public $thong_tin;
    public $anh;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from casis';
		$result = mysqli_query($conn, $sql);
		$list_ca_si = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $ca_si = new CaSi_Model();
            $ca_si->id = $row['id'];
            $ca_si->ten = $row['ten'];
            $ca_si->thong_tin = $row['thong_tin'];
            $ca_si->anh = $row['anh'];
            $list_ca_si[] = $ca_si;            
        }

        return $list_ca_si;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO casis (ten, thong_tin, anh) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $this->ten, $this->thong_tin, $this->anh);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from casis where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $ca_si = new CaSi_Model();
        $ca_si->id = $row['id'];
        $ca_si->ten = $row['ten'];
        $ca_si->thong_tin = $row['thong_tin'];
        $ca_si->anh = $row['anh'];

        return $ca_si;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from casis where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE casis SET ten=?, thong_tin=?, anh=? WHERE id=?");
		$stmt->bind_param("sssi", $this->ten, $this->thong_tin, $this->anh, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}
}
