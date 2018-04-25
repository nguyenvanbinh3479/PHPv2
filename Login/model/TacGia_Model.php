<?php
class TacGia_Model{
  public $id;
  public $anh;
  public $ten;
  public $thongtin;

    public function all(){
    $conn = FT_Database::instance()->getConnection();
    $sql = 'select * from tacgias';
    $result = mysqli_query($conn, $sql);
    $list_tacgia = array();

    if(!$result)
      die('Error: '.mysqli_query_error());

    while ($row = mysqli_fetch_assoc($result)){
            $tacgia = new TacGia_Model();
            $tacgia->id = $row['id'];
            $tacgia->anh = $row['anh'];
            $tacgia->ten = $row['ten'];
            $tacgia->thongtin = $row['thongtin'];
            $list_tacgia[] = $tacgia;
        }

        return $list_tacgia;
  }

  public function save(){
    $conn = FT_Database::instance()->getConnection();
    $stmt = $conn->prepare("INSERT INTO tacgias (anh, ten, thongtin) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $this->anh, $this->ten, $this->thongtin);
    $rs = $stmt->execute();
    $this->id = $stmt->insert_id;
    $stmt->close();
    return $rs;
  }

  public function findById($id){
    $conn = FT_Database::instance()->getConnection();
    $sql = 'select * from tacgias where id='.$id;
    $result = mysqli_query($conn, $sql);

    if(!$result)
      die('Error: ');

        $row = mysqli_fetch_assoc($result);
        $tacgia = new TacGia_Model();
        $tacgia->id = $row['id'];
        $tacgia->anh = $row['anh'];
        $tacgia->ten = $row['ten'];
        $tacgia->thongtin = $row['thongtin'];

        return $tacgia;
  }

  public function delete(){
    $conn = FT_Database::instance()->getConnection();
    $sql = 'delete from tacgias where id='.$this->id;
    $result = mysqli_query($conn, $sql);

    return $result;
  }

  public function update(){
    $conn = FT_Database::instance()->getConnection();
    $stmt = $conn->prepare("UPDATE tacgias SET anh=?, ten=?, thongtin=? WHERE id=?");
    $stmt->bind_param("sssi", $this->anh, $this->ten, $this->thongtin, $_POST['id']);
    $stmt->execute();
    $stmt->close();
  }

}
