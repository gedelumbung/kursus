<?php
/* @var $this ProgramController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Program',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Program', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Program', 'url'=>array('admin')),
);
?>

<h1>Program</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
