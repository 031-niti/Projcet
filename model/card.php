<?php
class card {
    private $connectDB;

    public function __construct(){
        $con = new database();
        $con->__construct();
        $con->connect();
        $this->connectDB = $con->connectDB;
    }

    public function getCardDetail(){
        $sql = "SELECT * FROM card_details";
      
        if ($this->connectDB) {
            $query = $this->connectDB->prepare($sql);
            if($query->execute()){
                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                $data = json_encode($res);
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getCardDetailByID($id){
    $sql = "SELECT * FROM card_details WHERE id = ?";
  
    if ($this->connectDB) {
        $query = $this->connectDB->prepare($sql);
        $query->bindParam(1, $id);
        if($query->execute()){
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($res);
            return $data;
        } else {
            return false;
        }
        } else {
            return false;
        }
    }
    public function Add($data)
    {
        $sql = "INSERT INTO `card_details`(`id`, `card_firstname`, `card_lastname`, `card_id`, `card_image_path`, `card_major`, `card_univ`)";
        $sql .= " VALUES (:id, :card_firstname, :card_lastname, :card_id, :card_image_path , :card_major , :card_univ);";
        $query = $this->connectDB->prepare($sql);
        if( $query->execute($data)){
            return true;
        }else {
            return false;
        }
    }
    public function Del($id) {
        $sql = "DELETE FROM `card_details` WHERE `id`='".$id."'";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        return $result;
    }

    public function editCardeditCard($id, 
    $card_firstname,
    $card_lastname,
    $card_id,
    $card_image_path,
    $card_major,
    $card_univ)
    {
        $sql = "UPDATE card_details SET card_firstname= '$card_firstname', 
        card_lastname= '$card_lastname', 
        card_id= '$card_id', 
        card_image_path= '$card_image_path', 
        card_major= '$card_major', 
        card_univ= '$card_univ' 
        WHERE id= '$id'";
        $stmt = $this->connectDB->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        return $result;
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
        mysqli_close($this->connectDB);
    }
}
?>