<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 7:52
 */
$this->pageTitle = Yii::app()->name . ' - Register';
$this->breadcrumbs = array(
    'Edit Data Member',
);

if ($_POST) {
    $eks = new RegisterForm;

    $eks->nama = $_POST['nama'];
    $eks->alamat = $_POST['alamat'];
    $eks->tanggal = $_POST['tgl'];
    $eks->email = $_POST['email'];
    $eks->telepon = $_POST['telepon'];

    if ($eks->insert()) {
        ?>
        <script type="text/javascript">
            window.onload = function () {
                showStickySuccessToast();
            };
        </script>
    <?php
    } else {
        ?>
        <script type="text/javascript">
            window.onload = function () {
                showStickyErrorToast();
            };
        </script>
    <?php
    }
}
?>
<h1>Form Edit Data User</h1>
<div class="container showgrid">
    <div class="form">
        <form method="post">
            <div class="span-12">
                <div class="row">
                    <label for="nama" class="required">Nama Member :</label>
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