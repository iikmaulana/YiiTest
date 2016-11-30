<?php

/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 3:51
 */
class RegisterForm extends CFormModel
{
    public $emailLama;
    public $nama;
    public $alamat;
    public $tanggal;
    public $email;
    public $telepon;
    private $table_name = "member";

    public function insert()
    {
        $connection = Yii::app()->db;

        $query = "insert into " . $this->table_name . " values(?,?,?,?,?)";
        $stmt = $connection->createCommand($query);
        $stmt->bindParam(1, $this->nama);
        $stmt->bindParam(2, $this->alamat);
        $stmt->bindParam(3, $this->tanggal);
        $stmt->bindParam(4, $this->email);
        $stmt->bindParam(5, $this->telepon);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }

    public function update()
    {
        $connection = Yii::app()->db;
        $query = "UPDATE
					" . $this->table_name . "
				SET
					nama = :nama,
					alamat = :alamat,
					tanggal_lahir = :tanggal,
					email = :email,
					no_tlpn = :telepon
				WHERE
					email = :emailLama";
        $stmt = $connection->createCommand($query);
        $stmt->bindParam(':nama', $this->nama);
        $stmt->bindParam(':alamat', $this->alamat);
        $stmt->bindParam(':tanggal', $this->tanggal);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telepon', $this->telepon);
        $stmt->bindParam(':emailLama', $this->emailLama);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $connection = Yii::app()->db;

        $query = "DELETE FROM " . $this->table_name . " WHERE email = ?";
        $stmt = $connection->createCommand($query);
        $stmt->bindParam(1, $this->email);

        if ($result = $stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}