<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 7:52
 */
$this->pageTitle = Yii::app()->name . ' - Register';
$this->breadcrumbs = array(
    'Edit Data User',
);

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

if ($_POST) {
    $eks = new UserForm;

    $eks->nama = $_POST['nama'];
    $eks->password = $_POST['password'];
    $eks->userlama = $id;

    if ($eks->update()) {
        echo "<script>alert('Data Berhasil Di Rubah');location.href='index.php';</script>";
    } else {
        echo "<script>alert('Data Tidak Dapat Di Rubah');location.href='index.php';</script>";
    }
}
?>
<h1>Form Edit Data User</h1>
<?php
print $id;
?>
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