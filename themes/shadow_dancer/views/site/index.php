<?php
$baseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile('http://www.google.com/jsapi');
$cs->registerCoreScript('jquery');
$cs->registerScriptFile($baseUrl . '/js/jquery.gvChart-1.0.1.min.js');
$cs->registerScriptFile($baseUrl . '/js/pbs.init.js');
$cs->registerCssFile($baseUrl . '/css/jquery.css');

?>

<?php $this->pageTitle = Yii::app()->name; ?>

<h1>Test Program <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<div class="span-23 showgrid">
    <form method="post">
        <div class="row">
            <div class="col-md-6 text-left">
                <strong style="font-size:18pt;"><span class="fa fa-users"></span>Data Member</strong>
            </div>
        </div>
        <br/>
        <table width="100%" class="table table-striped table-bordered" id="tabeldata">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Telepon</th>
                <th width="100px">Aksi</th>
            </tr>
            </thead>

            <tbody>
            <?php

            $sql = "select * from member";
            $dataReader = Yii::app()->db->createCommand($sql)->query();
            while (($row = $dataReader->read()) !== false) {
                $data[] = $row;
                ?>
                <tr>
                    <td style="vertical-align:middle;"><?php echo $row['nama'] ?></td>
                    <td style="vertical-align:middle;"><?php echo $row['alamat'] ?></td>
                    <td style="vertical-align:middle;"><?php echo $row['tanggal_lahir'] ?></td>
                    <td style="vertical-align:middle;"><?php echo $row['email'] ?></td>
                    <td style="vertical-align:middle;"><?php echo $row['no_tlpn'] ?></td>
                    <td class="text-center" style="vertical-align:middle;">
                        <?php $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                array('label' => 'Edit', 'url' => array('/site/page', 'view' => 'memberEdit', 'id' => $row['email'])),
                                array('label' => 'Hapus', 'url' => array('/site/page', 'view' => 'deleteMember', 'id' => $row['email']), 'visible' => !Yii::app()->user->isGuest),
                            )
                        )); ?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </form>

    <form method="post">
        <div class="row">
            <div class="col-md-6 text-left">
                <strong style="font-size:18pt;"><span class="fa fa-users"></span>Data User</strong>
            </div>
        </div>
        <br/>
        <table width="100%" class="table table-striped table-bordered" id="tabeldata">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Password</th>
                <th width="100px">Aksi</th>
            </tr>
            </thead>

            <tbody>
            <?php

            $sql = "select * from user";
            $dataReader = Yii::app()->db->createCommand($sql)->query();
            while (($row = $dataReader->read()) !== false) {
                $data[] = $row;
                ?>
                <tr>
                    <td style="vertical-align:middle;"><?php echo $row['username'] ?></td>
                    <td style="vertical-align:middle;"><?php echo $row['password'] ?></td>
                    <td class="text-center" style="vertical-align:middle;">
                        <?php $this->widget('zii.widgets.CMenu',array(
                            'items'=>array(
                                array('label' => 'Edit', 'url' => array('/site/page', 'view' => 'userEdit', 'id' => $row['username']), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => 'Hapus', 'url' => array('/site/page', 'view' => 'deleteUser', 'id' => $row['username']), 'visible' => !Yii::app()->user->isGuest),
                            )
                        )); ?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </form>

</div>