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
        $query = "UPDATE
					" . $this->table_name . "
				SET
					nama = :nama,
					alamat = :alamat,
					tanggal = :tanggal,
					email = :email,
					telepon = :telepon,
				WHERE
					email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama', $this->$nama);
        $stmt->bindParam(':alamat', $this->$alamat);
        $stmt->bindParam(':tanggal', $this->$tanggal);
        $stmt->bindParam(':email', $this->$email);
        $stmt->bindParam(':telepon', $this->$telepon);

        if($stmt->execute()){
            return true;
        }else{
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