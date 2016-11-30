<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 4:51
 */

$pro = new UserForm;
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->nama = $id;
if ($pro->delete()) {
    echo "<script>alert('Data Berhasil Di Hapus');location.href='index.php';</script>";
} else {
    $message = "Data Tidak Dapat Di Hapus";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>