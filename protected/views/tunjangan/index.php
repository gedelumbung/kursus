<?php
/* @var $this TunjanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Tunjangan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create TransaksiTunjangan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage TransaksiTunjangan', 'url'=>array('admin')),
);
?>

<h1>Transaksi Tunjangan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
