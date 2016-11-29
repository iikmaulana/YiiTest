<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 4:51
 */

$this->pageTitle = Yii::app()->name . ' - Register';
$this->breadcrumbs = array(
    'Register',
);

if ($_POST) {
    $eks = new RegisterForm;

    $eks->nama = $_POST['nama'];
    $eks->alamat = $_POST['alamat'];
    $eks->tanggal = $_POST['tanggal'];
    $eks->email = $_POST['email'];
    $eks->telepon = $_POST['telepon'];

    if (!$eks->nama || !$eks->alamat || !$eks->tanggal || !$eks->email) {
        $message = "Pastikan Data Sudah Terisi Dengan Benar";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else if (!is_numeric($eks->telepon)) {
        $message = "Nomor Hanya Berupa Angka";
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
<h1>Form Register</h1>
<div class="container showgrid">
    <div class="form">
        <form method="post">
            <div class="span-12">
                <div class="row">
                    <label for="nama" class="required">Nama Member :</label>
                    <?php echo CHtml::textField('nama', '', array('style' => 'width:300px')); ?>
                </div>
                <div class="row">
                    <label for="alamat">Alamat :</label>
                    <?php echo CHtml::textArea('alamat', '', array('rows' => '10', 'cols' => '60')); ?>
                </div>
                <div class="row">
                    <label for="tanggal">Tanggal Lahir :</label>
                    <?php echo CHtml::textField('tanggal', '', array('style' => 'width:300px')); ?>
                    <span class="field_name_help">1995-04-18</span>
                </div>

                <div class="row">
                    <label for="email">Email :</label>
                    <?php echo CHtml::textField('email', '', array('style' => 'width:300px')); ?>
                    <span class="field_name_help">contoh@email.com</span>
                </div>

                <div class="row">
                    <label for="telepon">Telepon :</label>
                    <?php echo CHtml::textField('telepon', '', array('style' => 'width:300px')); ?>
                </div>

                <button type="submit" class="btn btn-primary"><span
                        class="fa fa-clone"></span> Simpan
                </button>
            </div>
        </form>
    </div>
</div>