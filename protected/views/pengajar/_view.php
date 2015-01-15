<?php
/* @var $this PengajarController */
/* @var $data Pengajar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengajar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengajar), array('view', 'id'=>$data->id_pengajar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />


</div>