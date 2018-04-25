<?php
class Playlist_Model{
    public $id;
	public $user_id;
    public $ten;
	public $anh;

    public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from playlists';
		$result = mysqli_query($conn, $sql);
		$list_playlist = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $playlist = new Playlist_Model();
            $playlist->id = $row['id'];
			$playlist->user_id = $row['user_id'];
            $playlist->ten = $row['ten'];
			$playlist->anh = $row['anh'];
			
            $list_playlist[] = $playlist;            
        }

        return $list_playlist;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO playlists (user_id, ten, anh) VALUES (?, ?, ?)");
		$stmt->bind_param("iss", $this->user_id, $this->ten, $this->anh);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from playlists where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $playlist = new Playlist_Model();
        $playlist->id = $row['id'];
        $playlist->user_id = $row['user_id'];
        $playlist->ten = $row['ten'];
        $playlist->anh = $row['anh'];

        return $playlist;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from playlists where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE playlists SET user_id=?, ten=?, anh=? WHERE id=?");
		$stmt->bind_param("issi", $this->user_id, $this->ten, $this->anh, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}

}