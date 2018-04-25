<?php
class User_Model{
	public $id;
	public $email;
	public $password;
	public $role;
	public $status;
	public $token;

	public function all(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from users';
		$result = mysqli_query($conn, $sql);
		$list_user = array();

		if(!$result)
			die('Error: '.mysqli_query_error());

		while ($row = mysqli_fetch_assoc($result)){
            $user = new User_Model();
            $user->id = $row['id'];
            $user->email = $row['email'];
            $user->password = $row['password'];
            $user->role = $row['role'];
            $user->status = $row['status'];
            $user->token = $row['token'];
            $list_user[] = $user;            
        }

        return $list_user;
	}

	public function save(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("INSERT INTO users (email, password, role, status, token) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $this->email, $this->password, $this->role, $this->status, $this->token);
		$rs = $stmt->execute();
		$this->id = $stmt->insert_id;		
		$stmt->close();
		return $rs;
	}

	public function findById($id){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'select * from users where id='.$id;
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $user = new User_Model();
        $user->id = $row['id'];
        $user->email = $row['email'];
        $user->password = $row['password'];
        $user->role = $row['role'];
        $user->status = $row['status'];

        return $user;
	}

	public function delete(){
		$conn = FT_Database::instance()->getConnection();
		$sql = 'delete from users where id='.$this->id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	public function update(){
		$conn = FT_Database::instance()->getConnection();
		$stmt = $conn->prepare("UPDATE users SET email=?, password=?, role=?, status=? WHERE id=?");
		$stmt->bind_param("ssssi", $this->email, $this->password, $this->role, $this->status, $_POST['id']);
		$stmt->execute();
		$stmt->close();
	}

	public function login($email, $password)
	{
		$conn = FT_Database::instance()->getConnection();
		$sql = "SELECT * FROM users WHERE email = '" . $email . "' and password = '" . $password . "'";
		$result = mysqli_query($conn, $sql);

		if(!$result)
			die('Error: ');

		$row = mysqli_fetch_assoc($result);
        $user = new User_Model();
        $user->id = $row['id'];
        $user->email = $row['email'];
        $user->password = $row['password'];
        $user->role = $row['role'];
        $user->status = $row['status'];

        return $user;
	}
}