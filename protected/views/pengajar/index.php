<?php
/* @var $this PengajarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengajar',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Pengajar', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Pengajar', 'url'=>array('admin')),
);
?>

<h1>Pengajar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
