<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 3:51
 */
class UserForm extends CFormModel
{
    public $nama;
    public $password;
    public $userlama;
    private $table_name = "user";

    public function insert(){
        $connection=Yii::app()->db;

        $query = "insert into ".$this->table_name." values(?,?)";
        $stmt=$connection->createCommand($query);
        $stmt->bindParam(1, $this->nama);
        $stmt->bindParam(2, $this->password);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function readAll(){
        $row=Yii::app()->db->createCommand()->select('gametitle')->from('db');
    }
//
    public function update(){
        $connection = Yii::app()->db;
        $query = "UPDATE
					" . $this->table_name . "
				SET
					username = :username,
					password = :password
				WHERE
					username = :userlama";

        $stmt = $connection->createCommand($query);
        $stmt->bindParam(':username', $this->nama);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':userlama', $this->userlama);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function delete()
    {
        $connection = Yii::app()->db;

        $query = "DELETE FROM " . $this->table_name . " WHERE username = ?";
        $stmt = $connection->createCommand($query);
        $stmt->bindParam(1, $this->nama);

        if ($result = $stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

//
//    public function delete(){
//        $query = "DELETE FROM " . $this->table_name . " WHERE email = ?";
//
//        $stmt = $this->conn->prepare($query);
//        $stmt->bindParam(1, $this->email);
//
//        if($result = $stmt->execute()){
//            return true;
//        }else{
//            return false;
//        }
//    }



}