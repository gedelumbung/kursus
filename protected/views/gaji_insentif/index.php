<?php
/* @var $this Gaji_insentifController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Penggajian',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create TransaksiPenggajian', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage TransaksiPenggajian', 'url'=>array('admin')),
);
?>

<h1>Transaksi Penggajian</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
