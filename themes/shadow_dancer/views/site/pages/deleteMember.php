<?php
/**
 * Created by IntelliJ IDEA.
 * User: iik_maulana
 * Date: 29/11/16
 * Time: 4:51
 */

$pro = new RegisterForm;
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->email = $id;
print $id;
if ($pro->delete()) {
    echo "<script>alert('Data Berhasil Di Hapus');location.href='index.php';</script>";
} else {
    echo "<script>alert('Data Tidak Dapat Di Hapus');location.href='index.php';</script>";
}
?>