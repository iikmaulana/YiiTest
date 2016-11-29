<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 4:51
 */

$this->pageTitle = Yii::app()->name . ' - Tambah User';
$this->breadcrumbs = array(
    'Tambah User',
);

if ($_POST) {
    $eks = new UserForm;

    $eks->nama = $_POST['nama'];
    $eks->password = $_POST['password'];

    if (!$eks->nama || !$eks->password) {
        $message = "Pastikan Data Sudah Terisi Dengan Benar";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        if ($eks->insert()) {
            $message = "Data Berhasil Di Simpan";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "Pastikan Data Sudah Terisi Dengan Benar";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>
<h1>Form Register User</h1>
<div class="container showgrid">
    <div class="form">
        <form method="post">
            <div class="span-12">
                <div class="row">
                    <label for="nama" class="required">Nama User :</label>
                    <?php echo CHtml::textField('nama', '', array('style' => 'width:300px')); ?>
                </div>

                <div class="row">
                    <label for="password">Password :</label>
                    <?php echo CHtml::passwordField('password', '', array('style' => 'width:300px')); ?>
                </div>

                <button type="submit" class="btn btn-primary"><span
                        class="fa fa-clone"></span> Simpan
                </button>
            </div>
        </form>
    </div>
</div>