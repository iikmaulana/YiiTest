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
<h1>Form Edit Data Member</h1>
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
                    <label for="tgl">Tanggal Lahir :</label>
                    <?php echo CHtml::textField('tgl', '', array('style' => 'width:300px')); ?>
                    <span class="field_name_help">18-04-1995</span>
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