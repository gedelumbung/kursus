<?php
/* @var $this ProgramController */
/* @var $model Program */

$this->breadcrumbs=array(
	'Program'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Program', 'url'=>array('index')),
);
?>

<h3>Create Program</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>